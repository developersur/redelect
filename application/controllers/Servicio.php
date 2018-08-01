<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('ServicioModel');
		$this->load->model('CategoriaModel');
		$this->load->model('ServicioModel');
	}

	public function index()
	{
		$data['servicios'] = $this->ServicioModel->obtenerServicios();
		//$data['categorias'] = $this->CategoriaModel->obtenerCategorias();

		$this->load->view('/template/head');
		$this->load->view('servicios/servicio', $data);
		$this->load->view('/template/footer');
	}
}
