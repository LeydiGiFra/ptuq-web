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
			$this->load->model('parqueadero_model');
			
			$facultad = $_POST['facultad'];
			$cantidad = $this->parqueadero_model->contarBahiasDisponibles($facultad);
			echo "Puestos disponibles" + $cantidad;
			$datos['facultad'] = $facultad;
			$datos['cantidad'] = $cantidad;
		}

		$this->load->view('parqueaderosdisponibles_view',$datos);
	}

}
