<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class parqueadero_model extends CI_Model
{
    public function __construct()
    {
    	parent::__construct();
    }

    
    public function facultades(){
        
        $this->db->distinct('facultad');
        $consulta=$this->db->get('parqueadero');
        $disponibles=$consulta->result();
        
        return $disponibles;
    }
    
    
    public function contarBahiasDisponibles($facultad){

        log_message('info', 'The purpose of some variable is to provide some value.');
        log_message('info', $facultad);

    	$this->db->where('facultad', $facultad);
        $this->db->where('estado', 'disponible');
    	$this->db->from('parqueadero');
        
        $resultado=$this->db->count_all_results();
        
        echo $resultado;

        return $resultado;
    }

    public function reservarbahia($facultad, $placa){

        $this->db->where('facultad', $facultad);
        $this->db->where('estado', 'disponible');
        $this->db->get('parqueadero');

        $this->db->update('parqueadero', $datosBahia);
    }

    public function desocuparbahia($placa){
        $this->db->where('placa', $placa);
        $this->db->get('parqueadero');

        $this->db->update('parqueadero', $datosBahia);
    }
}