<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compra extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model('CompraModel');
        $this->load->model('ProductoModel');
        $this->load->model('CategoriaModel');
	}
    /*
	public function index()
	{
		$this->load->view('/template/head');
		$this->load->view('servicios/servicio');
		$this->load->view('/template/footer');
    }
    

    public function formProducto()
    {
        $data['categorias'] = $this->CategoriaModel->obtenerCategorias();

        $this->load->view('/template/head',$data);
				$this->load->view('Productos/AgregarProducto');
				$this->load->view('/template/footer',$data);
    }
    */
    
    public function Listar()
    {
        $data['categorias'] = $this->CategoriaModel->obtenerCategorias();
		$data['compras']    = $this->CompraModel->ListarCompras();
        
        $this->load->view('/template/head',$data);
		$this->load->view('Compras/Listado', $data);
		$this->load->view('/template/footer',$data);
    }

}
