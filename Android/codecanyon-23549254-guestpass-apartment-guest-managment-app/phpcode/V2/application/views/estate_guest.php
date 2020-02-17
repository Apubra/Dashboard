<?php require 'includes/header_start.php';?>

<?php require 'includes/header_end.php';?>

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
            <h4 class="page-title float-left">Guest List

            </h4>

            <ol class="breadcrumb float-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Guest List</li>
            </ol>

            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <!-- end row -->

      <?php if ($this->session->flashdata('success')) {?>
        <div class="alert alert-success"> <?=$this->session->flashdata('success')?> </div>
      <?php }?>
      <?php if ($this->session->flashdata('error')) {?>
        <div class="alert alert-danger"> <?=$this->session->flashdata('error')?> </div>
      <?php }?>

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
      <div class="row">
        <div class="col-12">
          <div class="col-md-12">
            <!--    <h2>Guard
                    <small>List</small>
                  </h2> -->
                <!--  <div class="float-right" style="margin-top:-70px;"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus" ></span> Add New</a></div>-->
                </div>
                <!--  id="mydata" -->
                <table class="table table-striped" id="datatable-buttons" style="background-color: #fff;">
                  <thead>
                    <tr>
                    
                      <th>Name</th>
                      <th>Estate User</th>
                      <!--<th>Estate Admin</th>-->
                      <th>Flat Name</th>
                      <th>Guard Name</th>
                      <!--<th>Response</th>-->
                      <th>Mobile</th>
                       <th>Guest Role</th>
                      <th>Total Guest</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Address</th>
                      <th>Purpose</th>
                      <th>Check Time</th>
                      <th>Image</th>
                       <th>Doc Image</th>
                        <th>Check Guest</th>
                         <th>Status</th>
                      <!--<th style="text-align: right;">Actions</th>-->
                    </tr>
                  </thead>
                  <tbody id="show_data">

                  </tbody>
                </table>
              </div>
            </div>
            <script type="text/javascript">
              function validate(){
                //alert('000');
               document.getElementById('form1').style.display='none';
                return true;
              }
            </script>


            <!-- MODAL ADD -->
            <!--<form method="post" action="<?php echo base_url(); ?>Estate_dashboard/insert2" data-parsley-validate novalidate name="form1" id="form1" enctype="multipart/form-data" >-->
            <!--  <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >-->
            <!--    <div class="modal-dialog modal-lg" role="document">-->
            <!--      <div class="modal-content">-->
            <!--        <div class="modal-header custom-modal-title">-->
            <!--          <h5 class="modal-title" id="exampleModalLabel">Add New</h5>-->
            <!--          <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
            <!--            <span aria-hidden="true">&times;</span>-->
            <!--          </button>-->
            <!--        </div>-->
            <!--        <div class="modal-body">-->

            <!--         <div class="form-group row">-->
            <!--          <label for="userName" class="col-md-2 col-form-label">Guard Name<span class="text-danger">*</span></label>-->
            <!--          <div class="col-md-10">-->
            <!--            <input type="text" name="name" parsley-trigger="change" required-->
            <!--            placeholder="Enter user name" class="form-control" id="name">-->
            <!--          </div></div>-->
            <!--          <div class="form-group row">-->
            <!--            <label class="col-md-2 col-form-label">Agency Name</label>-->
            <!--            <div class="col-md-10">-->
            <!--              <input type="text" name="agency_name" id="" ="agency_name"-->
            <!--              class="form-control" required  placeholder="Enter agency name here..."/>-->
            <!--            </div>-->
            <!--          </div>-->
            <!--          <div class="form-group row">-->
            <!--            <label class="col-md-2 col-form-label">Email </label>-->
            <!--            <div class="col-md-10">-->

            <!--              <input type="text" name="mail" id= "mail" class="form-control" placeholder="Enter Email" required="">-->
            <!--            </div>-->
            <!--          </div>-->
            <!--          <div class="form-group row">-->
            <!--            <label class="col-md-2 col-form-label">Address</label>-->
            <!--            <div class="col-md-10">-->

            <!--              <textarea required class="form-control" name="addr" id="addr"></textarea>-->
            <!--            </div>-->
            <!--          </div>-->



            <!--          <div class="form-group row">-->
            <!--            <label class="col-md-2 col-form-label">Mobile Number</label>-->
            <!--            <div class="col-md-10">-->

            <!--              <input data-parsley-type="number" type="text" name="mob" id='mob'-->
            <!--              class="form-control" required-->
            <!--              placeholder="Enter only mobile numbers"/>-->
            <!--            </div>-->
            <!--          </div>-->
            <!--          <div class="form-group row">-->
            <!--            <label for="pass1" class="col-md-2 col-form-label">Set Pin<span class="text-danger">*</span></label>-->
            <!--            <div class="col-md-10">-->

            <!--              <input id="pin" name="pin" type="Password"  maxlength="4" placeholder="Enter 4 digits Pin" required class="form-control">-->
            <!--            </div></div>-->
            <!--            <div class="form-group row">-->
            <!--              <label for="pin" class="col-md-2 col-form-label">Confirm Pin <span class="text-danger">*</span></label>-->
            <!--              <div class="col-md-10">-->

            <!--                <input data-parsley-equalto="#pin" type="password" required-->
            <!--                placeholder="Enter Confirm Pin" class="form-control" name='confirm' id="confirm">-->
            <!--              </div></div>-->

            <!--              <div class="form-group row">-->
            <!--                <label class="col-md-2 col-form-label">Images</label>-->
            <!--                <div class="col-md-10">-->

            <!--                 <input type="file" name="img" id='img' class="form-control">-->
            <!--               </div>-->
            <!--             </div>-->

            <!--           </div>-->
            <!--           <div class="modal-footer">-->
                        <!-- <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button> -->
            <!--            <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>-->
                          
                      
            <!--            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </form>-->
              <!--END MODAL ADD-->

              <!-- MODAL EDIT -->
              <!--<form id="form_update">-->
              <!--  <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
              <!--    <div class="modal-dialog modal-lg" role="document">-->
              <!--      <div class="modal-content">-->
              <!--        <div class="modal-header">-->
              <!--          <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>-->
              <!--          <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
              <!--            <span aria-hidden="true">&times;</span>-->
              <!--          </button>-->
              <!--        </div>-->
              <!--        <input type="hidden" name="id1" id="id1" class="form-control" >-->
              <!--        <div class="modal-body">-->
              <!--          <div class="form-group row">-->
              <!--            <label class="col-md-2 col-form-label">Name</label>-->
              <!--            <div class="col-md-10">-->
              <!--              <input type="text" name="name1" id="name1" class="form-control" placeholder="Enter User Name" required="">-->
              <!--            </div>-->
              <!--          </div>-->
              <!--          <div class="form-group row">-->
              <!--            <label class="col-md-2 col-form-label">Agency Name</label>-->
              <!--            <div class="col-md-10">-->
              <!--              <input type="text" name="agency_name1" id="agency_name1" class="form-control" placeholder="Enter Agency Name here..." required="">-->
              <!--            </div>-->
              <!--          </div>-->

              <!--          <div class="form-group row">-->
              <!--            <label class="col-md-2 col-form-label">Email</label>-->
              <!--            <div class="col-md-10">-->
              <!--              <input type="text" name="mail1" id="mail1" class="form-control" placeholder="Enter Email ID here..." required="">-->
              <!--            </div>-->
              <!--          </div>-->

              <!--          <div class="form-group row">-->
              <!--            <label class="col-md-2 col-form-label">Address</label>-->
              <!--            <div class="col-md-10">-->
              <!--              <input type="text" name="addr1" id="addr1" class="form-control" placeholder="Enter Address here..." >-->
              <!--            </div>-->
              <!--          </div>-->

              <!--          <div class="form-group row">-->
              <!--            <label class="col-md-2 col-form-label">Mobile</label>-->
              <!--            <div class="col-md-10">-->
              <!--              <input type="text" name="mob1" id="mob1" class="form-control" placeholder="Enter Mobile number  here..." required="">-->
              <!--            </div>-->
              <!--          </div>-->

              <!--          <div class="form-group row">-->
              <!--            <label class="col-md-2 col-form-label">Pin</label>-->
              <!--            <div class="col-md-10">-->
              <!--              <input type="text" name="pin1" id="pin1" class="form-control" placeholder="Enter Pin here..." required="">-->
              <!--            </div>-->
              <!--          </div>-->


              <!--        </div>-->
              <!--        <div class="modal-footer">-->
              <!--          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
              <!--          <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</form>-->
              <!--END MODAL EDIT-->

              <!--MODAL DELETE-->
            <!--  <form>-->
            <!--    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
            <!--      <div class="modal-dialog" role="document">-->
            <!--        <div class="modal-content">-->
            <!--          <div class="modal-header">-->
            <!--            <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>-->
            <!--            <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
            <!--              <span aria-hidden="true">&times;</span>-->
            <!--            </button>-->
            <!--          </div>-->
            <!--          <div class="modal-body">-->
            <!--           <strong>Are you sure to delete this record?</strong>-->
            <!--         </div>-->
            <!--         <div class="modal-footer">-->
            <!--          <input type="hidden" name="product_code_delete" id="product_code_delete" class="form-control">-->
            <!--          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>-->
            <!--          <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</form>-->
            <!--END MODAL DELETE-->


          </div> <!-- container -->

        </div> <!-- content -->



      </div>
    <!--  <form>-->
    <!--    <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
    <!--      <div class="modal-dialog" role="document">-->
    <!--        <div class="modal-content">-->
    <!--          <div class="modal-header">-->
    <!--           <h5 class="text-primary text-lg"> <strong >Records Delete Successfully</strong> </h5>-->
    <!--           <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
    <!--            <span aria-hidden="true">&times;</span>-->
    <!--          </button>-->
    <!--        </div>-->
    <!--        <div class="modal-body">-->
    <!--        </div>-->

    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</form>-->

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
            url   : 'http://sagarfoundation.org.in/guestpass/Estate_dashboard/guest_list1',
            async : false,
            dataType : 'json',
            success : function(data){
              var html = '';
              var i;
             
              for(i=0; i<data.length; i++){
                html += '<tr>'+
                // '<td>'+data[i].guest_id+'</td>'+
                 '<td>'+data[i].name+'</td>'+
                '<td>'+data[i].estate_user+'</td>'+
                //  '<td>'+data[i].estate_admin+'</td>'+
                  '<td>'+data[i].flat_id+'</td>'+
                   '<td>'+data[i].guard_id+'</td>'+
                    // '<td>'+data[i].response+'</td>'+
                     '<td>'+data[i].mobile+'</td>'+
                      '<td>'+data[i].guest_role+'</td>'+
                       '<td>'+data[i].total_guest+'</td>'+
                        '<td>'+data[i].a_date+'</td>'+
                         '<td>'+data[i].time+'</td>'+
                           '<td>'+data[i].address+'</td>'+
                            '<td>'+data[i].purpose+'</td>'+
                             '<td>'+data[i].checkin_time+'</td>'+
                             '<td><img src='+data[i].image+' style="width:50px; height:50px;"></td>'+
                              '<td><img src='+data[i].docimage+' style="width:50px; height:50px;"></td>'+
                             '<td>'+data[i].checkin_guests+'</td>'+
                             '<td>'+data[i].status+'</td>'+
                 '</tr>';
              }
              $('#show_data').html(html);
            }
          });
        }


        //get data for update record
        // $('#show_data').on('click','.item_edit',function(){
        //   var id = $(this).data('id');
        //   var user = $(this).data('name');
        //   var mob         = $(this).data('mob');
        //   var address = $(this).data('info');
        //   var agency_name = $(this).data('agency_name');
        //   var mail          = $(this).data('mail');
        //   var pin = $(this).data('pin');

        //   $('#Modal_Edit').modal('show');
        //   $('[name="id1"]').val(id);
        //   $('[name="name1"]').val(user);
        //   $('[name="agency_name1"]').val(agency_name);
        //   $('[name="addr1"]').val(address);
        //   $('[name="mail1"]').val(mail);
        //   $('[name="mob1"]').val(mob);
        //   $('[name="pin1"]').val(pin);
        // });

        // //update record to database
        // $('#btn_update').on('click',function(){
        //   var id = $('#id1').val();
        //   var user = $('#name1').val();
        //   var mob  = $('#mob1').val();
        //   var addr = $('#addr1').val();
        //   var agency_name = $('#agency_name1').val();
        //   var pin = $('#pin1').val();
        //   var mail = $('#mail1').val();

        //   $.ajax({
        //     type : "POST",
        //     url  : "<?php echo site_url('Estate_dashboard/#') ?>",
        //     //dataType : "JSON",
        //     data : {id:id, user:user, mob:mob, addr:addr, agency_name:agency_name, pin:pin, mail:mail},
        //     success: function(data){
        //       document.getElementById('form_update').reset();
        //       document.getElementById('form1').reset();
        //       $('#Modal_Edit').modal('hide');
        //       console.log(data);
        //       show_product();
        //     },
        //     error: function(data){
        //         alert('err');
        //       },
        //     });
        //   return false;
        // });

        //get data for delete record
        // $('#show_data').on('click','.item_delete',function(){
        //   var product_code = $(this).data('product_code');
        //   $('#Modal_Delete').modal('show');
        //   $('[name="product_code_delete"]').val(product_code);
        // });

        // //delete record to database
        // $('#btn_delete').on('click',function(){
        //   var product_code = $('#product_code_delete').val();
        //   $.ajax({
        //     type : "POST",
        //     url  : "<?php echo site_url('Estate_dashboard/#') ?>",
        //     dataType : "JSON",
        //     data : {product_code:product_code},
        //     success: function(data){
        //       $('[name="product_code_delete"]').val("");
        //       $('#Modal_Delete').modal('hide');
        //       $('#custom-modal').modal('show');
        //       show_product();
        //     }
        //   });
        //   return false;
        // });


/*        $("#form1").on("submit",function(e){
          $('#Modal_Add').modal('hide');
          e.preventDefault();
          $.ajax({
            type:"POST",
            url:"<?php echo base_url(); ?>Estate_dashboard/insert2",
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
        }); 
*/
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
 "scrollX": true,
 "ordering":false,
                  lengthChange: true,
                  buttons: ['copy', 'excel', 'pdf']
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