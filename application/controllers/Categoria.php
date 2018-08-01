<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('CategoriaModel');
		$this->load->model('ServicioModel');
	}

	public function viewCategorias()
	{
			$data['categorias'] = $this->CategoriaModel->obtenerCategorias();

			$this->load->view('/template/head');
			$this->load->view('categorias/VerCategorias', $data);
			$this->load->view('/template/footer');
	}

	public function addCategoria()
	{
		//$data['categorias'] = $this->CategoriaModel->obtenerCategorias();

		$this->load->view('/template/head');
		$this->load->view('categorias/AgregarCategoria');
		$this->load->view('/template/footer');
	}

	public function modCategoria()
	{
			$data['categorias'] = $this->CategoriaModel->obtenerCategorias();

			$this->load->view('/template/head');
			$this->load->view('categorias/ModificarCategoria', $data);
			$this->load->view('/template/footer');
	}

	public function agregarCategoria()
	{
				$data = array(
					'nombre' => $this->input->post('nombre'),
					'descripcion' => $this->input->post('descripcion'),
					'habilitado' => $this->input->post('habilitado'),
				);

				$res = $this->CategoriaModel->crearCategoria($data);

				$previous = $_SERVER['HTTP_REFERER'];
				redirect($previous);
	}
}
