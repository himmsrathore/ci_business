<?php
class User_model extends My_model{
    const table_name="user";
    const primary_key="sno_user";
    // DATA BASE NAME FIELD NAME SAME ***********
    public $sno_user;
    public $firstname;
    public $email;
    public $password;
    
    function __construct() {
        parent::__construct();
       
    }
    function insert($a,$b,$c)          /// Sequence ......
    {
        $this->firstname=$a;
        $this->email=$c;
        $this->password=$b;
        parent::insert($this);
       // echo "new insert id =".$this->sno_user;
        return isset($this->sno_user);
    }
    
     public  function select()
    {
         $query=  parent::select();
         return $query;
    }
     /*  public  function select_array()
    {
         $query=  parent::select_array();
         return $query;
    }*/
    
   /* public function select_data($uid)
    {
        $query=  parent::select_array('sno_user',$uid);
        return $query;
    }*/
    
    
}