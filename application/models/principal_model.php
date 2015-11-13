<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Principal_model extends CI_Model
{
    public $variable; 

    public function __construct()
    {
    	parent::__construct();
    }

    public function login( $username, $password)
    {
    	$this->db->where('user', $username);
    	$this->db->where('password', $password);
    	$q=$this->db->get('usuario');

    	if ($q->num_rows()>0) 
        {
    		return true;
    	}
        else 
        {
    		return false;
    	}
    	
    }

}