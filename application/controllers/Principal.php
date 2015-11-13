<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class principal extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {

		if( ! $this->session->userdata('username') ){
			redirect('welcome');
		}

		if ( isset($_POST['password']) ) {

			$this->load->model('principal_model');

			$user=$_POST['username'];
			$pass=$_POST['password'];
			
			if( $this->principal_model->login($user, $pass) ) {
				
				$this->session->set_userdata('username', $user);
				redirect('welcome');
			}
			else {
				redirect('principal#bad-password');
			}
			

		}
		
		$this->load->view('principal_view');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('principal');
	}
}
