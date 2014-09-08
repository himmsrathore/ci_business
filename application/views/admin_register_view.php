<div class="row">
    <div class="col-md-9 col-md-offset-2 dcard-padding-rm-lr">
    <div class="container-fluid dcard-padding-rm-lr">
      <div class="row ">
                                        
   <div class="col-md-11">
       
       <?php echo validation_errors(); ?>
        <div class="container-fluid">
           <div class="row">
               <span class="dcard-showcase-title h3">Registration</span>
           <hr class="style-one"/>
          </div>
                                                
            <form method="POST" action="<?php echo base_url();?>admin/data_insert" id="frm_user">
              <div class="box-body">
                 <div class="form-group col-md-12">
                     
                <label for="Admin_name"> Admin Name</label>
                        
                        <div class="col-md-12">
                            <input type="text" name="admin_name" class="form-control" value="<?php echo set_value('admin_name', ''); ?>" id="admin_name" placeholder="Admin Name" required="required">
                        </div>
                <?php echo form_error('admin_name'); ?>
                        
                 </div>
                  
                <div class="form-group col-md-6">
                              <label for="Password">Create Password</label>
                              <input type="password" name="password" class="form-control" value="<?php echo set_value('password', ''); ?>" id="password" placeholder="Enter Password " required="required">
                              <?php echo form_error('password'); ?>
                </div>
                                                            
                  <div class="form-group col-md-6">
                    <label for="password_confirm">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm Password " required="required">
                    <div id="CheckPasswordMatch" style="color:red;"></div>
               <?php echo form_error('cpassword'); ?>
                  </div>
                                                            
       </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div id="userinsert"></div>
            </form>
            </div>
    </div>
</div>
</div>
</div>
</div>
