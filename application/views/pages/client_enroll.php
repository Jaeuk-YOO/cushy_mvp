
        
             <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <form id="RegisterValidationDoc" action="" method="">
                                    <div class="card-header card-header-icon" data-background-color="blue">
                                        <i class="material-icons">mail_outline</i>
                                         </div>
                                         <div class="card-content">
                                              <h4 class="card-title">클라이언트 등록</h4>
                                               <div class="form-group label-floating">
                                                    <label class="control-label">
                                                         Email Address
                                                         <small>(required)</small>
                                                          </label>
                                                           <input class="form-control"
                                                            name="email"
                                                            type="email"
                required="true"
                     />
            </div>

            <div class="form-group label-floating">
                <label class="control-label">
                    Password
                    <small>(required)</small>
                </label>
                <input class="form-control"
                       name="password"
                       id="registerPassword"
                       type="password"
                       required="true"
                 />
            </div>

            <div class="form-group label-floating">
                <label class="control-label">
                    Confirm Password
                    <small>(required)</small>
                </label>
                <input class="form-control"
                       name="password_confirmation"
                       id="registerPasswordConfirmation"
                       type="password"
                       required="true"
                       equalTo="#registerPassword"
                 />
            </div>


            <div class="category form-category"><small>(required)</small> - Required fields</div>

            <div class="form-footer text-right">
                <div class="checkbox pull-left">
                    <label>
                        <input type="checkbox" name="optionsCheckboxes">
                        Subscribe to newsletter
                    </label>
                </div>
<div class="fileinput fileinput-new text-center" data-provides="fileinput">
    <div class="fileinput-new thumbnail">
        <img src="../../assets/img/image_placeholder.jpg" alt="...">
    </div>
    <div class="fileinput-preview fileinput-exists thumbnail"></div>
    <div>
        <span class="btn btn-rose btn-round btn-file">
            <span class="fileinput-new">Select image</span>
            <span class="fileinput-exists">Change</span>
            <input type="file" name="..." />
        </span>
        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
    </div>
</div>
                <button type="submit" class="btn btn-info btn-fill">Register</button>
            </div>
        </div>
    </form>


                                </div>
                                <!-- end content-->
                            </div>
                        </div>
                  
                </div>
          
           