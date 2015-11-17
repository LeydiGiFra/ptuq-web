<?php

class Carro_model extends CI_Model

{

	public function __construct()
	{
			parent::__construct();
	}

	public function very_user($placa)
	{
		$consulta = $this->db->get_where('parqueadero', array('placa'=>$placa));
		if($consulta->num_rows() == 1)
		{
			return true;
		}
		else
		{

			return false;
		}

	}

	public function add_carro()
	{
		$this->db->insert('parqueadero', array(			
			'facultad'=>$this->input->post('facultad',TRUE),
			'placa'=>$this->input->post('placa',TRUE),
			'estado'=>'ocupado'	));
	}

	public function eliminar_carro($placa)
	{

		$this->db->where('placa', $placa);
		$this->db->delete('parqueadero');
	}


}

?>