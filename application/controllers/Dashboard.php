<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library(array('session','pagination'));
        $this->load->model('ModelsUsers');

    }
    public function index($offset = 0){
        if($this->session->userdata('is_logged')){
            $data = $this->ModelsUsers->getUsers();
            $config['base_url'] = base_url('users/index');
            $config['per_page'] = 4;
            $config['total_rows'] = count($data);
            
            $config['full_tag_open']= '<p class="paggin text-center"><nav aria-label="Page navigation example"><ul class="pagination">';
            $config['full_tag_close']='  </ul></nav></p>';
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
    
    
    
            $vista = $this->getTemplate($this->load->view('admin/show_users',array('data' => $page),TRUE));
       

            // $vista = $this->load->view('admin/show_users','',TRUE);
            $this->getTemplate($vista);
        }else{
            show_404();
        }
        
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