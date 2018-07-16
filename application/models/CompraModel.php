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

    
    public function RegistrarDetalles($data){
    	if($this->db->insert('compra_detalle',$data)){
    		return TRUE;
    	} else {
    		return FALSE;
    	}
    }

    public function ListarCompras(){
        $result_set = $this->db->query("
        select * 
        from 
            compra 
        ORDER BY 
            fecha_creacion DESC");
        return $result_set->result_array();
    }


}