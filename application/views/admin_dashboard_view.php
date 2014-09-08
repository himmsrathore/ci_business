


<div class="row">
    <div class="col-md-6 col-md-offset-4">
        
        <div class=" container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-responsive tableborder">
                        <tr>hello</tr>
                        <h1>
                            ADMIN DASHBOARD 
                        </h1>
                        <tr>
                        <a href="<?php echo base_url().'admin/login'; ?>" >login  </a>
                        <a href="<?php echo base_url().'admin/register'; ?>"> Register</a>
                        <?php 
                        if($this->session->userdata('session_admin')){
                            ?>
                        <a href="<?php echo base_url().'admin/logout'; ?>"> logout</a>
                            <?php }
                                ?>
                    </tr>
                    <tr></tr>
                        <tr>
                            
                            
                            
                       
                            
                        </tr>    
                    
                   </table>
                    
                    <table class="table table-responsive tableborder">
                        <tr>
                        
                        </tr>
                       
                        <tr>
                         <td>   <a href="<?php echo base_url().'business/showData'; ?>" > Show all User </a>       </td>
                          <td>   <a href="<?php echo base_url().'business/showData'; ?>" > Show all User </a>       </td>
                           <td>   <a href="<?php echo base_url().'business/showData'; ?>" > Show all User </a>       </td>
                              
                        </tr>
                    </table>
                </div>
                
            </div>
        </div>
        
    </div>
    
</div>