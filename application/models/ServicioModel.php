<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServicioModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function crearServicio($data)
	{
		//$this->db->insert('categoria', array('nombre' => $data['nombre'], 'descripcion' => $data['descripcion'], 'fecha_creacion' => $data['fecha_creacion']));
	}

	function obtenerServicios()
	{
		$query = $this->db->get('servicio');

		if($query->num_rows() > 0)
		{
			return $query;
		}else{
			return false;
		}
	}

	function getServicio($id)
	{
		//$query = $this->db->get('servicio', array('id' => $id));
		$query = $this->db->get_where('servicio', array('id' => $id));

		if($query->num_rows() > 0)
		{
			return $query->result();
		}else{
			return false;
		}
	}

	function crearCategoria($data)
	{
		$query = $this->db->get_where('servicio', array('codigo' => $data['codigo']));

		if($query->num_rows() > 0)
		{
			return false;
		}else{
			$this->db->insert('servicio',
								array(
								'codigo' => $data['codigo'],
								'titulo' => $data['titulo'],
								'descripcion' => $data['descripcion'],
								'habilitado' => $data['habilitado']));
			return true;
		}
	}
}
