<?php require 'includes/header_start.php'; ?>

<?php require 'includes/header_end.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">Form Validation</h4>

                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Form Validation</li>
                            </ol>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-sm-12 col-xs-12 col-md-6">

                                    <h4 class="header-title m-t-0">Basic Form</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                    </p>

                                    <div class="p-20">
                                        <form action="#" data-parsley-validate novalidate>
                                            <div class="form-group">
                                                <label for="userName">User Name<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required
                                                       placeholder="Enter user name" class="form-control" id="userName">
                                            </div>
                                            <div class="form-group">
                                                <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                                <input type="email" name="email" parsley-trigger="change" required
                                                       placeholder="Enter email" class="form-control" id="emailAddress">
                                            </div>
                                            <div class="form-group">
                                                <label for="pass1">Password<span class="text-danger">*</span></label>
                                                <input id="pass1" type="password" placeholder="Password" required
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                                <input data-parsley-equalto="#pass1" type="password" required
                                                       placeholder="Password" class="form-control" id="passWord2">
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <input id="remember-1" type="checkbox">
                                                    <label for="remember-1"> Remember me </label>
                                                </div>
                                            </div>

                                            <div class="form-group text-right m-b-0">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                    Cancel
                                                </button>
                                            </div>

                                        </form>
                                    </div>

                                </div>

                                <div class="col-sm-12 col-xs-12 col-md-6">
                                    <h4 class="header-title m-t-0">Horizontal Form</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                    </p>

                                    <div class="p-20">
                                        <form role="form" data-parsley-validate novalidate>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 form-control-label">Email<span class="text-danger">*</span></label>
                                                <div class="col-sm-7">
                                                    <input type="email" required parsley-type="email" class="form-control"
                                                           id="inputEmail3" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="hori-pass1" class="col-sm-4 form-control-label">Password<span class="text-danger">*</span></label>
                                                <div class="col-sm-7">
                                                    <input id="hori-pass1" type="password" placeholder="Password" required
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="hori-pass2" class="col-sm-4 form-control-label">Confirm Password
                                                    <span class="text-danger">*</span></label>
                                                <div class="col-sm-7">
                                                    <input data-parsley-equalto="#hori-pass1" type="password" required
                                                           placeholder="Password" class="form-control" id="hori-pass2">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="webSite" class="col-sm-4 form-control-label">Web Site<span class="text-danger">*</span></label>
                                                <div class="col-sm-7">
                                                    <input type="url" required parsley-type="url" class="form-control"
                                                           id="webSite" placeholder="URL">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="checkbox">
                                                        <input id="remember-2" type="checkbox">
                                                        <label for="remember-2"> Remember me </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Register
                                                    </button>
                                                    <button type="reset"
                                                            class="btn btn-secondary waves-effect m-l-5">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row m-t-50">
                                <div class="col-sm-6 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Validation type</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                    </p>

                                    <div class="p-20">
                                        <form class="form-horizontal " action="#">
                                            <div class="form-group">
                                                <label>Required</label>
                                                <input type="text" class="form-control" required
                                                       placeholder="Type something"/>
                                            </div>


                                            <div class="form-group">
                                                <label>Equal To</label>
                                                <div>
                                                    <input type="password" id="pass2" class="form-control" required
                                                           placeholder="Password"/>
                                                </div>
                                                <div class="m-t-10">
                                                    <input type="password" class="form-control" required
                                                           data-parsley-equalto="#pass2"
                                                           placeholder="Re-Type Password"/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>E-Mail</label>
                                                <div>
                                                    <input type="email" class="form-control" required
                                                           parsley-type="email" placeholder="Enter a valid e-mail"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>URL</label>
                                                <div>
                                                    <input parsley-type="url" type="url" class="form-control"
                                                           required placeholder="URL"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Digits</label>
                                                <div>
                                                    <input data-parsley-type="digits" type="text"
                                                           class="form-control" required
                                                           placeholder="Enter only digits"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Number</label>
                                                <div>
                                                    <input data-parsley-type="number" type="text"
                                                           class="form-control" required
                                                           placeholder="Enter only numbers"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Alphanumeric</label>
                                                <div>
                                                    <input data-parsley-type="alphanum" type="text"
                                                           class="form-control" required
                                                           placeholder="Enter alphanumeric value"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Textarea</label>
                                                <div>
                                                    <textarea required class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                                <div class="col-sm-6 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Range validation</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                    </p>

                                    <div class="p-20">
                                        <form action="#">

                                            <div class="form-group">
                                                <label>Min Length</label>
                                                <div>
                                                    <input type="text" class="form-control" required
                                                           data-parsley-minlength="6" placeholder="Min 6 chars."/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Max Length</label>
                                                <div>
                                                    <input type="text" class="form-control" required
                                                           data-parsley-maxlength="6" placeholder="Max 6 chars."/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Range Length</label>
                                                <div>
                                                    <input type="text" class="form-control" required
                                                           data-parsley-length="[5,10]"
                                                           placeholder="Text between 5 - 10 chars length"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Min Value</label>
                                                <div>
                                                    <input type="text" class="form-control" required
                                                           data-parsley-min="6" placeholder="Min value is 6"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Max Value</label>
                                                <div>
                                                    <input type="text" class="form-control" required
                                                           data-parsley-max="6" placeholder="Max value is 6"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Range Value</label>
                                                <div>
                                                    <input class="form-control" required type="text range" min="6"
                                                           max="100" placeholder="Number between 6 - 100"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Regular Exp</label>
                                                <div>
                                                    <input type="text" class="form-control" required
                                                           data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                                           placeholder="Hex. Color"/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Min check</label>
                                                <div>
                                                    <div class="checkbox checkbox-custom">
                                                        <input id="checkbox1" type="checkbox"
                                                               data-parsley-multiple="groups"
                                                               data-parsley-mincheck="2">
                                                        <label for="checkbox1"> And this </label>
                                                    </div>
                                                    <div class="checkbox checkbox-pink">
                                                        <input id="checkbox2" type="checkbox"
                                                               data-parsley-multiple="groups"
                                                               data-parsley-mincheck="2">
                                                        <label for="checkbox2"> Can't check this </label>
                                                    </div>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox3" type="checkbox"
                                                               data-parsley-multiple="groups"
                                                               data-parsley-mincheck="2" required>
                                                        <label for="checkbox3"> This too </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Max check</label>
                                                <div>
                                                    <div class="checkbox checkbox-pink">
                                                        <input id="checkbox4" type="checkbox"
                                                               data-parsley-multiple="group1">
                                                        <label for="checkbox4"> And this </label>
                                                    </div>
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="checkbox5" type="checkbox"
                                                               data-parsley-multiple="group1">
                                                        <label for="checkbox5"> Can't check this </label>
                                                    </div>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox6" type="checkbox"
                                                               data-parsley-multiple="group1"
                                                               data-parsley-maxcheck="1">
                                                        <label for="checkbox6"> This too </label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group m-b-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                            </div>
                            <!-- end row -->

                        </div>
                    </div><!-- end col-->

                </div>
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->



    </div>
    <!-- End content-page -->


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

<?php require 'includes/footer_start.php' ?>

    <!-- Validation js (Parsleyjs) -->
    <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>


<?php require 'includes/footer_end.php' ?>