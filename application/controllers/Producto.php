<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model('ProductoModel');
        $this->load->model('CategoriaModel');
	}

	public function index()
	{
		$this->load->view('/template/head',$data);
		$this->load->view('servicios/servicio', $data);
		$this->load->view('/template/footer',$data);
    }
    
    public function agregarProducto()
    {
        $data['categorias'] = $this->CategoriaModel->obtenerCategorias();

        $this->load->view('/template/head',$data);
		$this->load->view('Productos/AgregarProducto');
		$this->load->view('/template/footer',$data);
    }
}
