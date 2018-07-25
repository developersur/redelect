<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriaModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		//$this->load->database();
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

	function crearCategoria($data)
	{
		$query = $this->db->get_where('categoria', array('nombre' => $data['nombre']));

		if($query->num_rows() > 0)
		{
			return false;
		}else{
			$this->db->insert('categoria',
													array(
													'nombre' => $data['nombre'],
													'descripcion' => $data['descripcion'],
													'habilitado' => $data['habilitado']));
			return true;
		}
	}
}
