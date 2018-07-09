<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	// Muestra el contenido del carrito
	public function index()
	{
		$this->load->view('/template/head');
		$this->load->view('admin/login');
		$this->load->view('/template/footer');
	}
}