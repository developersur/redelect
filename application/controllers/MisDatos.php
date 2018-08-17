<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MisDatos extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('CategoriaModel');
        $this->load->model('ServicioModel');
        $this->load->model('DatosModel');
	}

	public function viewDatos()
	{
        $data['datos'] = $this->DatosModel->obtenerDatos();
            
		$this->load->view('/template/head');
		$this->load->view('datos/verDatos', $data);
		$this->load->view('/template/footer');
	}
}
