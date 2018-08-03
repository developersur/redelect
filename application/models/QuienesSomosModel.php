<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuienesSomosModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function crearQuienesSomos($data)
	{
		//$this->db->insert('categoria', array('nombre' => $data['nombre'], 'descripcion' => $data['descripcion'], 'fecha_creacion' => $data['fecha_creacion']));
	}

	function obtenerQuienesSomos()
	{
		$query = $this->db->get('quienes_somos');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}else{
			return false;
		}
	}

	function getQuienesSomo($id)
	{
		//$query = $this->db->get('producto', array('id' => $id));
		/*$query = $this->db->get_where('categoria', array('id' => $id));

		if($query->num_rows() > 0)
		{
			return $query->result();
		}else{
			return false;
		}*/
	}
}