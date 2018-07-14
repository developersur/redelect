<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institucion extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('CategoriaModel');
	}

	public function index()
	{
		$data['categorias'] = $this->CategoriaModel->obtenerCategorias();

		$this->load->view('/template/head',$data);
		$this->load->view('Institucion/index');
		$this->load->view('/template/footer',$data);
	}
}
