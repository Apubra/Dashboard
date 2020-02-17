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
                    <form method="post" action="index.php" role="form" class="text-center">
                        <div class="user-thumb">
                            <img src="assets/images/users/avatar-1.jpg" class="img-responsive rounded-circle img-thumbnail" alt="thumbnail">
                        </div>
                        <div class="form-group">
                            <p class="text-muted m-t-10">
                                Enter your password to access the admin.
                            </p>
                            <div class="form-group row m-t-30">
                                <div class="col-12">
                                    <input class="form-control" type="password" required="" placeholder="Enter password">
                                </div>
                            </div>

                            <div class="form-group row text-center m-t-20 mb-0">
                                <div class="col-12">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Enter Now</button>
                                </div>
                            </div>
                        </div>

                    </form>


                </div>
            </div>
        </div>
        <!-- end card-box-->

        <div class="m-t-20">
            <div class="text-center">
                <p class="text-white">Not you?<a href="pages-login.php" class="text-white m-l-5"><b>Sign In</b></a></p>
            </div>
        </div>

    </div>
    <!-- end wrapper page -->

<?php require 'includes/footer_account.php'; ?>