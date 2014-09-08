<?php
$input=
        array(
    "username" =>  array(
    'name'=>'username',
    'id'=>'user_id',
    'value'=>'himmat',
    'maxlength'=>'50',
    ),

    "password" =>  array(
        'name'=>'password',    
        'id'=>'user_pass',
        'value'=>'password',
        'maxlength'=>'50',
       
    ),
    "firstname"=>  array(
        'name'=>'firstname',    
        'id'=>'firstname',
        'value'=>'firstname',
        'maxlength'=>'50',
       
    ),
    "lastname"=>  array(
        'name'=>'lastname',    
        'id'=>'lastname',
        'value'=>'lastname',
        'maxlength'=>'50',
       
    ),
            
         "uplaod"=>  array(
        'name'=>'uplaod',    
        'id'=>'uplaod',
        'value'=>'uplaod',
        'maxlength'=>'50',
       
    )
);

$radio=  array(
    'male'=>'Male',
    'female'=>'Female',

);

$options = array(
                  'small'  => 'Small Shirt',
                  'med'    => 'Medium Shirt',
                  'large'   => 'Large Shirt',
                  'xlarge' => 'Extra Large Shirt',
                );

$checkbox = array(
        
    'reading'=>array(
                    'name'        => 'reading',
                    'id'          => 'reading',
                    'value'       => 'accept',
                    'checked'     => TRUE,
                    'style'       => 'margin:10px',
    ),
    'movies'=>array(
                    'name'        => 'movies',
                    'id'          => 'movies',
                    'value'       => 'accept',
                    'checked'     => FALSE,
                    'style'       => 'margin:10px',
    ),
    'Sketching'=>array(
                    'name'        => 'sketching',
                    'id'          => 'sketching',
                    'value'       => 'accept',
                    'checked'     => FALSE,
                    'style'       => 'margin:10px',
    ),
    'painting'=>array(
                    'name'        => 'painting',
                    'id'          => 'painting',
                    'value'       => 'accept',
                    'checked'     => FALSE,
                    'style'       => 'margin:10px',
    ),
    

    );

$field_set = array(
    'id' => 'address_info', 
    'class' => 'address_info'
    );

$button = array(
                'submit'=>array(
                    'name' => 'button',
                    'id' => 'button',
                    'value' => 'true',
                    'type' => 'submit',
                    'content' => 'Reset'
                ),
                'reset'=>  array(
                    'name' => 'button',
                    'id' => 'button',
                    'value' => 'true',
                    'type' => 'reset',
                    'content' => 'Reset'
                ),
                
);

$attributes_label = array(
   // 'class' => 'mycustomclass',
    'style' => 'color: #1E72F0;',
);
 ?>