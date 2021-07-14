<?php
class Items_model extends CI_model{
    public function get(){
        $this->db->select('items.*,resturant_reg.name as resturant');
        $this->db->join('resturant_reg', 'items.resturant_id=resturant_reg.id', 'LEFT');

        $result=$this->db->get('items')->result_array();
        return $result;
    }

    public function get_item($id){
        $this->db->where('id', $id);
        $result=$this->db->get('items')->row_array();
        return $result;

    }
}
?>