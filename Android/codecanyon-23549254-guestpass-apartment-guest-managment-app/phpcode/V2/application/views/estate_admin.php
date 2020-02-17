<?php require 'includes/header_start.php';?>

<?php require 'includes/header_end2.php';?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">

      <!-- end row -->

      <?php if ($this->session->flashdata('success')) {?>
        <div class="alert alert-success"> <?=$this->session->flashdata('success')?> </div>
      <?php }?>
      <?php if ($this->session->flashdata('error')) {?>
        <div class="alert alert-danger"> <?=$this->session->flashdata('error')?> </div>
      <?php }?>
  <!-- -->
  <!-- MODAL ADD -->
          <form method="post" action="<?php echo base_url(); ?>dashboard/insert1" data-parsley-validate novalidate name="form1" id="form1">
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header custom-modal-title">
                    <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                   <div class="form-group row">
                    <label for="userName" class="col-md-2 col-form-label">Name<span class="text-danger">*</span></label>   <div class="col-md-10">
                      <input type="text" name="name" parsley-trigger="change"
                      placeholder="Enter user name" class="form-control" id="name" autofocus=""  required>
                    </div></div>
                     <div class="form-group row">
                    <label for="Appartment" class="col-md-2 col-form-label">Appartment Name<span class="text-danger">*</span></label>   <div class="col-md-10">
                      <input type="text" name="appartment" parsley-trigger="change"
                      placeholder="Enter Appartment Name" class="form-control" id="appartment" autofocus=""  required>
                    </div></div>
                    <div class="form-group row">
                      <label for="emailAddress" class="col-md-2 col-form-label">Email address<span class="text-danger">*</span></label>   <div class="col-md-10">
                        <input type="email" name="mail" parsley-trigger="change" required
                        placeholder="Enter email" class="form-control" id="mail">
                      </div></div>
                        
                      <div class="form-group row">
                        <label class="col-md-2 col-form-label">Address</label>
                        <div class="col-md-10">
                          <textarea required class="form-control" name="addr" id="addr" placeholder="Enter Your Address hree..."></textarea>
                        </div>
                      </div>
                            
                            <div class="form-group row">
                    <label for="city" class="col-md-2 col-form-label">City<span class="text-danger">*</span></label>   <div class="col-md-10">
                      <input type="text" name="city" parsley-trigger="change"
                      placeholder="Enter city name" class="form-control" id="city" autofocus=""  required>
                    </div></div>

                      <div class="form-group row">
                        <label class="col-md-2 col-form-label">Mobile Number</label>
                        <div class="col-md-10">                                                <input data-parsley-type="number" type="text" name="mob" id='mob'
                          class="form-control" required
                          placeholder="Enter only mobile numbers"/>
                        </div>
                      </div>
                      <div class="form-group row">
                    <label for="userName" class="col-md-2 col-form-label">Select Package<span class="text-danger">*</span></label>   <div class="col-md-10">
                      <select  name="pack" parsley-trigger="change"
                      placeholder="select package" class="form-control" id="pack" autofocus=""  required>
                          <?php
                          $p=$this->db->get('package')->result();
                          foreach($p as $r)
                          {
                          echo "<option value='".$r->name."'>".$r->name."</option>";
                          }
                          ?>
                          </select>
                    </div></div>
                      <div class="form-group row">
                        <label for="pass" class="col-md-2 col-form-label">Enter New Password<span class="text-danger">*</span></label>   <div class="col-md-10">
                          <input id="pass" name="pass" type="Password"   placeholder="Enter new password" required class="form-control">
                        </div></div>
                        <div class="form-group row">
                          <label for="passWord2" class="col-md-2 col-form-label">Confirm Password <span class="text-danger">*</span></label>   <div class="col-md-10">
                            <input data-parsley-equalto="#pass" type="password" required
                            placeholder="Enter Confirm Password" class="form-control" id="passWord2">
                          </div></div>
                            
                            <?php $token=substr(md5(time()),1,5)?>
                             <div class="form-group row">
                          <label for="pin" class="col-md-2 col-form-label">Pin <span class="text-danger">*</span></label>   <div class="col-md-10">
                            <input type="text" required
                            placeholder="pin" class="form-control" id="pin" name="pin"  readonly value="<?=$token?>">
                          </div></div>
                        </div>
                        <div class="modal-footer">
                              <!-- <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button> -->
                          <button class="btn btn-primary waves-effect waves-light" type="submit">
                            Submit
                          </button>
                          <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                           Reset
                         </button>
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       </div>
                     </div>
                   </div>
                 </div>
               </form>
               <!--END MODAL ADD-->

      <!-- **** code for show tables --->


      <!-- DataTables -->
      <link href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url(); ?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <!-- Responsive datatable examples -->
      <link href="<?php echo base_url(); ?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <!-- Multi Item Selection examples -->
      <link href="<?php echo base_url(); ?>assets/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />


      <!-- code for table -->
      <!-- Page Heading -->
     <div class="row" style="margin-top:15px">
    <div class="col-xl-12">
      <div class="col-md-12">
        <!--        <h2>User
            <small>List</small> </h2> -->
            <div class="float-right" style="margin-top:0px;"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus" ></span> Add New</a></div>

        </div>
              <!--  id="mydata" -->
              <table class="table table-striped page-title-box" id="datatable-buttons" style="background-color: #fff;">
                <thead>
                  <tr>
                     <th>Sr.no.</th>
                    <th>Estate Name</th>
                    <th>Estate Code</th>
                    <th>City</th>
                    <th>Subcription Date</th>
                    <th>Expiery Date</th>
                    <th>Package</th>
                    <th>Status</th>
                    <th>Users</th>
                     <th>Guards</th>
                    <th style="text-align: right;">Actions</th>
                  </tr>
                </thead>
                <tbody id="show_data">

                </tbody>
              </table>
            </div>
          </div>





               <!-- MODAL EDIT -->
               <form id="form_update">
                <div class="modal fade in" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header custom-modal-title">
                        <h5 class="modal-title" id="exampleModalLabel">Edit </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <input type="hidden" name="id" id="id" class="form-control" >
                      <div class="modal-body">
                       <div class="form-group row">
                    <label for="userName" class="col-md-2 col-form-label">Name<span class="text-danger">*</span></label>   <div class="col-md-10">
                      <input type="text" name="name1" parsley-trigger="change"
                      placeholder="Enter user name" class="form-control" id="name1" autofocus=""  required>
                    </div></div>
                     <div class="form-group row">
                    <label for="Appartment" class="col-md-2 col-form-label">Appartment Name<span class="text-danger">*</span></label>   <div class="col-md-10">
                      <input type="text" name="appartment1" parsley-trigger="change"
                      placeholder="Enter Appartment Name" class="form-control" id="appartment1" autofocus=""  required>
                    </div></div>
                    <div class="form-group row">
                      <label for="emailAddress" class="col-md-2 col-form-label">Email address<span class="text-danger">*</span></label>   <div class="col-md-10">
                        <input type="email" name="mail1" parsley-trigger="change" required
                        placeholder="Enter email" class="form-control" id="mail1">
                      </div></div>
                        
                      <div class="form-group row">
                        <label class="col-md-2 col-form-label">Address</label>
                        <div class="col-md-10">
                          <textarea required class="form-control" name="addr1" id="addr1" placeholder="Enter Your Address hree..."></textarea>
                        </div>
                      </div>
                            
                            <div class="form-group row">
                    <label for="city" class="col-md-2 col-form-label">City<span class="text-danger">*</span></label>   <div class="col-md-10">
                      <input type="text" name="city1" parsley-trigger="change"
                      placeholder="Enter city name" class="form-control" id="city1" autofocus=""  required>
                    </div></div>

                      <div class="form-group row">
                        <label class="col-md-2 col-form-label">Mobile Number</label>
                        <div class="col-md-10">                                                <input data-parsley-type="number" type="text" name="mob1" id='mob1'
                          class="form-control" required
                          placeholder="Enter only mobile numbers"/>
                        </div>
                      </div>
                      <div class="form-group row">
                    <label for="userName" class="col-md-2 col-form-label">Select Package<span class="text-danger">*</span></label>   <div class="col-md-10">
                      <select  name="pack1" parsley-trigger="change"
                      placeholder="select package" class="form-control" id="pack1" autofocus=""  required>
                          <?php
                          $p=$this->db->get('package')->result();
                          foreach($p as $r)
                          {
                          echo "<option value='".$r->name."'>".$r->name."</option>";
                          }
                          ?>
                          </select>
                    </div></div>
                      <div class="form-group row">
                        <label for="pass" class="col-md-2 col-form-label">Enter New Password<span class="text-danger">*</span></label>   <div class="col-md-10">
                          <input id="pass1" name="pass1" type="Password"   placeholder="Enter new password" required class="form-control">
                        </div></div>
                        <div class="form-group row">
                          <label for="passWord2" class="col-md-2 col-form-label">Confirm Password <span class="text-danger">*</span></label>   <div class="col-md-10">
                            <input data-parsley-equalto="#pass" type="password" required
                            placeholder="Enter Confirm Password" class="form-control" id="passWord2">
                          </div></div>
                            
                           
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--END MODAL EDIT-->

              <!--MODAL DELETE-->
              <form>
                <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header custom-modal-title">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                     </div>
                     <div class="modal-footer">
                      <input type="hidden" name="product_code_delete" id="product_code_delete" class="form-control">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                      <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <!--END MODAL DELETE-->


          </div> <!-- container -->

        </div> <!-- content -->



      </div>
      <!-- End content-page -->
      <form>
        <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header ">
               <h5 class="text-primary text-lg"> <strong >Records Delete Successfully</strong> </h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            </div>

          </div>
        </div>
      </div>
    </form>

    <form >
      <div class="modal fade" id="Modal_status" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
             <h5 class="text-primary text-lg"> <strong >Status Successfully Updated</strong> </h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          </div>

        </div>
      </div>
    </div>
  </form>
  <!-- ============================================================== -->
  <!-- End Right content here -->
  <!-- ============================================================== -->

  <?php require 'includes/footer_start.php'?>


  <!--<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script> -->
  <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'assets/js/dataTables.bootstrap4.js' ?>"></script>

  <script type="text/javascript">
    $(document).ready(function(){
        show_product(); //call function show all product

        $('#mydata').dataTable();

        //function show all product
        function show_product(){
          $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url() . 'dashboard/product_data'; ?>',
            async : false,
            dataType : 'json',
            success : function(data){
              var html = '';
              var i;
              var j=0;
              for(i=0; i<data.length; i++){
                  j=j+1;
                   var status1=data[i].status;
                        if(status1==1){
                            var status_name='<b style="color:green;">Active</b>';
 var status_button='<a href="javascript:void(0);" class="btn btn-warning btn-sm item_status" data-id="'+data[i].id+'" data-status="'+data[i].status+'">Suspend</a>';
                          }else{
                                var status_name='<b style="color:red;">Inactive</b>';
 var status_button='<a href="javascript:void(0);" class="btn btn-info btn-sm item_status" data-id="'+data[i].id+'" data-status="'+data[i].status+'">Unsuspend</a>';
                                 }
                html += '<tr>'+
                 '<td>'+j+'</td>'+
                '<td>'+data[i].name+'</td>'+
                 '<td>'+data[i].ref_code+'</td>'+
                  '<td>'+data[i].city+'</td>'+
                   '<td>'+data[i].date+'</td>'+
                    '<td>'+data[i].expire_date+'</td>'+
                     '<td>'+data[i].pack+'</td>'+
                      '<td>'+status_name+'</td>'+
                      '<td>'+data[i].total_users+'</td>'+
                        '<td>'+data[i].total_guard+'</td>'+
               
                '<td style="text-align:right;">'+
                '<div class="btn-group"><a href="javascript:void(0);" class="btn btn-success btn-sm item_edit" data-id="'+data[i].id+'" data-mob="'+data[i].mob+'" data-mail="'+data[i].mail+'" data-addr="'+data[i].addr+'" data-date="'+data[i].date+'"  data-passd="'+data[i].pin+'">Edit</a>'+' '+
                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-product_code="'+data[i].id+'">Delete</a>'+' '+status_button+ '</div></td>'+
                '</tr>';
              }
              $('#show_data').html(html);
            }

          });
        }



        //update record to database
        $('#show_data').on('click','.item_status',function(){
         var id = $(this).data('id');
         var status = $(this).data('status');
         $.ajax({
          type : "POST",
          url  : "<?php echo site_url('dashboard/update_status') ?>",
          dataType : "JSON",
          data : {id:id, status:status },
          success: function(data){
            $('#Modal_status').modal('show');
            show_product();
          }
                //error:function(data){ alert(data); }
              });
         return false;
       });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){

          var id = $(this).data('id');
          var apartment= $(this).data('apartment');
           var city= $(this).data('city');
          var mob         = $(this).data('mob');
          var email = $(this).data('mail');
          var address = $(this).data('addr');
          var passd        =atob($(this).data('passd'));

          $('#Modal_Edit').modal('show');
          $('[name="id"]').val(id);
          $('[name="appartment1"]').val(apartment);
           $('[name="city1"]').val(city);
          $('[name="mob"]').val(mob);
          $('[name="mail"]').val(email);
          $('[name="addr"]').val(address);
          $('[name="passd"]').val(passd);
        });

        //update record to database
        $('#btn_update').on('click',function(){
          var id = $('#id').val();
          var user = $('#user').val();
          var mob  = $('#mob').val();
          var email = $('#email').val();
          var address = $('#address').val();
          var passd        = $('#passd').val();

          $.ajax({
            type : "POST",
            url  : "<?php echo site_url('Estate_dashboard/update') ?>",
            dataType : "JSON",
            data : {id:id , user:user, mob:mob, email:email, address:address, passd:passd},
            success: function(data){
              document.getElementById('form_update').reset();
              document.getElementById('form1').reset();
              $('#Modal_Edit').modal('hide');
              show_product();
            }
                //error:function(data){ alert(data); }
              });
          return false;
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
          var product_code = $(this).data('product_code');
          $('#Modal_Delete').modal('show');
          $('[name="product_code_delete"]').val(product_code);
        });

        //delete record to database
        $('#btn_delete').on('click',function(){
          var product_code = $('#product_code_delete').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo site_url('dashboard/delete') ?>",
            dataType : "JSON",
            data : {product_code:product_code},
            success: function(data){
              $('[name="product_code_delete"]').val("");
              $('#Modal_Delete').modal('hide');
              $('#custom-modal').modal('show');
              show_product();
            }
          });
          return false;
        });
/*
$("#form1").on("submit",function(e){
          $('#Modal_Add').modal('hide');
          e.preventDefault();
          $.ajax({
            type:"POST",
            url:"<?php echo base_url(); ?>Estate_dashboard/insert1",
            data:new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            success:function(response)
            {
              document.getElementById('form1').reset();
              show_product();
            }
          });
          return false;
        }); */

      });
    </script>


    <script src="<?=base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/moment/moment.js"></script>
    <script src='<?=base_url()?>assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
    <script src="<?=base_url()?>assets/pages/jquery.fullcalendar.js"></script>


    <script type="text/javascript">
      $(document).ready(function () {
            // Default Datatable
            $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                  lengthChange: true,
                  buttons: ['copy', 'excel', 'pdf'],

                });

                // Key Tables

                $('#key-table').DataTable({
                  keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                  select: {
                    style: 'multi'
                  }
                });

                table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
              });

            </script>


            <!-- Validation js (Parsleyjs) -->
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/parsleyjs/parsley.min.js"></script>

            <script type="text/javascript">
              $(document).ready(function() {
                $('form').parsley();
              });
            </script>


            <?php require 'includes/footer_end.php'?>