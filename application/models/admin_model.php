<?php
class Admin_model extends My_model{
    
    const table_name='admin';
    const primary_key='sno_admin';
    
    public $sno_admin;
    public $admin_name;
    public $admin_password;
    
    function __construct(){
        
        parent::__construct();
    }
    
    function insert($admin,$pass){
            $this->admin_name=$admin;
            $this->admin_password=$pass;
            
            parent::insert($this);
            return isset($this->sno_admin);
    }

}

