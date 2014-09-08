<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('header_view');
        $this->load->view('admin_dashboard_view');
        $this->load->view('footer_view');
         
    }
    
    public function register()
    {
        
        $this->load->view('header_view');
        $this->load->view('admin_register_view');
        $this->load->view('footer_view');
    }
    
    public function data_insert()
    {
        $admin_name=  $this->input->post('admin_name');
        $password=  $this->input->post('password');
        //matches[form_item]
      //  $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('admin_name','Admin name','required|min_length[6]|alpha|is_unique[admin.admin_name]');//is_unique[table_name.Field_name]
        $this->form_validation->set_rules('password','Password','required|min_length[6]');
        $this->form_validation->set_rules('cpassword','password confirm','required|min_length[6]|matches[password]');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        
        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('header_view');
            $this->load->view('admin_register_view');
            $this->load->view('footer_view');
            
        }
        else
        {
             $this->load->model('admin_model');
        
             $get_success=  $this->admin_model->insert($admin_name,$password);
        
                    if($get_success==1)
                    {
                       redirect(base_url().'admin/index');

                    }
                    else
                    {
                    redirect(base_url().'admin/register');
                    }
            
            $this->load->view('success');
         }
        
       
           
    }
    
    function show_all_admin()
    {
        $this->load->model('admin_model');
        $array_data['data']=  $this->admin_model->select();
        $this->load->view('show_admin_view',$array_data);
        
        
    }
    function edit($uid)
    {
        $this->load->model('admin_model');
        $arr['data']=  $this->admin_model->select_data($uid);
        $this->load->view('edit_admin_view',$arr);
        
    }
    public function login(){
        
        if(!$this->session->userdata('session_admin'))
        {
        $error['error']=0;
        $this->load->view('header_view');
        $this->load->view('admin_login_view',$error);
        $this->load->view('footer_view');
       }
       else{
          redirect(base_url()."admin/index");
       }
    }
    public function login_check()
    {
         $error['error']=0;
        $uname=  $this->input->post('username');
        $upass=  $this->input->post('password');
        $login=array(
            'admin_name'=>$uname,
            'admin_password'=>$upass
        );
        //var_dump($login);
        $this->db->select("*")->from('admin')->where($login);
        $query=$this->db->get();
        $user=$query->first_row('array');
         //var_dump($user);
       
        if($user==NULL)
        {
//              redirect(base_url()."admin/login");
                 $error['error']=1;
        $this->load->view('header_view');
        $this->load->view('admin_login_view',$error);
        $this->load->view('footer_view');
            
        }
        else
        {
            $this->load->library('session');
            $this->session->set_userdata('session_admin',$user['sno_admin']);
            
            redirect(base_url()."admin/index");
        }
    }
    
    public function  logout()
    {
        if($this->session->userdata('session_admin'))
        {
            $session_data= array(
                "session_admin"=>''
            );
            $this->session->unset_userdata($session_data); 
            echo "Session Destroy";
            redirect(base_url()."admin/index");
        }
        else
        {
            redirect(base_url()."admin/index");
        }
    }
}
?>