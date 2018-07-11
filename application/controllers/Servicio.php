<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('ServicioModel');
	}

	public function index()
	{
		$data['servicios'] = $this->ServicioModel->obtenerServicios();

		$this->load->helper('url');
		$this->load->view('/template/head');
		$this->load->view('servicios/servicio', $data);
		$this->load->view('/template/footer');
	}
}