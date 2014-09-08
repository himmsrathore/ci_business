


<div class="row">
    <div class="col-md-6 col-md-offset-4">
        
        <div class=" container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-responsive tableborder">
                        <tr>
                            <th>Sno User</th>
                            <th>Admin Name</th>
                            
                            <th>Password</th>
                        </tr>
                    <?php 
                    //var_dump($user_data);
                   // echo $user_name;
                    
                   foreach ($data as $row)
                    {
                        ?>
                        <tr>
                            
                            <td><?php echo $row->sno_admin; ?></td>   
                            <td><?php echo $row->admin_name; ?></td>
                          
                            <td><?php echo $row->admin_password; ?></td>
                            
                            
                            <td><a href="<?php echo base_url(); ?>admin/edit/<?php echo $row->sno_admin; ?>">Edit</a>
                                <a href="<?php echo base_url(); ?>admin/delete/<?php echo $row->sno_admin; ?>"> Delete</a> </td>
                        </tr>    
                     <?php   
                    }
                    
                    ?>
                   </table>
                    
                   
                </div>
                
            </div>
        </div>
        
    </div>
    
</div>