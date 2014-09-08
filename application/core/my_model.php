<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class My_model extends CI_Model {
    
    const table_name="";
    const primary_key="";
    
    public function insert($obj){
        $this->db->insert($obj::table_name,$obj);
        $this->{$this::primary_key}=  $this->db->insert_id();
    }
    
    public  function select()
    {
        $query=  $this->db->get($this::table_name);
        return $query->result();
        
        
    }
     public  function select_array()
    {
        $query=  $this->db->get($this::table_name);
        return $query->result_array();
     }
     public function select_data($uid)
     {
         $this->db->select('*')->from($this::table_name)->where($this::primary_key,$uid);
        $query=  $this->db->get();
        
       return $query->result_array();
                 
     }
     
     public function update($uid)
     {
         
         $this->db->where($this::primary_key,$uid);
         $msg=$this->db->update($this::table_name,  $this);
         return $msg;
     }
     
     public function delete_data($uid)
     {
         echo "Primary ".$this::primary_key;
         echo "UID".$uid;
             $this->db->where($this::primary_key,$uid);
        $msg= $this->db->delete($this::table_name);
   
        return $msg;
        //$query=  $this->db->get();
     }
}
