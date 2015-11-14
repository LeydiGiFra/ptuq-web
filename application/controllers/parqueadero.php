<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class parqueadero extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if( ! $this->session->userdata('username') ){
			redirect('principal');
		}

		//$this->load->model('parqueadero_model');
		//$datos['arrFacultades'] = $this->principal_model->facultades();
		$this->load->view('parqueadero_view');//, $datos);
	}

}
