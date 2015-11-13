<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
 
		/*// Se carga el modelo de usuarios.
		$this->load->model('users');
 
		// Se carga el helper url y form.
		$this->load->helper('url');
		$this->load->helper('form');
 
		// Se carga la libreria form_validation.
		$this->load->library('form_validation');
 
		// Se le asigna a la informacion a la variable $user.
		$this->user = @$this->session->userdata('logged_user');
		*/
	}

	public function index()
	{
		if (isset($_POST['password'])) 
		{

			$this->load->model('principal_model');
			$user=$_POST['username'];
			$pass=$_POST['password'];
			if( $this->principal_model->login($user,$pass) ){
				redirect('welcome');
			}else{
				redirect('principal#Bad');
			}
		}
		
		$this->load->view('principal_view');
	}
}
