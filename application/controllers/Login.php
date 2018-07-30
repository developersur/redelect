<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
  {
        parent::__construct();
				$this->load->model('CategoriaModel');
				$this->load->model('UsuarioModel');
	}

	public function index()
	{

		// Si ya inicio sesion lo redirecciono a su panel
		if(isset($_SESSION['login_cliente']) and ($_SESSION['login_cliente']==TRUE)) {
			header("Location: ".base_url()."index.php/Cliente/");
		} 

		$data['categorias'] = $this->CategoriaModel->obtenerCategorias();

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->UsuarioModel->login($username, $password))
		{			
			header("Location: ".base_url()."index.php/Cliente/");
			/*
			$this->load->view('template/head', $data);
			$this->load->view('Usuario/index');
			$this->load->view('template/footer', $data);
			*/
		}
		else
		{
			
			$this->form_validation->set_message('verifica','Contraseña incorrecta');
			
			$this->load->view('template/head', $data);
			$this->load->view('login/login');
			$this->load->view('template/footer', $data);
		}
	}

	function salir(){
		$this->session->sess_destroy();
		redirect('Login', 'refresh');
	}
}
