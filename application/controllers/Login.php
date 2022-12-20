<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct(){
		parent:: __construct();
		$this->load->helper(array('getmenu', 'url'));
	}
	
	 public function index()
	{
		$data['menu'] = main_menu();
		$this->load->view('login',$data);
	}



	/*
	public function test($id, $hola = 'hola') //el parametro $hola se define por si no se optiede de la url e imprime por default 'hola'
	{
		echo "holas mundo desde text" . $id;
		echo $hola; 
	}
	public function vistas()
	{
		$data['titulo']= 'Desde las vistas';
		$data['lista'] = array('negro', 'blanco','azul');
		$this->load->view('vistas', $data);
		$this->load->view('footer');
	}
	*/
}
