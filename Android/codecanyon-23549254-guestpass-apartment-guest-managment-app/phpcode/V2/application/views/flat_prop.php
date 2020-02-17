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
            <h4 class="page-title float-left">Property/Flats</h4>

            <ol class="breadcrumb float-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Property/Flats</li>
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
  <!-- -->
  <!-- MODAL ADD -->
          <form method="post" action="<?php echo base_url(); ?>Estate_dashboard/insert_prop" data-parsley-validate novalidate name="form1" id="form1">
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
                    <label for="propName" class="col-md-2 col-form-label">Property/Flat Name<span class="text-danger">*</span></label>   <div class="col-md-10">
                      <input type="text" name="propName" parsley-trigger="change"
                      placeholder="Enter Property/Flat name" class="form-control" id="propName" autofocus=""  required>
                    </div></div>
                    <div class="form-group row">
                      <label for="propOwnerName" class="col-md-2 col-form-label">Property/Flat Owner Name<span class="text-danger">*</span></label>   <div class="col-md-10">
                        <input type="text" name="propOwnerName" parsley-trigger="change" required
                        placeholder="Property/Flat Owner Name" class="form-control" id="propOwnerName">
                      </div></div>

                      <div class="form-group row">
                      <label for="propDesc" class="col-md-2 col-form-label">Property Description<span class="text-danger">*</span></label>   <div class="col-md-10">
                        <input type="text" name="propDesc" parsley-trigger="change" required
                        placeholder="Property/Flat Description" class="form-control" id="propDesc">
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
      <div class="row">
        <div class="col-12">
          <div class="col-md-12">
               <!-- <h2>User
                <small>List</small>  </h2> -->
                <div class="float-right" style="margin-top:-70px;"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus" ></span> Add New</a></div>

              </div>
              <!--  id="mydata" -->
              <table class="table table-striped page-title-box" id="datatable-buttons" style="background-color: #fff;">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Date</th>
                    <th>Flat/property Name</th>
                    <th>Flat/Property Owner Name</th>
                    <th>Description</th>
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
                        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <input type="hidden" name="id" id="id" class="form-control" >
                      <div class="modal-body">
                        <div class="form-group row">
                          <label class="col-md-2 col-form-label">Property/Flat Name</label>
                          <div class="col-md-10">
                            <input type="text" name="prop_name" id="prop_name" class="form-control" placeholder="Enter Property/Flat Name" >
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-2 col-form-label">Property/Flat Owner Name</label>
                          <div class="col-md-10">
                            <input type="text" name="prop_owner_name" id="prop_owner_name" class="form-control" placeholder="Enter Property/Flat Owner name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-2 col-form-label">Property Description</label>
                          <div class="col-md-10">
                            <input type="text" name="description" id="description" class="form-control" placeholder="Enter Property/Flat Description">
                          </div>
                        </div>
                      </div>
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
            url   : '<?php echo base_url() . 'Estate_dashboard/product_data3'; ?>',
            async : false,
            dataType : 'json',
            success : function(data){
              var html = '';
              var i;
            
              for(i=0; i<data.length; i++){
                    var s=data[i].flat_id;
                    
                   var status1=data[i].status;
                        if(status1==1){
                            var status_name='<b style="color:green;">Active</b>';
 var status_button='<a href="javascript:void(0);" class="btn btn-warning btn-sm item_status" data-id="'+data[i].id+'" data-status="'+data[i].status+'">Suspend</a>';
                          }else{
                                var status_name='<b style="color:red;">Inactive</b>';
 var status_button='<a href="javascript:void(0);" class="btn btn-info btn-sm item_status" data-id="'+data[i].id+'" data-status="'+data[i].status+'">Unsuspend</a>';
                                 }
                html += '<tr>'+
                '<td>'+data[i].id+'</td>'+
                '<td>'+data[i].date+'</td>'+
                '<td>'+data[i].prop_name+'</td>'+
                '<td>'+data[i].prop_owner_name+'</td>'+
                '<td>'+data[i].description+'</td>'+
                '<td style="text-align:right;">'+
                '<div class="btn-group"><a href="javascript:void(0);" class="btn btn-success btn-sm item_edit" data-id="'+data[i].id+'" data-prop_name="'+data[i].prop_name+'" data-prop_owner_name="'+data[i].prop_owner_name+'" data-description="'+data[i].description+'">Edit</a>'+' '+
                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-product_code="'+data[i].id+'">Delete</a>'+
                '</tr>';
              }
              $('#show_data').html(html);
            }

          });
        }


        //get data for update record
        $('#show_data').on('click','.item_edit',function(){

          var id = $(this).data('id');
          var prop_name = $(this).data('prop_name');
          var prop_owner_name  = $(this).data('prop_owner_name');
          var description= $(this).data('description');
         

          $('#Modal_Edit').modal('show');
          $('[name="id"]').val(id);
          $('[name="prop_name"]').val(prop_name);
          $('[name="prop_owner_name"]').val(prop_owner_name);
          $('[name="description"]').val(description);
        });

        //update record to database
        $('#btn_update').on('click',function(){
          var id = $('#id').val();
          var prop_name = $('#prop_name').val();
          var prop_owner_name  = $('#prop_owner_name').val();
          var description = $('#description').val();
        

          $.ajax({
            type : "POST",
            url  : "<?php echo site_url('Estate_dashboard/update3') ?>",
            dataType : "JSON",
            data : {id:id , prop_name:prop_name, prop_owner_name:prop_owner_name , description:description},
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
            url  : "<?php echo site_url('Estate_dashboard/delete3') ?>",
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