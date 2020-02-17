<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Pass Management| Login</title>
    <?php $this->load->view('common/common_css');?>

</head>


<body style="overflow: hidden;">

    <div class="account-pages" style="background-image: url('online-ordering.jpg');background-size: 100% 100%;"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">

            <?php if ($this->session->flashdata('success')) {?>
                <div class="alert alert-success"> <?=$this->session->flashdata('success')?> </div>
            <?php }?>
            <?php if ($this->session->flashdata('error')) {?>
                <div class="alert alert-danger"> <?=$this->session->flashdata('error')?> </div>
            <?php }?>

        <div class="account-bg" style="background-color: #ffffffbf;">
        <div class="text-center m-t-20">
            <!--<a href="#" class="logo">-->

                <img src="<?php echo base_url(); ?>assets/logoblue.png" alt="user" >
            <!--</a>-->
        </div>
        <div class="m-t-10 p-20">
            <div class="row">
                <div class="col-12 text-center">
                    <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign In</h6>
                </div>
            </div>
              <form class="m-t-20" action="<?php echo base_url(); ?>Login/login_user" method="post">
            <?php //echo form_open('login/validate', 'class="m-t-20" id="loginForm" novalidate'); ?>

            <div class="form-group row">
                <div class="col-12">
                 <input class="form-control" name="user_email" type="text" required="" placeholder="Email">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                   <input class="form-control" name="user_password" type="password" required="" placeholder="Password">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <div class="checkbox checkbox-custom">
                        <input id="checkbox-signup" type="checkbox">
                        <label for="checkbox-signup">
                            Remember me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group text-center row m-t-10">
                <div class="col-12">
                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit" id="login_submit">Log In</button>
                </div>
            </div>

            <div class="form-group row m-t-30 mb-0">
                <div class="col-12">
                    <a href="javascript:void(0)" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                </div>
            </div>
    </form>
            <?php //echo form_close(); ?>

        </div>

        <div class="clearfix"></div>
    </div>

    <!-- <div class="m-t-20">
        <div class="text-center">
            <p class="text-black m-l-3">Don't have an account? <a href="javascript:void(0)" class="text-success m-l-5"><b>Sign Up</b></a></p>
        </div>
    </div> -->

</div>

<?php $this->load->view('common/common_js');?>

<script>
    $('#loginForm').submit(function(event) {
        event.preventDefault();

        $.ajax({
            url: $('#loginForm').attr('action'),
            type: $('#loginForm').attr('method'),
            dataType: 'json',
            data : new FormData($('#loginForm')[0]),
            contentType: false,
            processData: false,
            success: function ( arg )
            {
                toastr[ arg.type ]( arg.text );

                $('#login_submit').removeAttr( 'disabled' );

                if( arg.type == 'success' )
                {
                    window.location.href="<?php echo site_url('dashboard') ?>";
                }
            }
        });
    })
</script>

</body>
</html>