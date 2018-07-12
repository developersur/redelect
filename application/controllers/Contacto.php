<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function index()
	{
		$this->load->view('/template/head');
		$this->load->view('contacto/contacto');
		$this->load->view('/template/footer');
	}
}