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
    
    public function CompraDetalles($data){
        $result_set = $this->db->query("select * from compra where id_compra=$data");
        return $result_set->result_array();
    }

    public function ProductosCompra($data){
        $result_set = $this->db->query("select * from compra_detalle where id_compra=$data");
        return $result_set->result_array();
    }

    public function DetallePagoWebPay($id_compra){
        $result_set = $this->db->query("select * from pago_webpay where id_compra=$id_compra");
        return $result_set->result_array();
    }

    public function ActualizarCompra($data,$id_compra){
        if ($this->db->update('compra', $data, array('id_compra' => $id_compra))) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}