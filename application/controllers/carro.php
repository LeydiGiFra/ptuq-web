<?php

class Carro extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('carro_model');
		

	}

	public function index()
	{
		$this->load->view('parqueaderoreserva_view');
	}

	public function registro()
	{
		$this->load->view('parqueaderoreserva_view');
	}

	public function registro_very()
	{
		
		if($this->input->POST('submit_reg'))
		{
			$this->form_validation->set_rules('facultad', 'facultad', 'required');
			$this->form_validation->set_rules('placa', 'placa', 'required');

			
			if($this->form_validation->run()!=FALSE)
			{
				$this->carro_model->add_carro();
				$data = array('mensaje'=>'El Carro se registro correctamente');
				$this->load->view('parqueaderoreserva_view', $data);
			}
			else
			{
				$this->load->view('parqueaderoreserva_view');
			}

		}
	}

	public function eliminar_very()
	{
		
		if($this->input->POST('submit_reg'))
		{
				if($this->form_validation->run()!=TRUE)
			{
				$placa=$_POST['placa'];
				$this->carro_model->eliminar_carro($placa);
				$data = array('mensaje'=>'El Carro se Elimino correctamente');
				$this->load->view('parqueaderodesocupa_view', $data);
				redirect('parqueaderodesocupa');
			}
			

		}
	}

	function very_user($placa)
	{
		$variable = $this->carro_model->very_user($placa);
		if($variable == true)
		{
			return false;
		}
		else
		{
			return true;
		}
	}

	
	

	

}

?>