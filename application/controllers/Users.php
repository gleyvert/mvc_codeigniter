<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {

    public function __construct(){
        parent::__construct();
       // $this->load->library(array('session'));
       $this->load->library(array('form_validation'));
       $this->load->helper(array('users/users_rules'));
    }

    public function index(){
        echo 'tabla de usuarios';
    }

    public function create(){
       $vista = $this->load->view('admin/create_user','',TRUE);
        $this->getTemplate($vista);
    }

    public function store(){
        $user = $this->input->post('user');
        $correo = $this->input->post('correo');
        $range = $this->input->post('range');
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $area = $this->input->post('area');
        $espcialidad = $this->input->post('especialidad');
        $cedula = $this->input->post('cedula');

        $this->form_validation->set_rules(getCreateUserRules());
        if($this->form_validation->run() == FALSE){
            
        }else{
            //echo 'todo esta bien';
            $this->session->set_flashdata('msg', 'El usuario ha sido registrado');
            redirect(base_url('users'));
        }

        $vista = $this->load->view('admin/create_user','',TRUE);
        $this->getTemplate($vista);
    }
    public function getTemplate($view){
        $data = array(
            'head' => $this->load->view('layout/head','',TRUE),
            'nav' => $this->load->view('layout/nav','',TRUE),
            'aside' => $this->load->view('layout/aside','',TRUE),
            'footer' => $this->load->view('layout/footer','',TRUE),
            //'content' => $this->load->view('admin/show_users','',TRUE),
            'content'=> $view,
        );
        $this->load->view('dashboard', $data);
    }
}

?>