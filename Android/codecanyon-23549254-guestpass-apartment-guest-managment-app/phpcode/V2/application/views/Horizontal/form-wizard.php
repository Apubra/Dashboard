<?php require 'includes/header_start.php'; ?>

    <!--Form Wizard-->
    <link rel="stylesheet" type="text/css" href="assets/plugins/jquery.steps/demo/css/jquery.steps.css" />

<?php require 'includes/header_end.php'; ?>


    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
                <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                        data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
                            class="fa fa-cog"></i></span></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>

            </div>
            <h4 class="page-title">Form Wizard</h4>
        </div>
    </div>
    <!-- end row -->



    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <div class="row">
                    <div class="col-12">
                        <h4 class="header-title m-t-0">Basic Form Wizard</h4>
                        <p class="text-muted font-13 m-b-30">
                            Your awesome text goes here.Your awesome text goes here.
                        </p>

                        <form id="basic-form" action="#">
                            <div>
                                <h3>Account</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label for="userName">User name<span class="text-danger">*</span></label>
                                                <div>
                                                    <input class="form-control required" id="userName" name="userName" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label for="password"> Password<span class="text-danger">*</span></label>
                                                <div>
                                                    <input id="password" name="password" type="text" class="required form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end row -->
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label for="confirm">Confirm Password<span class="text-danger">*</span></label>
                                                <div>
                                                    <input id="confirm" name="confirm" type="text" class="required form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end row -->
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix row">
                                                <label class="col-lg-12 control-label ">(<span class="text-danger">*</span>) Mandatory</label>
                                            </div>
                                        </div>
                                    </div><!-- end row -->

                                </section>
                                <h3>Profile</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label for="name"> First name<span class="text-danger">*</span></label>
                                                <div>
                                                    <input id="name" name="name" type="text" class="required form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label for="surname"> Last name<span class="text-danger">*</span></label>
                                                <div>
                                                    <input id="surname" name="surname" type="text" class="required form-control">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label for="email">Email<span class="text-danger">*</span></label>
                                                <div>
                                                    <input id="email" name="email" type="text" class="required email form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label for="address">Address<span class="text-danger">*</span></label>
                                                <div>
                                                    <input id="address" name="address" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end row -->
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label>(<span class="text-danger">*</span>) Mandatory</label>
                                            </div>
                                        </div>
                                    </div><!-- end row -->

                                </section>
                                <h3>Hints</h3>
                                <section>
                                    <div class="form-group clearfix row">
                                        <div class="col-lg-12">
                                            <ul class="list-unstyled w-list">
                                                <li><b>First Name :</b> Jonathan </li>
                                                <li><b>Last Name :</b> Smith </li>
                                                <li><b>Emial:</b> jonathan@smith.com</li>
                                                <li><b>Address:</b> 123 Your City, Cityname. </li>
                                            </ul>
                                        </div>
                                    </div>
                                </section>
                                <h3>Finish</h3>
                                <section>
                                    <div class="form-group clearfix row">
                                        <div class="col-lg-12">
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox-h" type="checkbox">
                                                <label for="checkbox-h">
                                                    I agree with the Terms and Conditions.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </form>


                    </div>

                </div>
                <!-- end row -->


                <div class="row m-t-50">
                    <div class="col-12">
                        <h4 class="header-title m-t-0">Vertical Steps Example</h4>
                        <p class="text-muted font-13 m-b-30">
                            Your awesome text goes here.Your awesome text goes here.
                        </p>

                        <form id="wizard-vertical">
                            <h3>Account</h3>
                            <section>
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label " for="userName1">User name *</label>
                                    <div class="col-lg-10">
                                        <input class="form-control required" id="userName1" name="userName" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label " for="password1"> Password *</label>
                                    <div class="col-lg-10">
                                        <input id="password1" name="password" type="text" class="required form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 control-label " for="confirm1">Confirm Password *</label>
                                    <div class="col-lg-10">
                                        <input id="confirm1" name="confirm" type="text" class="required form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                </div>
                            </section>
                            <h3>Profile</h3>
                            <section>
                                <div class="form-group row">

                                    <label class="col-lg-2 control-label" for="name1"> First name *</label>
                                    <div class="col-lg-10">
                                        <input id="name1" name="name" type="text" class="required form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label " for="surname1"> Last name *</label>
                                    <div class="col-lg-10">
                                        <input id="surname1" name="surname" type="text" class="required form-control">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 control-label " for="email1">Email *</label>
                                    <div class="col-lg-10">
                                        <input id="email1" name="email" type="text" class="required email form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 control-label " for="address1">Address *</label>
                                    <div class="col-lg-10">
                                        <input id="address1" name="address" type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                </div>

                            </section>
                            <h3>Hints</h3>
                            <section>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <ul class="list-unstyled w-list">
                                            <li><b>First Name :</b> Jonathan </li>
                                            <li><b>Last Name :</b> Smith </li>
                                            <li><b>Emial:</b> jonathan@smith.com</li>
                                            <li><b>Address:</b> 123 Your City, Cityname. </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                            <h3>Finish</h3>
                            <section>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox-v" type="checkbox">
                                            <label for="checkbox-v"> I agree with the Terms and Conditions. </label>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                        <!-- End #wizard-vertical -->

                    </div>

                </div>
                <!-- end row -->



                <div class="row m-t-50">
                    <div class="col-12">
                        <h4 class="header-title m-t-0">Wizard with Validation</h4>
                        <p class="text-muted font-13 m-b-30">
                            Your awesome text goes here.Your awesome text goes here.
                        </p>

                        <form id="wizard-validation-form" action="#">
                            <div>
                                <h3>Step 1</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label for="userName2">User name </label>
                                                <div>
                                                    <input class="form-control" id="userName2" name="userName" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label for="password2"> Password *</label>
                                                <div>
                                                    <input id="password2" name="password" type="text" class="required form-control">

                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end row -->
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label for="confirm2">Confirm Password *</label>
                                                <div>
                                                    <input id="confirm2" name="confirm" type="text" class="required form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end row -->
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                            </div>
                                        </div>
                                    </div><!-- end row -->

                                </section>
                                <h3>Step 2</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label for="name2"> First name *</label>
                                                <div>
                                                    <input id="name2" name="name" type="text" class="required form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label for="surname2"> Last name *</label>
                                                <div>
                                                    <input id="surname2" name="surname" type="text" class="required form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end row -->
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label for="email2">Email *</label>
                                                <div>
                                                    <input id="email2" name="email" type="text" class="required email form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label for="address2">Address </label>
                                                <div>
                                                    <input id="address2" name="address" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end row -->
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group clearfix">
                                                <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                            </div>
                                        </div>
                                    </div><!-- end row -->

                                </section>
                                <h3>Step 3</h3>
                                <section>
                                    <div class="form-group clearfix">
                                        <div class="col-lg-12">
                                            <ul class="list-unstyled w-list">
                                                <li><b>First Name :</b> Jonathan </li>
                                                <li><b>Last Name :</b> Smith </li>
                                                <li><b>Emial:</b> jonathan@smith.com</li>
                                                <li><b>Address:</b> 123 Your City, Cityname. </li>
                                            </ul>
                                        </div>
                                    </div>
                                </section>
                                <h3>Step Final</h3>
                                <section>
                                    <div class="form-group clearfix">
                                        <div class="col-lg-12">
                                            <input id="acceptTerms-2" name="acceptTerms2" type="checkbox" class="required">
                                            <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </form>

                    </div>

                </div>
                <!-- end row -->

            </div>
        </div><!-- end col-->

    </div>
    <!-- end row -->



<?php require 'includes/footer_start.php' ?>

    <!--Form Wizard-->
    <script src="assets/plugins/jquery.steps/build/jquery.steps.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>

    <!--wizard initialization-->
    <script src="assets/pages/jquery.wizard-init.js" type="text/javascript"></script>


<?php require 'includes/footer_end.php' ?>