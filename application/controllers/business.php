<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Business extends CI_Controller
{
    public function index()
    {
        $this->load->view("header_view");
        //$this->load->view("test_view");
        //$this->load->view("test_view");
        $this->load->view("footer_view");
        
    }
    public function login(){
        $this->load->view('header_view');
        $this->load->view('login_view');
        $this->load->view('footer_view');
    }

        public function register()
    {
       $this->load->view("header_view");
        //$this->load->view("test_view");
        $this->load->view("register_view");
        $this->load->view("footer_view");
    }
    
    public function add_info()
    {
       $this->load->view("header_view");
        //$this->load->view("test_view");
        $this->load->view("add_info_view");
        $this->load->view("footer_view");
    }
    
    
    public function register_insert()
    {
        //$this->load->view("register_insert_view");
        $first_name_x=$this->input->post('first_name');
        $last_name_x=$this->input->post('last_name');
        $email_id_x=$this->input->post('email');
        $password_x=$this->input->post('password');
      
        $this->load->model("user_model");
         $get_success=$this->user_model->insert($first_name_x,$password_x,$email_id_x);
          if($get_success==true)
         {
            //$this->load->view("register_insert_view");
              
             redirect(base_url().'business/register');
             
         }else{
             echo "Error";
         }
      
         
    }
    
    public function add_info_insert()
    {
        $contact=  $this->input->post('contact');
        $address=  $this->input->post('address');
        $district=  $this->input->post('district');
        $state=  $this->input->post('state');
        
        $this->load->model('add_info_model');
         $get_success=$this->add_info_model->insert($contact,$address,$district,$state);
        
                
    }
    
    public function checkPass()
    {
        $uname=  $this->input->post('username');
        $upass=  $this->input->post('password');
        
    }
   /* public function showData()
    {
          $this->load->view('header_view');
         / /**********************************
          $this->load->model('user_model');
          $array_data['data']=$this->user_model->select();
          $array_data['data1']=$this->user_model->select_array();
          //**********************************
        $this->load->view('show_data_view',$array_data);
        $this->load->view('footer_view');
    }
    */
    
    public function showDataPage($index=0)
    {
        $this->load->view('header_view');
        //---------------------------
        //--------------Learn Pagination ---------------
                $this->load->library('pagination');
                $config['base_url'] = base_url().'business/showDataPage/';
                //http://localhost/CI_business/business/showDataPage
                $config['total_rows'] = 2;
                $config['per_page'] = 4;
                
                $this->load->model('user_model');
                $array_data['data']=$this->user_model->select();

                $this->pagination->initialize($config);

                echo $this->pagination->create_links();
        
        
        
        
        //-----------------------------
       // $this->load->view('footer_view');
    }


    
    public function edit($uid=0)
    {
        $this->load->view('header_view');
        if($uid==0)
        {
            redirect(base_url().'business/showData');
        }
        $this->load->model('user_model');
        $arr['data_list']=  $this->user_model->select_data($uid);
       // var_dump($arr)
           $this->load->view('edit_view',$arr);       
             $this->load->view('footer_view');    
        
    }
    
    public function update($uid=0)
    {
         $this->load->view('header_view');
         if($uid==0)
        {
            redirect(base_url().'business/showData');
        }
        
        $this->load->model("user_model");
        $user_model=new User_model();
         $user_model->sno_user=$uid;
         $user_model->firstname=$this->input->post('first_name');
         $user_model->email=  $this->input->post('email');
         $user_model->password=$this->input->post('password');
         
      
        
         $get_success=$user_model->update($uid);
         if($get_success==1)
         {
              redirect(base_url().'business/showData');
         }
         else
         {
             echo "Error In UPDATE";
         }
         
         
    }

        public function delete($uid)
    {
       if($uid==0)
       {
           redirect(base_url().'business/showData');
       }
       $this->load->model('user_model');
       $delete=  $this->user_model->delete_data($uid);
       if($delete==1)
       {
           redirect(base_url().'business/showData');
       }
       else{
           Echo "Not Delete";
       }
       
    }
    
    
}

