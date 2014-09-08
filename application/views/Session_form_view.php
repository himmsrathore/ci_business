<?php
include 'attribute_view.php';
echo 'LOGIN FORM '; 
echo form_open('test/login');
/*$data=  array(
    'name'=>'username',
    'id'=>'user_id',
    'value'=>'himmat',
    'maxlength'=>'50',
);

$data_password=  array(
        'name'=>'password',    
        'id'=>'user_pass',
        'value'=>'password',
        'maxlength'=>'50',
       
);
*/
// using 2D array***************

echo form_label('What is your Name', 'username');
echo form_input($input['username']); echo '<br>';
echo form_label('What is your password', 'password',$attributes_label);
echo form_password($input['password']);echo '<br>';
echo form_label('What is your firstname', 'firstname',$attributes_label);
echo form_input($input['firstname']);echo '<br>';
echo form_label('What is your lastname', 'lastname',$attributes_label);
echo form_input($input['lastname']);
echo '<br>';
echo '<br>';



?>