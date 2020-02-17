

<?php require 'includes/header_start.php';?>
<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">

<?php require 'includes/header_end.php';?>

<!--head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head-->


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <!--div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left">Dashboard</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div-->
            <!-- end row -->


            <!--div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-layers float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Orders</h6>
                        <h2 class="m-b-20" data-plugin="counterup">1,587</h2>
                        <span class="label label-success"> +11% </span> <span class="text-muted">From previous period</span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-paypal float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Revenue</h6>
                        <h2 class="m-b-20">$<span data-plugin="counterup">46,782</span></h2>
                        <span class="label label-danger"> -29% </span> <span class="text-muted">From previous period</span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-chart float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Average Price</h6>
                        <h2 class="m-b-20">$<span data-plugin="counterup">15.9</span></h2>
                        <span class="label label-pink"> 0% </span> <span class="text-muted">From previous period</span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-rocket float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Product Sold</h6>
                        <h2 class="m-b-20" data-plugin="counterup">1,890</h2>
                        <span class="label label-warning"> +89% </span> <span class="text-muted">Last year</span>
                    </div>
                </div>
            </div-->
            <!-- end row -->


            <div class="row">
                <div class="col-xs-12 col-lg-12 col-xl-8">
                    <div class="card-box" style="margin-top: 30px">

                        <h6 class="header-title m-t-0 m-b-20"><font size="5" color="black">User Profile</font><a href="javascript:void(0);" data-toggle="modal" data-target="#Modal_Edit1"><font size="5" ><span class="fa fa-pencil" style="margin:20px"></span></font></a></h6>


                        <!--a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Edit">Renew</a-->


                        <!--div class="text-center">
                            <ul class="list-inline chart-detail-list m-b-0">
                                <li class="list-inline-item">
                                    <h6 style="color: #3db9dc;"></h6>
                                </li>
                                <li class="list-inline-item">
                                    <h6 style="color: #1bb99a;"></h6>
                                </li>
                                <li class="list-inline-item">
                                    <h6 style="color: #818a91;"></h6>
                                </li>
                            </ul>
                        </div-->

                        <div id="morris-bar-stacked" style="height: 200px">
                            <!--h2><label style="color:red;background-color: ">User ID</label>     <!?php echo $this->session->userdata('user_id'); ?><br/>
                                <label style="color:red">User Email ID</label> <!?php echo $this->session->userdata('user_email'); ?><br/>
                                <label style="color:red">User Name</label> <!?php echo $this->session->userdata('user_name'); ?><br/>
                                <label style="color:red">User Mobile No.</label> <!?php echo $this->session->userdata('user_mobile'); ?><br/>
                                <label style="color:red">User Role</label> <!?php echo $this->session->userdata('user_role'); ?>

                                
                            </h2-->
                            <?php
                                $this->db->select('*');
                                $this->db->where('id', $this->session->userdata('user_id'));
                                $query1 = $this->db->get('estate_admin');
                                foreach ($query1->result_array() as $row1) {
                                $user_id = $row1['id']; 
                                $user_email = $row1['mail']; 
                                $user_name = $row1['name'];
                                $user_mobile = $row1['mob'];
                                $user_role = $row1['user_role'];
                                }
                            ?>
                            <table class="table">
                                <tbody>
                                    <tr class="info">
                                        <th><label style="color:red">User Name</label></th>
                                        <td><?php echo $user_name; ?></td>
            
                                    </tr>
                                    <tr class="danger">
                                        <th><label style="color:red">User Email ID</label></th>
                                        <td><?php echo $user_email; ?></td>
                                    </tr>
                                    
                                    <tr class="warning">
                                        <th><label style="color:red">User Mobile No.</label></th>
                                        <td><?php echo $user_mobile; ?></td>  
                                        </tr>
                                </tbody>
                            </table>

                            

                        </div>

                    </div>
                </div><!-- end col-->

                <div class="col-xs-12 col-lg-12 col-xl-4">
                    <div class="card-box" style="margin-top: 30px">

                        <h4 class="header-title m-t-0 m-b-30"><font size="5" color="black"> Current Package</font></h4>

                        <!--div class="text-center m-b-20">
                            <div class="btn-group" role="group" aria-label="Basic example" >
                                <button type="button" class="btn btn-sm btn-secondary"></button>
                                <button type="button" class="btn btn-sm btn-secondary"></button>
                                <button type="button" class="btn btn-sm btn-secondary"></button>
                            </div>
                        </div-->

                        <div id="morris-donut-example" style="height: 225px;">
                            <?php
                                $this->db->select('*');
                                $this->db->where('id',$this->session->userdata('user_id'));

                                $query1 = $this->db->get('estate_admin');
                                foreach ($query1->result_array() as $row1) {
                                $pack_name = $row1['pack']; 
                                $pack_date = $row1['date']; 
                                $expire_date = $row1['expire_date'];
                                }
                            ?>
                            <table class="table">
                                <tbody>
                                    <tr class="info">
                                        <th><label style="color:red">Package Name</label></th>
                                        <td><?php echo $pack_name; ?></td>
                                    </tr>
                                    <tr class="danger">
                                        <th><label style="color:red">Package Date</label></th>
                                        <td><?php echo $pack_date; ?></td>
                                    </tr>
                                    
                                    <tr class="warning">
                                        <th><label style="color:red">Package Expirery Date</label></th>
                                        <td><?php echo $expire_date; ?></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            <!--form method="POST" action="<!?php  echo base_url(); ?>​Profile/user_profile">
       <button id="submit-buttons" type="submit" ​​​​​>Submit 1</button-->
