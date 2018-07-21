<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller
{

		function __construct()
		{
	        parent::__construct();
	        $this->load->model('ProductoModel');
	        $this->load->model('CategoriaModel');
		}

		public function index()
		{
			$this->load->view('/template/head');
			$this->load->view('servicios/servicio');
			$this->load->view('/template/footer');
    }

		public function viewProductos()
		{
				$data['productos'] = $this->ProductoModel->obtenerProductos();

				$this->load->view('/template/head');
				$this->load->view('Productos/VerProductos', $data);
				$this->load->view('/template/footer');
		}

    public function formProducto()
    {
        $data['categorias'] = $this->CategoriaModel->obtenerCategorias();

        $this->load->view('/template/head',$data);
				$this->load->view('Productos/AgregarProducto',$data);
				$this->load->view('/template/footer',$data);
    }

		public function modProducto()
    {
        $data['categorias'] = $this->CategoriaModel->obtenerCategorias();
				$data['productos'] = $this->ProductoModel->obtenerProductos();

        $this->load->view('/template/head',$data);
				$this->load->view('Productos/ModificarProducto', $data);
				$this->load->view('/template/footer',$data);
    }

		public function agregarProducto()
		{
			$config['upload_path'] = '././assets/img/productos';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 1000;
			$config['max_width'] = 5418;
			$config['max_height'] = 3048;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('imagen'))
			{
					$error = array('error' => $this->upload->display_errors());
					$data['categorias'] = $this->CategoriaModel->obtenerCategorias();

					$this->load->view('/template/head',$data);
					$this->load->view('Productos/AgregarProducto',$error);
					$this->load->view('/template/footer',$data);
			} else {
					$data = array('upload_data' => $this->upload->data());

					$file_name = $this->upload->data('file_name');

					$base = 'https://www.redelect.cl/';

					$data = array(
						'codigo' => $this->input->post('codigo'),
						'nombre' => $this->input->post('nombre'),
						'descripcion' => $this->input->post('descripcion'),
						'precio' => $this->input->post('precio'),
						'descuento' => $this->input->post('descuento'),
						'marca'=> $this->input->post('marca'),
						'cantidad' => $this->input->post('cantidad'),
						'habilitado' => $this->input->post('habilitado'),
						'nuevo' => $this->input->post('nuevo'),
						'categoria' => $this->input->post('categoria'),
						'imagen' => $base.'assets/img/productos/'.$file_name
					);

					$this->ProductoModel->crearProducto($data);

					$previous = $_SERVER['HTTP_REFERER'];
					redirect($previous);
			}
		}


    public function Categoria()
    {
				$id_categoria = $_GET['id_categoria'];

        $data['id_categoria'] = $id_categoria;
        $data['categorias']   = $this->CategoriaModel->obtenerCategorias();

				// Productos de la categoria
				$data['productos'] = $this->ProductoModel->ProductosPorCategoria($id_categoria);

        $this->load->view('/template/head',$data);
				$this->load->view('Productos/PorCategoria',$data);
				$this->load->view('/template/footer',$data);
    }
}
