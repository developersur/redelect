<?php
class UsuarioModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default',true);
    }

    public function ListarPrincipal(){
    	//$result_set = $this->db->query("select * from producto");
    	//return $result_set -> result_array();
    }

    public function crearUsuario($data)
    {
      $query = $this->db->get_where('cliente', array('correo' => $data['correo']));

  		if($query->num_rows() > 0)
  		{
  			return false;
  		}else{
  			$this->db->insert('cliente',
                            array('rut_con' => $data['rut'],
                            'nombre_con' => $data['nombre'],
                            'correo' => $data['correo'],
                            'telefono' => $data['telefono'],
                            'clave' => password_hash($data['password'],PASSWORD_DEFAULT)));
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
