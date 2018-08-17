<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatosModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    
    public function obtenerDatos()
    {
        $query = $this->db->get('datos');

  		if($query->num_rows() > 0)
  		{
  			return $query;
  		}else{
  			return false;
  		}
    }
}
