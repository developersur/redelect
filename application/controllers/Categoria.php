<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('CategoriaModel');
	}

	public function index()
	{
		$data['categorias'] = $this->ServicioModel->obtenerCategorias();

		$this->load->view('/template/head');
		$this->load->view('categorias/categoria', $data);
		$this->load->view('/template/footer');
	}
}
