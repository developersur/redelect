<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		// carga categorias
		$this->load->model('CategoriaModel');
		// Carga Modelo
		$this->load->model('ProductoModel');
		// carga servicio
		$this->load->model('ServicioModel');
		
	}

	public function index()
	{
		// Productos para la pagina principal
		$data['ProductosPrincipal'] = $this->ProductoModel->ListarPrincipal();

		// categorias para la pagina principal
		$data['categorias'] = $this->CategoriaModel->obtenerCategorias();

		// servicios para la pagina principal
		$data['servicios'] = $this->ServicioModel->obtenerServicios();

		$this->load->view('/template/head', $data);
		$this->load->view('home');

		// Productos
		$this->load->view('/Productos/Principal',$data);
		$this->load->view('/template/footer', $data);
	}
}
