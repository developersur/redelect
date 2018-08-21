<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuienesSomos extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('QuienesSomosModel');
		$this->load->model('CategoriaModel');
		$this->load->model('ServicioModel');
		// carga los datos
		$this->load->model('DatosModel');
	}

	public function obtenerQS()
	{
		$res = $this->QuienesSomosModel->obtenerQuienesSomos();

		foreach ($res as $key => $value) {
			$data[] = $value->titulo;
			$data[] = $value->descripcion;
		}

		echo json_encode($data);
	}
}
