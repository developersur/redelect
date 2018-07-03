<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carro extends CI_Controller {

	// Muestra el contenido del carrito
	public function index()
	{
		$this->load->view('/template/head');
		$this->load->view('Carro/index');
		$this->load->view('/template/footer');
	}

	// Muestra contenido del carrito en la cabecera
	public function Mostrar() {
		$this->load->view('/Carro/Carrito_cabecera');
	}


	// Agrega producto al carrito
	public function Agregar() {
		
		// Recibe los datos
		$codigo_producto   = $this->input->post('codigo_producto');
		$nombre_producto   = $this->input->post('nombre_producto');
		$cantidad_producto = $this->input->post('cantidad_producto');
		$precio_producto   = $this->input->post('precio_producto');
		$imagen_producto   = $this->input->post('imagen_producto');

		// Array con los datos
		$insert = array(
			'id'     => $codigo_producto,
			'qty'    => $cantidad_producto,
			'price'  => $precio_producto,
			'name'   => $nombre_producto,
			'imagen' => $imagen_producto
		);

		// Guarda los datos en la sesion del carrito
		if($this->cart->insert($insert)) {
			//echo "Holaaaaa";
			$this->load->view('/Carro/Carrito_cabecera');
		} else { 
			echo "mal";
		};
	}



	// Actualiza la cantidad del producto
	public function Actualizar() {
		
		// Recibe los datos
		$rowid             = $this->input->post('rowid');
		$cantidad_producto = $this->input->post('cantidad_producto');

		// Array con los datos
		$data = array(
			'rowid' => $rowid,
			'qty'   => $cantidad_producto
		);

		// Actualiza los datos en la sesion del carrito
		if($this->cart->update($data)) echo "ok"; else echo "mal";
	}
	

	// Elimina el producto 
	public function Quitar() {

		// Recibe los datos
		$rowid = $this->input->post('rowid');

		// Array con los datos, si la cantidad en cero se elimina el producto del carrito
		$data = array(
			'rowid' => $rowid,
			'qty'   =>0
		);

		// Actualiza los datos en la sesion del carrito
		if($this->cart->update($data)) echo "ok"; else echo "mal";
	}


	
	// Elimina el producto desde el carrito de la cabecera
	public function QuitarCabecera() {

		// Recibe los datos
		$rowid = $this->input->post('rowid');

		// Array con los datos, si la cantidad en cero se elimina el producto del carrito
		$data = array(
			'rowid' => $rowid,
			'qty'   =>0
		);

		// Actualiza los datos en la sesion del carrito
		if($this->cart->update($data)) {
			$this->load->view('/Carro/Carrito_cabecera');
		} else { 
			echo "mal";
		}
	}

}