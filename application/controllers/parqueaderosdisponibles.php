<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class parqueaderosdisponibles extends CI_Controller {

	var $facultad;

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if( ! $this->session->userdata('username') ){
			redirect('principal');
		}

		$datos=null;
		if ( isset($_POST['facultad']) ) {
			$facultad=$_POST['facultad'];
			
			$datos['facultad'] = $facultad;
			$datos['cantidad'] = $this->contarparqueaderos($facultad);
		}

		$this->load->view('parqueaderosdisponibles_view',$datos);
	}

	public function contarparqueaderos($facultad)
	{
		$this->load->model('parqueadero_model');
			
		return $this->parqueadero_model->contarBahiasDisponibles($facultad);
	}

}
