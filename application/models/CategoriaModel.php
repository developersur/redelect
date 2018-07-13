<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriaModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		//$this->load->database();
	}

	function crearCategoria($data)
	{
		//$this->db->insert('categoria', array('nombre' => $data['nombre'], 'descripcion' => $data['descripcion'], 'fecha_creacion' => $data['fecha_creacion']));
	}

	function obtenerCategorias()
	{
		$query = $this->db->get('categoria');

		if($query->num_rows() > 0)
		{
			return $query;
		}else{
			return false;
		}
	}

	function getCategoria($id)
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
