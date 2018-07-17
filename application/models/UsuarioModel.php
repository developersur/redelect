<?php
class UsuarioModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default',true);
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

    public function login($correo, $password)
    {
        $query = $this->db->get_where('cliente', array('correo' => $correo));

        if($query->num_rows() == 1)
        {
            $row=$query->row();
            if(password_verify($password, $row->clave))
            {
                $this->session->logged_in_user = TRUE;
                return true;
            }
        }
        $this->session->unset_userdata('user_data');
        return false;
    }

}
