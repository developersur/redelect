<?php
class Prueba_model extends CI_Model {

    public function __construct()
    {                
        parent::__construct();
        $this->db = $this->load->database('default',true);
    }

    public function DetallePrueba(){
    	$result_set = $this->db->query("select * from comuna");
    	return $result_set -> result_array();
    }
}