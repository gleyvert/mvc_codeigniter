<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {

    public function __construct(){
        parent::__construct();
       // $this->load->library(array('session'));
    }

    public function create(){
       $this->load->view('admin/create_user','',TRUE);
        
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