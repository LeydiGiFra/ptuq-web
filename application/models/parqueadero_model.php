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

    /*
    public function facultades(){
        
        $query = $this->db-> query('SELECT DISTINCT facultad FROM parqueadero');

        // si hay resultados
        if ($query->num_rows() > 0) {
        
            almacenamos en una matriz bidimensional
            foreach($query->result() as $row)
               $arrDatos[htmlspecialchars($row->id_profesion, ENT_QUOTES)] = htmlspecialchars($row->profesion, ENT_QUOTES);

            $query->free_result();
            return $arrDatos;
        }
        $this->db->distinct('facultad');
        $disponibles=$this->db->get('parqueadero');
        
        return $disponibles;
    }
    */
    
    public function contarBahiasDisponibles($facultad){

    	$this->db->where('facultad', $facultad);
        $this->db->where('estado', 'disponible');
    	$q=$this->db->get('parqueadero');

    	return $q->num_rows();
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