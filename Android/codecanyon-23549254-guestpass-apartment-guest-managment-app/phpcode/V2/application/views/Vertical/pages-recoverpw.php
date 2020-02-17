<?php require 'includes/header_account.php'; ?>

    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">

        <div class="account-bg">
            <div class="card-box mb-0">
                <div class="text-center m-t-20">
                    <a href="index.php" class="logo">
                        <i class="zmdi zmdi-group-work icon-c-logo"></i>
                        <span>Uplon</span>
                    </a>
                </div>
                <div class="m-t-10 p-20">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h6 class="text-muted text-uppercase mb-0 m-t-0">Reset Password</h6>
                            <p class="text-muted m-b-0 font-13 m-t-20">Enter your email address and we'll send you an email with instructions to reset your password.  </p>
                        </div>
                    </div>
                    <form class="m-t-30" action="index.php">
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="email" required="" placeholder="Enter email">
                            </div>
                        </div>

                        <div class="form-group row text-center m-t-20 mb-0">
                            <div class="col-12">
                                <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Send Email</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <!-- end card-box-->

        <div class="m-t-20">
            <div class="text-center">
                <p class="text-white">Return to<a href="pages-login.php" class="text-white m-l-5"><b>Sign In</b></p>
            </div>
        </div>

    </div>
    <!-- end wrapper page -->



<?php require 'includes/footer_account.php'; ?>