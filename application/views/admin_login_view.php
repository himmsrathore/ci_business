<div class="row">
    <div class="col-md-9 col-md-offset-2 dcard-padding-rm-lr">
        <div class="container-fluid dcard-padding-rm-lr">
            <div class="row ">
                <div class="col-md-11">
                    <div class="container-fluid">
                        <div class="row">
                            <span class="dcard-showcase-title h3"><span class="glyphicon glyphicon-user"></span>Admin Login Here ..</span>
                            <hr class="style-one"/>
                        </div>
                        <form method="POST" action="<?php echo base_url().'admin/login_check'; ?>" id="frm_user">
                              
                                    <div class="form-group col-md-7">
                                        <label for="bdc_license">Username</label>
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username " required="required">
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label for="bdc_license">Password</label>
                                        <input type="text" name="password" class="form-control" id="password" placeholder="Enter password " required="required">
                                       
                                    </div>
                                       
                               
                                <div class="form-group col-md-7">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            
                                <div class="form-group col-md-7">
                                   <!-- ERROR DIV --->
                                   <?php
                                   if($error==1)
                                   {
                                       ?>
                                   <span style="color: red">Login Error</span>
                                   <?php
                                   }
                                   ?>
                                </div>
                                
                               
                            </form>
                         </div>
                    </div>
                </div>
            </div>
    </div>
      </div><!-- /.box-body -->                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   