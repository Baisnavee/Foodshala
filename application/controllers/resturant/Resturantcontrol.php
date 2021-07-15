<?php
class Resturantcontrol extends CI_controller{
    public function __construct(){
        parent::__construct();
        $x=$this->session->userdata('resturant');
        if(empty($x)){
            $this->session->set_flashdata('fail','Session expired, kindly log in to continue');
            redirect(base_url().'index.php/resturant/Resturant/index');
            
        }
    }
    public function index(){
        $x=$this->session->userdata('resturant');
        $data['sts']='home';
        $this->load->view('UI/homepage_resturant',$data);
    }
}
?>