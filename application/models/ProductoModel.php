<?php
class ProductoModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default',true);
    }

    public function ListarPrincipal(){
    	$result_set = $this->db->query("select * from producto");
    	return $result_set -> result_array();
    }

    public function crearProducto($data)
    {
      $query = $this->db->get_where('producto', array('codigo' => $data['codigo']));

  		if($query->num_rows() > 0)
  		{
  			return false;
  		}else{
  			$this->db->insert('producto', array('codigo' => $data['codigo'],
                            'nombre' => $data['nombre'],
                            'descripcion' => $data['descripcion'],
                            'precio' => $data['precio'],
                            'descuento' => $data['descuento'],
                            'marca' => $data['marca'],
                            'cantidad' => $data['cantidad'],
                            'habilitado' => $data['habilitado'],
                            'nuevo' => $data['nuevo'],
                            'categoria' => $data['categoria'],
                            'imagen' => $data['imagen']));
  			return true;
  		}
    }

    function obtenerProductos()
  	{
  		$query = $this->db->get('producto');

  		if($query->num_rows() > 0)
  		{
  			return $query;
  		}else{
  			return false;
  		}
  	}
}
