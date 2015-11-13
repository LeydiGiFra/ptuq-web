<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class principal_model extends CI_Model
{
    public function method_name()
    {
    	parent::__construct();
    }

    public function login( $username, $password)
    {
    	this->db->where('username', $username);
    	this->db->where('password', $password);
    	$q = this->db->get('usuario');

    	if ($q->num_rows()>0) {
    		return true;
    	} else {
    		return false;
    	}
    	
    }

}