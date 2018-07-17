<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller
{
	public function __construct()
  {
        parent::__construct();
				$this->load->model('CategoriaModel');
				$this->load->model('UsuarioModel');
	}

	public function index(){
		$data['categorias'] = $this->CategoriaModel->obtenerCategorias();

		$this->load->view('template/head', $data);
		$this->load->view('Usuario/index',$data);
		$this->load->view('template/footer', $data);
	}

	public function registrarUsuario()
	{
		$data['categorias'] = $this->CategoriaModel->obtenerCategorias();

		if( $this->input->post('pass1') ===  $this->input->post('pass2'))
		{
			$data = array(
				 'nombre' => $this->input->post('nombre_con'),
				 'rut' => $this->input->post('rut_con'),
				 'telefono' => $this->input->post('telefono'),
				 'correo' => $this->input->post('correo'),
				 'password' => $this->input->post('pass1')
			 );

		 	$res = $this->UsuarioModel->crearUsuario($data);

			if(!$res){
				$data['error'] = '<font color="red">Ya existe un correo asociado</font>';

				$this->load->view('/template/head',$data);
				$this->load->view('login/login', $data);
				$this->load->view('/template/footer',$data);
			}else {
				$data['error'] = '<font color="green">Usuario registrado</font>';

				$this->load->view('/template/head',$data);
				$this->load->view('login/login', $data);
				$this->load->view('/template/footer',$data);
			}
	 	}else {
			$data['error'] = '<font color="red">Contraseñas no coinciden</font>';

			$this->load->view('/template/head',$data);
			$this->load->view('login/login', $data);
			$this->load->view('/template/footer',$data);
	 	}
	}
}
