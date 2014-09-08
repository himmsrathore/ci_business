<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller
{
    public function index()
    {
        $this->load->view("test_view");
        
    }
    public function login()
    {
        $this->load->view("header_view");
        $this->load->helper('form');
        $this->load->view("Session_form_view");
    }
    
    
}