</form>
                                        <div class="" style="float: right" ><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target=""style="width: 150%">Renew</a></div>
                                        
                                        
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                            <div>
                            
                        <div>

                            
                        </div>

                        <!--div class="text-center">
                            <ul class="list-inline chart-detail-list mb-0 m-t-10">
                                <li class="list-inline-item">
                                    <h6 style="color: #3db9dc;"></i></h6>
                                </li>
                                <li class="list-inline-item">
                                    <h6 style="color: #1bb99a;"></i></h6>
                                </li>
                                <li class="list-inline-item">
                                    <h6 style="color: #818a91;"></i></h6>
                                </li>
                            </ul>
                        </div-->

                    </div>
                </div><!-- end col-->


            </div>
            <!-- end row -->


            <!--div class="row">
                <div class="col-xs-12 col-lg-12 col-xl-7">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-20">Inbox</h4>

                                <div class="inbox-widget nicescroll" style="height: 339px;">
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Chadengle</p>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <p class="inbox-item-date">13:40 PM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Tomaslau</p>
                                            <p class="inbox-item-text">I've finished it! See you so...</p>
                                            <p class="inbox-item-date">13:34 PM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Stillnotdavid</p>
                                            <p class="inbox-item-text">This theme is awesome!</p>
                                            <p class="inbox-item-date">13:17 PM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Kurafire</p>
                                            <p class="inbox-item-text">Nice to meet you</p>
                                            <p class="inbox-item-date">12:20 PM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Shahedk</p>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <p class="inbox-item-date">10:15 AM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Adhamdannaway</p>
                                            <p class="inbox-item-text">This theme is awesome!</p>
                                            <p class="inbox-item-date">9:56 AM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-8.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Arashasghari</p>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <p class="inbox-item-date">10:15 AM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-9.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Joshaustin</p>
                                            <p class="inbox-item-text">I've finished it! See you so...</p>
                                            <p class="inbox-item-date">9:56 AM</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-20">Sales Statistics</h4>

                                <p class="font-600 m-b-5">iMacs <span class="text-danger pull-right"><b>78%</b></span></p>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                </div>
                            </div>

                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-20">Monthly Sales</h4>

                                <p class="font-600 m-b-5">Macbooks <span class="text-success pull-right"><b>25%</b></span></p>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-20">Daily Sales</h4>

                                <p class="font-600 m-b-5">Mobiles <span class="text-warning pull-right"><b>75%</b></span></p>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- end col-->

                <!--div class="col-xs-12 col-lg-12 col-xl-5">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Top Contracts</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Company</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-muted">Apple Technology</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="label label-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-muted">Envato Pty Ltd.</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="label label-danger">Unpaid</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-muted">Dribbble LLC.</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="label label-success">Paid</span></td>
                                    </tr>
                                <tr>
                                        <th class="text-muted">Adobe Family</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="label label-success">Paid</span></td>
                                    </tr>
                                <tr>
                                        <th class="text-muted">Apple Technology</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="label label-danger">Unpaid</span></td>
                                    </tr>
                                <tr>
                                        <th class="text-muted">Envato Pty Ltd.</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="label label-success">Paid</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>< end col-->


            </div-->
            <!-- end row -->


        </div> <!-- container -->

    </div> <!-- content -->


</div>


<!-- End content-page -->


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<?php require 'includes/footer_start.php'?>

<!--Morris Chart-->
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>


<!-- Page specific js -->
<script src="assets/pages/jquery.dashboard.js"></script>

<?php require 'includes/footer_end.php'?>


<?php
{

        
    }
?>


              <form id="form_update1" action="<?= base_url()?>Profile/update3" method="post">
                <div class="modal fade In" id="Modal_Edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header" style="background-color: #64b0f2;">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: white">Edit User Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $this->session->userdata('user_id'); ?>">
                      <div class="modal-body">
                        <div class="form-group row">
                          <label class="col-md-2 col-form-label">User Name</label>
                          <div class="col-md-10">
                            <input type="text" name="name" id="name" value="<?php echo $user_name; ?>" class="form-control" placeholder="Enter Package Name" required="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-2 col-form-label">User Email Id</label>
                          <div class="col-md-10">
                            <input type="text" name="mail" id="mail" value="<?php echo $user_email; ?>" class="form-control" placeholder="Enter Package Date here..." required="">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-md-2 col-form-label">User Mobile No.</label>
                          <div class="col-md-10">
                            <input type="text" name="mob" id="mob" value="<?php echo $user_mobile; ?>" class="form-control" placeholder="Enter Package Expirery Date..." required="">
                          </div>
                        </div>

                        
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="btn_update" class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>

<script type="text/javascript">
              

        //update record to database
      /*  $('#btn_update').on('click',function(){
          var user = $('#name').val();
          var mob  = $('#mob').val();
          var mail = $('#mail').val();

          $.ajax({
            type : "POST",
            url  : "<?php echo site_url('Profile/update3') ?>",
            dataType : "JSON",
            data : {user:user, mob:mob,  mail:mail},
            success: function(data){
              document.getElementById('form_update').reset();
              document.getElementById('form1').reset();
              $('#Modal_Edit1').modal('hide');
              show_product();
            },
            error: function(data){
                //alert(data)
              },
            });
          return false;
        }); */

        </script>