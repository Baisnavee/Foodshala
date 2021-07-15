<?php 
class Resturant extends CI_Controller{
       

    
    // this function show the login page 
    public function index(){
        $this->load->library('form_validation');

        $this->load->view('resturant/resturant_login');
    }

    // this is the signup page for new user
    function signup(){
        $this->load->model('Resturant_model');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name' ,'required');
        $this->form_validation->set_rules('address', 'Address' ,'required');
        $this->form_validation->set_rules('phone', 'Phone No' ,'required');
        $this->form_validation->set_rules('email', 'Email Id' ,'required');
        $this->form_validation->set_rules('password', 'Password' ,'required');
        $this->form_validation->set_rules('cpassword', 'Confirm Password' ,'required');
        $this->form_validation->set_error_delimiters('<p class="invalid-feedback">', '</p>');


        if($this->form_validation->run()){
            if($this->input->post('password')==$this->input->post('cpassword')){
            
                $formarray=array();
                $formarray['name']=$this->input->post('name');
                $formarray['address']=$this->input->post('address');
                $formarray['phone']=$this->input->post('phone');
                $formarray['email']=$this->input->post('email');
                $formarray['password']=password_hash($this->input->post('password'),PASSWORD_DEFAULT);
                $this->Resturant_model->create($formarray);
                $this->session->set_flashdata('success','Registered successfully, Login to continue');
                redirect(base_url('resturant/Resturantcontrol/index'));
            }
            else{
                $this->session->set_flashdata('fail','The passwords you have entered do not match.Please try again!!');
                redirect(base_url('resturant/Resturant/signup'));
                
            }

        }else{
            $this->load->view('resturant/sign_up');
        }
    }

    //allow users to login after entering the email and password 
    public function authenticate(){
        $this->load->model('Resturant_model');

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username' ,'required');
        $this->form_validation->set_rules('password', 'Password' ,'required');
        $this->form_validation->set_error_delimiters('<p class="invalid-feedback">', '</p>');


        if($this->form_validation->run()){
            $username=$this->input->post('username');
            $val=$this->Resturant_model->get($username);
            if(!empty($val)){
                $pass=$this->input->post('password');
                
                if(!empty($username)){
                    if (password_verify($pass,$val['password'])) {
                        // username and password both are correct
                        // print_r($val['password']); 
                        // echo "<br>";
                        // print_r(password_hash($pass,PASSWORD_DEFAULT));
                        // exit();
                        $valArr['id']=$val['id'];
                        $valArr['username']=$username;
                        $valArr['name']=$val['name'];
                        $this->session->set_userdata('resturant', $valArr);
                        // print_r($valArr);
                        // exit();
                        //$this->session->set_flashdata('success','Login successful');
                        redirect(base_url().'resturant/Resturantcontrol/index');
                    }else{
                        
                        $this->session->set_flashdata('fail','Password is incorrect');
                        redirect(base_url().'resturant/Resturantcontrol/index');
                    }
                }
                else{
                    $this->session->set_flashdata('fail','Username is incorrect');
                    redirect(base_url().'resturant/Resturantcontrol/index');
                }

            }
            else{
                $this->session->set_flashdata('fail','Username or Password is incorrect');
                redirect(base_url().'resturant/Resturantcontrol/index');
            }
        }
        else{
            $this->load->view('resturant/resturant_login');
        }
    }

     
    public function create(){
        $this->load->library('form_validation');
        $this->load->model('Resturant_model');

        // $result=$this->Resturant_model->getresturant($id);
        // // // print_r($result);
        // // // exit();
        //  $data['arr']=$result;
        
        $data['sts']='add';

        $this->form_validation->set_rules('item_name', 'Item Name' ,'required');
        $this->form_validation->set_rules('price', 'Price' ,'required');
        $this->form_validation->set_rules('status', 'Status' ,'required');
        $this->form_validation->set_rules('status', 'Status' ,'required');
          
        $this->form_validation->set_error_delimiters('<p class="invalid-feedback">', '</p>');
       
        if($this->form_validation->run()== true){
            
            $formArray=array();
            $result=$this->session->userdata('resturant');
            $rest_id=$result['id'];
            $formArray['item_name']=$this->input->post('item_name');
            $formArray['price']=$this->input->post('price');
            $formArray['status']=$this->input->post('status');
            $formArray['availability']=$this->input->post('availability');
            $formArray['resturant_id']=$rest_id;
            
            // $this->load->model('Resturant_model');
            $this->Resturant_model->additems($formArray);
            //print_r($formArray);
            //exit();

            $this->session->set_flashdata('success', 'Item added successfully!!!');
                redirect(base_url().('index.php/resturant/Resturant/create'));
                
        }
        else{
            
        $this->load->view('UI/additems', $data);
        }
    }

    
    public function home(){
        $result=$this->session->userdata('resturant');
        $data['id']=$result['id'];
        $data['sts']='home';

        $this->load->view('UI/homepage_resturant', $data);
    }

    public function vieworder($id){
        $val=$this->session->userdata('resturant');
        $id= $val['id'];
        $this->load->model('Resturant_model');
        $this->load->model('Items_model');
        $array=$this->Resturant_model->getorder($id);
        $data['items']=$array;
        $data['sts']='order';

        // $result=$this->Resturant_model->getresturant($id);
        // $data['orders']=$result;
        $this->load->view('UI/vieworders', $data);
    }

    public function delete($id){
        $this->load->model('Resturant_model');
        $this->Resturant_model->delete($id);
        redirect(base_url('resturant/Resturant/vieworder/'.$id));

    }

    public function logout(){
        $this->session->unset_userdata('resturant');
        redirect(base_url('resturant/Resturant/index'));

    }

}

?>
