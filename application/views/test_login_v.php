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
echo form_label('How you Look ?', 'upload photo',$attributes_label);
echo form_upload($input['upload']);
echo '<br>';
echo '<br>';

echo form_dropdown('shirts', $options, 'large');
echo '<br>';
// ******************** radio *********
 echo "Male";       echo form_radio('gender','$radio');
 echo "Female";        echo form_radio('gender','$radio');
 
 echo '<br>';echo '<br>';
 //******************* check box ************
echo form_label('What is your Hobby', 'checkbox',$attributes_label);echo '<br>';

echo form_label('reading','accept',$attributes_label);
echo form_checkbox($checkbox['reading']);echo '<br>';

echo form_label('Movies','accept',$attributes_label);
echo form_checkbox($checkbox['movies']);echo '<br>';

echo form_label('Sketching','accept',$attributes_label);
echo form_checkbox($checkbox['Sketching']);echo '<br>';
 //echo form_checkbox('newsletter', 'accept', TRUE);

echo form_fieldset('Address Information', $field_set);
echo "<p>fieldset content here</p>\n";
echo form_fieldset_close(); echo '<br>';
 
 echo form_button($button['reset']); echo '<br>';

echo form_submit('mysubmit', 'Submit Post!');


?>
