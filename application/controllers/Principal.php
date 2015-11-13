<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class principal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (isset($_POST['password'])) 
		{

			$this->load->model('principal_model');
			
			if($this->principal_model->login($_POST['username'], $_POST['password']))
			{
				redirect('welcome');
			}
			else
			{
				redirect('principal_view#bad-password');
			}
			

		}
		
		$this->load->view('principal_view');
	}
}
