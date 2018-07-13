<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
  {
        parent::__construct();
				$this->load->model('CategoriaModel');
	}

	public function index()
	{
		// categorias para la pagina principal
		$data['categorias'] = $this->CategoriaModel->obtenerCategorias();

    $this->form_validation->set_rules('username' ,'Username', 'required');
		$this->form_validation->set_rules('password' ,'Password', 'required|callback_verifica');

    if($this->form_validation->run() == false)
    {
        $data['main_title'] = 'Biblioteca';
        $data['title2'] = 'Registro';

        $this->load->view('template/head', $data);
        $this->load->view('login/login',$data);
        $this->load->view('template/footer', $data);
    }
    else
    {
        $this->load->view('template/head', $data);
        $this->load->view('admin/index');
        $this->load->view('template/footer', $data);
    }
	}

  public function verifica()
  {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      if($this->LoginModel->login($username, $password))
      {
					$this->load->view('template/head', $data);
          $this->load->view('admin/index');
          $this->load->view('template/footer', $data);
      }
      else
      {
          $this->form_validation->set_message('verifica','Contraseña incorrecta');
          $this->load->view('template/head', $data);
          $this->load->view('login/login');
          $this->load->view('template/footer', $data);
      }
  }

	/*public function index()
	{
		$this->load->view('/template/head');
		$this->load->view('admin/login');
		$this->load->view('/template/footer');
	}*/
}
