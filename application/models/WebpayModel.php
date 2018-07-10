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

}