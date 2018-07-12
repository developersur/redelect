<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuienesSomos extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('QuienesSomosModel');
	}

	public function index()
	{
		$data['quienessomos'] = $this->QuienesSomosModel->obtenerQuienesSomos();
		$this->load->view('/template/head');
		$this->load->view('quienesSomos/quienesSomos',$data);
		$this->load->view('/template/footer');
	}
}