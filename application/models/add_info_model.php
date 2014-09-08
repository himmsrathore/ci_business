<?php
class Add_info_model extends My_model{
const table_name='contact';
const primary_key='sno_contact';

public $sno_contact;
public $contact;
public $address;
public $district;
public $state;

function __construct(){
    parent::__construct();
}

function insert($contact,$address,$district,$state)
{
    $this->contact=$contact;
    $this->address=$address;
    $this->district=$district;
    $this->state=$state;
    
    parent::insert($this);
    echo 'success'.$this->sno_contact;
    
    return isset($this->sno_contact);
    
}



}





