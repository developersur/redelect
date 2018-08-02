<?php
class WebpayModel extends CI_Model {

    public function __construct()
    {                
        parent::__construct();
        $this->db = $this->load->database('default',true);
    }

    public function RegistrarPago($data){
        $this->db->insert('pago_webpay', $data);
        return $this->db->insert_id();
    }

    public function VerficarPagoToken($token){
        $result_set = $this->db->query("select * from pago_webpay where token='$token'");
        return $result_set->result_array();
    }

}