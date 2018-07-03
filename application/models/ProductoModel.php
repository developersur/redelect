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
}