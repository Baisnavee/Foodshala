<?php
class Resturant_model extends CI_model{
    function create($formarray){
        $this->db->insert('resturant_reg', $formarray);
    }

    function get($username){
        $this->db->where('email',$username);
        $this->db->or_where('phone',$username);
        $result=$this->db->get('resturant_reg')->row_array();
        return $result;
    }

    function additems($formArray){
        $this->db->insert('items', $formArray);
    }

    function getresturant($id){
        $this->db->where('id',$id);
        $result=$this->db->get('resturant_reg')->row_array();
        return $result;
    }

    function getrest(){
        //$this->db->where('id',$id);
        $result=$this->db->get('resturant_reg')->result_array();
        return $result;
    }

    function getorder($id){
        $this->db->where('resturant_id',$id);
        $result=$this->db->get('orders')->result_array();
        return $result;
    }
    function delete($id){
        $this->db->where('id', $id);{
        $this->db->delete('orders');
        }
    }

}
?>