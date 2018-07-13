<?php
class CompraModel extends CI_Model {

    public function __construct()
    {                
        parent::__construct();
        $this->db = $this->load->database('default',true);
    }

    public function RegistrarCompra($data){
        $this->db->insert('compra', $data);
        return $this->db->insert_id();
    }

}