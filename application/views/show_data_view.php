


<div class="row">
    <div class="col-md-6 col-md-offset-4">
        
        <div class=" container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-responsive tableborder">
                        <tr>
                            <th>Sno User</th>
                            <th>user Name</th>
                            <th>Email Id</th>
                            <th>Password</th>
                        </tr>
                    <?php 
                    //var_dump($user_data);
                   // echo $user_name;
                    
                   foreach ($data as $row)
                    {
                        ?>
                        <tr>
                            
                            <td><?php echo $row->sno_user; ?></td>   
                            <td><?php echo $row->firstname; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->password; ?></td>
                            
                            
                            <td><a href="<?php echo base_url(); ?>business/edit/<?php echo $row->sno_user; ?>">Edit</a>
                                <a href="<?php echo base_url(); ?>business/delete/<?php echo $row->sno_user; ?>"> Delete</a> </td>
                        </tr>    
                     <?php   
                    }
                    
                    ?>
                   </table>
                    
                    <table class="table table-responsive tableborder">
                        <tr>
                            <th>
                                password
                            </th>
                        </tr>
                        <?php 
                         foreach ($data1 as $row1)
                         {
                             ?>
                        <tr>
                         <td> <?php echo $row1['password']; }?></td>
                              
                        </tr>
                    </table>
                </div>
                
            </div>
        </div>
        
    </div>
    
</div>