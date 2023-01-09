<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->library(array('session'));
        $this->load->library(array('form_validation', 'email', 'pagination'));
        $this->load->helper(array('users/users_rules', 'string'));
        $this->load->model('ModelsUsers');
    }

    public function index($offset = 0)
    {
        $data = $this->ModelsUsers->getUsers();
        $config['base_url'] = base_url('users/index');
        $config['per_page'] = 4;
        $config['total_rows'] = count($data);

        $config['full_tag_open'] = '<p class="paggin text-center"><nav aria-label="Page navigation example"><ul class="pagination">';
        $config['full_tag_close'] = '  </ul></nav></p>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
        $config['next_link'] = '&raquo;'; //siguiente
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close'] = '</span></li>';
        $config['prev_link'] = '&laquo'; //anterior
        $config['prev_tag_open'] = '<div class="page-item"><span class="page-link">';
        $config['prev_tag_close'] = '</div>';
        $config['first_link'] = 'Principio';
        $config['first_tag_open'] = '<div class="page-item"><span class="page-link">';
        $config['first_tag_close'] = '</span></div>';
        $config['last_link'] = 'Final';
        $config['last_tag_open'] = '<div class="page-item"><span class="page-link">';
        $config['last_tag_close'] = '</span></div>';


        $this->pagination->initialize($config);

        $page = $this->ModelsUsers->getPaginate($config['per_page'], $offset);



        $this->getTemplate($this->load->view('admin/show_users', array('data' => $page), TRUE));
    }

    public function delete()
    {
        $_id = $this->input->post('id', true);
        if(empty($_id)){
            $this->output
            ->set_status_header(400)
            ->set_output(json_encode(array('msg' => 'El id no puede se vacio ')));
        }else{
           $this->ModelsUsers->deleteUser($_id);
           $this->output->set_status_header(200);
        }
    }

    public function create()
    {
        $vista = $this->load->view('admin/create_user', '', TRUE);
        $this->getTemplate($vista);
    }

    public function update()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $nombre = $this->input->post('nombre');
            $id_usuario = $this->input->post('id_usuario');
            $apellidos = $this->input->post('apellidos');
            $cedula = $this->input->post('cedula');
            $especialidad = $this->input->post('especialidad');
            $area = $this->input->post('area');

            $username = $this->input->post('username');

            $this->form_validation->set_rules(getUpdateUsersRules());
            if ($this->form_validation->run() === FALSE) {
                $user = $this->ModelsUsers->getUser($id_usuario);

                $view = $this->load->view('admin/edit_user', array('user' => $user), true);
                $this->getTemplate($view);
            } else {
                #actualizar
                //show_404();
                $data = array(
                    'nombre' => $nombre,
                    'apellido' => $apellidos,
                    'cedula' => $cedula,
                    'especialidad' => $especialidad,
                    'area' => $area,
                );
                $this->ModelsUsers->updateUser($id_usuario, $data);
                $this->session->set_flashdata('msg', 'El usuario ' . $username . ' Fue actualizado correctamente');
                redirect('users');
            }
        }else{
            show_404();
        }
    }
    public function store()
    {
        $user = $this->input->post('user');
        $correo = $this->input->post('correo');
        $range = $this->input->post('range');
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $area = $this->input->post('area');
        $especialidad = $this->input->post('especialidad');
        $cedula = $this->input->post('cedula');

        $this->form_validation->set_rules(getCreateUserRules());
        if ($this->form_validation->run() == FALSE) {
            $this->output->set_status_header(400);
        } else {
            //echo 'todo esta bien';
            $user = array(
                'nombre_usuario' => $user,
                'contrasena' => random_string('alnum', 8),
                'correo' => $correo,
                'range' => $range,
                'status' => 1,
            );
            $user_info = array(
                'nombre' => $name,
                'apellido' => $lastname,
                'cedula' => $cedula,
                'especialidad' => $especialidad,
                'area' => $area,

            );
            if (!$this->ModelsUsers->save($user, $user_info)) {
                $this->output->set_status_header(500);
            } else {
                $this->sendEmail($user);
                $this->session->set_flashdata('msg', 'El usuario ha sido registrado');
                redirect(base_url('users'));
            }
        }

        $vista = $this->load->view('admin/create_user', '', TRUE);
        $this->getTemplate($vista);
    }

    public function edit($id = 0)
    {
        //echo $id;
        $user = $this->ModelsUsers->getUser($id);
        // echo json_encode($user);
        $view = $this->load->view('admin/edit_user', array('user' => $user), TRUE);
        $this->getTemplate($view);
    }
    public function sendEmail($data)
    {
        $this->email->from('sistema@hospidev.com', 'Hospidev');
        $this->email->to($data['correo']);


        $this->email->subject('Datos de cuenta');

        $vistaWelcome = $this->load->view('emails/welcome', $data, TRUE);
        $this->email->message($vistaWelcome);

        $this->email->send();
    }

    public function getTemplate($view)
    {
        $data = array(
            'head' => $this->load->view('layout/head', '', TRUE),
            'nav' => $this->load->view('layout/nav', '', TRUE),
            'aside' => $this->load->view('layout/aside', '', TRUE),
            'footer' => $this->load->view('layout/footer', '', TRUE),
            //'content' => $this->load->view('admin/show_users','',TRUE),
            'content' => $view,
        );
        $this->load->view('dashboard', $data);
    }
}
