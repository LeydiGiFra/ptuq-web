<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class parqueaderoreserva extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		if( ! $this->session->userdata('username') ){
			redirect('principal');
		}

		$this->load->view('parqueaderoreserva_view');
	}

}
