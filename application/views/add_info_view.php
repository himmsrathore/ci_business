
<div class="row">
    <div class="col-md-9 col-md-offset-2 dcard-padding-rm-lr">
        <div class="container-fluid dcard-padding-rm-lr">
            <div class="row ">
                <div class="col-md-11">
                    <div class="container-fluid">
                        <div class="row">
                            <span class="dcard-showcase-title h3"><span class="glyphicon glyphicon-user"></span> Add info</span>
                            <hr class="style-one"/>
                        </div>
                        <form method="POST" action="../business/add_info_insert" id="frm_user">
                                <div class="box-body">
                                   
                                    <div class="form-group col-md-7">
                                        <label for="bdc_license">Contact</label>
                                        <input type="text" name="contact" class="form-control" id="email" placeholder="Enter Your contact " required="required">
                                    </div>
                                   
                                    <div class="form-group col-md-7">
                                        <label for="bdc_license">Address</label>
                                        <input type="text" name="address" class="form-control" id="email" placeholder="Enter Your Address " required="required">
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label for="bdc_license">District</label>
                                        <input type="text" name="district" class="form-control" id="District" placeholder="Enter District " required="required">
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label for="bdc_license">State</label>
                                        <input type="text" name="state" class="form-control" id="State" placeholder="Enter State " required="required">
                                       
                                    </div>
                                       
                                </div><!-- /.box-body -->
                                <div class="form-group col-md-7">
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