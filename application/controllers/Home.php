<?php
class Home extends CI_controller{
    public function index(){

        // $this->load->model('Jobs_model');
        // $job=$this->Jobs_model->get_uiid();
        // $data=[];
        // $data['arr']=$job;
        $data['sts']='home';
        //$data['sts']='abt';

        $this->load->view('UI/homepage', $data);
    }

    public function menu(){
        $this->load->model('Items_model');
        //$this->load->model('Resturant_model');

        $result=$this->Items_model->get();

        //$val=$this->Resturant_model->getrest();
       // $data['r']=$val;
        $data['items']=$result;
        $data['sts']='menu';
        $this->load->view('UI/menucard',$data);
    }
}
?>