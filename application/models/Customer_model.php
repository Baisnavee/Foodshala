<?php
class Customer_model extends CI_model{
    function create($formarray){
        $this->db->insert('customer_reg', $formarray);
    }

    function get($username){
        $this->db->where('email',$username);
        $this->db->or_where('phone',$username);
        $result=$this->db->get('customer_reg')->row_array();
        return $result;
    }

    function addorder($orderarray){
        $this->db->insert('orders', $orderarray);
        //$result=$this->db->get('items')->row_array();
        //return $result;
    
    }

    
}
?>