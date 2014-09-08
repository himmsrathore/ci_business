<div class="row">
<div class="col-md-9 col-md-offset-2 dcard-padding-rm-lr">
    <div class="container-fluid dcard-padding-rm-lr">
        <div class="row ">

            <div class="col-md-11">
                <div class="container-fluid">
                    <div class="row">
                        <span class="dcard-showcase-title h3"><span class="glyphicon glyphicon-user"></span> Registration</span>
                        <hr class="style-one"/>
                    </div>
                    <form method="POST" action="<?php echo base_url();?>business/register_insert" id="frm_user">
                            <div class="box-body">
                                <div class="form-group col-md-12">
                                    <label for="bdc_license"> Name</label>
                                    <div>
                                    <div class="col-md-6">
                                        <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required="required">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
                                    </div></div>
                                </div>
                                <!--<div class="form-group col-md-12">
                                    <label for="bdc_license">Create User Name</label>
                                    <input type="text" name="user_name" class="form-control" onblur="checkuser();" id="user_name" placeholder="Enter User Name" required="required">
                                    <span id="checkusername" style="color:red;"></span>
                                </div>-->
                                <div class="form-group col-md-12">
                                    <label for="bdc_license">E Mail Address</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email Address " required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="bdc_license">Create Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password " required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="bdc_license">Confirm Password</label>
                                    <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm Password " required="required">
                                    <div id="CheckPasswordMatch" style="color:red;"></div>
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