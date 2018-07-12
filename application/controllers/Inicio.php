<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		// Carga Modelo
        $this->load->model('ProductoModel');

		// Productos para la pagina principal
		$data['ProductosPrincipal'] = $this->ProductoModel->ListarPrincipal();

		$this->load->view('/template/head');
		$this->load->view('home');
		
		// Productos
		$this->load->view('/Productos/Principal',$data);
		$this->load->view('/template/footer');
	}
}
