<?php 
class Customer extends CI_Controller{

    // this function show the login page 
    public function index(){
        $this->load->library('form_validation');

        $this->load->view('customer/customer_login');
    }

    // this is the signup page for new user
    function signup(){
        $this->load->model('Customer_model');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name' ,'required');
        $this->form_validation->set_rules('email', 'Email' ,'required');
        $this->form_validation->set_rules('phone', 'Phone No' ,'required');
        $this->form_validation->set_rules('food', 'Food Preference' ,'required');
        $this->form_validation->set_rules('password', 'Password' ,'required');
        $this->form_validation->set_rules('cpassword', 'Confirm Password' ,'required');
        $this->form_validation->set_error_delimiters('<p class="invalid-feedback">', '</p>');


        if($this->form_validation->run()){
            if($this->input->post('password')==$this->input->post('cpassword')){
            
                $formarray=array();
                $formarray['name']=$this->input->post('name');
                $formarray['email']=$this->input->post('email');
                $formarray['phone']=$this->input->post('phone');
                $formarray['food']=$this->input->post('food');
                $formarray['password']=password_hash($this->input->post('password'),PASSWORD_DEFAULT);

                $this->Customer_model->create($formarray);
                $this->session->set_flashdata('success','Registered successfully, Login to continue');
                redirect(base_url('customer/Customer/index'));
            }
            else{
                $this->session->set_flashdata('fail','The passwords you have entered do not match.Please try again!!');
                redirect(base_url('customer/Customer/signup'));
                
            }

        }else{
            $this->load->view('customer/sign_up');
        }
    }

    public function authenticate(){
        $this->load->model('Customer_model');

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username' ,'required');
        $this->form_validation->set_rules('password', 'Password' ,'required');
        $this->form_validation->set_error_delimiters('<p class="invalid-feedback">', '</p>');


        if($this->form_validation->run()){
            $username=$this->input->post('username');
            $val=$this->Customer_model->get($username);
            if(!empty($val)){
                $pass=$this->input->post('password');
                
                if(!empty($username)){
                    if (password_verify($pass,$val['password'])) {
                        //execute if username and password both are correct
                        $valArr['id']=$val['id'];
                        $valArr['username']=$username;
                        $valArr['name']=$val['name'];
                       $this->session->set_userdata('customer', $valArr);
                        $this->session->set_flashdata('success','Login successful');
                        redirect(base_url().'customer/Customer/home');
                    }else{
                        
                        $this->session->set_flashdata('fail','Password is incorrect');
                        redirect(base_url().'customer/Customer/index');
                    }
                }
                else{
                    $this->session->set_flashdata('fail','Username is incorrect');
                    redirect(base_url().'customer/Customer/index');
                }

            }
            else{
                $this->session->set_flashdata('fail','Username or Password is incorrect');
                redirect(base_url().'customer/Customer/index');
            }
        }
        else{
            $this->load->view('customer/customer_login');
        }
    }

    public function home(){
        $data['sts']='home';
        $this->load->view('UI/homepage_customer',$data);
    }

    public function order(){
        $this->load->model('Items_model');
        $result=$this->Items_model->get();
        $data['sts']='orders';
        $data['items']=$result;
        $this->load->view('UI/place_order',$data);
    }

   public function create_order($id){
        $this->load->model('Items_model');
        $this->load->model('Customer_model');
        $r=$this->Items_model->get_item($id);
        $val=$this->session->userdata('customer');
        $orderarray=array();
        //$orderarray['item_id']=$id;
        $orderarray['customer_name']=$val['name'];
        $orderarray['item_name']=$r['item_name'];
        $orderarray['price']=$r['price'];
        $orderarray['resturant_id']=$r['resturant_id'];
        $this->Customer_model->addorder($orderarray);
        //$this->load->view('UI/place_order',$orderarray);
        redirect(base_url().'customer/Customer/thanks');
        
   }
   public function thanks(){
       $this->load->view('UI/thankyou');
   }

    public function logout(){
        $this->session->unset_userdata('customer');
        redirect(base_url('customer/Customer/index'));

    }
}
?>