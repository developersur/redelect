<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuienesSomos extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('QuienesSomosModel');
		$this->load->model('CategoriaModel');
	}

	public function index()
	{
		$data['quienessomos'] = $this->QuienesSomosModel->obtenerQuienesSomos();
		$data['categorias'] = $this->CategoriaModel->obtenerCategorias();

		$this->load->view('/template/head', $data);
		$this->load->view('quienesSomos/quienesSomos',$data);
		$this->load->view('/template/footer', $data);
	}
}
