<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mapa extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if( ! $this->session->userdata('username') ){
			redirect('principal');
		}
		$titulo="Explorador del Mapa";
		$contenido="Mapa de nuestras instalaciones en Armenia - Quindío";

		$datos['titulo']=$titulo;
		$datos['contenido']=$contenido;
		$this->load->view('mapa_view',$datos);
	}
}
