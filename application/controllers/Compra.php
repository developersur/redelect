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


    public function Detalle()
    {   
        $id_compra = $_GET['id_compra'];
        
        $data['id_compra']      = $id_compra;
        $data['categorias']     = $this->CategoriaModel->obtenerCategorias();
		$data['compra']         = $this->CompraModel->CompraDetalles($id_compra);
		$data['compra_detalle'] = $this->CompraModel->ProductosCompra($id_compra);
		$data['datospago']      = $this->CompraModel->DetallePagoWebPay($id_compra);
        
        $this->load->view('/template/head',$data);
		$this->load->view('Compras/Detalle', $data);
		$this->load->view('/template/footer',$data);
    }

}
