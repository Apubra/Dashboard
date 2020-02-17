<?php require 'includes/header_start.php';?>

    <!--calendar css-->
    <link href="<?=base_url()?>assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />
    <!--
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/jquery.dataTables.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/dataTables.bootstrap4.css' ?>">
-->
    <!-- DataTables -->
    <link href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url(); ?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Multi Item Selection examples -->
    <link href="<?php echo base_url(); ?>assets/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />


<?php require 'includes/header_end.php';?>


<!-- code for table -->
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
          <div class="col-md-12">
                <h2>User
                    <small>List</small>
                <!--      <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div> -->
                </h2>
            </div>
<!--  id="mydata" -->
            <table class="table table-striped" id="datatable-buttons" >
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">

                </tbody>
            </table>
        </div>
    </div>



        <!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Product Code</label>
                            <div class="col-md-10">
                              <input type="text" name="product_code" id="product_code" class="form-control" placeholder="Product Code">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Product Name</label>
                            <div class="col-md-10">
                              <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Price</label>
                            <div class="col-md-10">
                              <input type="text" name="price" id="price" class="form-control" placeholder="Price">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <form id="form_update">
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                     <input type="hidden" name="id" id="id" class="form-control" >
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">User Name</label>
                            <div class="col-md-10">
                              <input type="text" name="user" id="user" class="form-control" placeholder="Enter User Name" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Mobile</label>
                            <div class="col-md-10">
                              <input type="text" name="mob" id="mob" class="form-control" placeholder="Enter Mobile number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                              <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email here...">
                            </div>
                        </div>
                             <div class="form-group row">
                            <label class="col-md-2 col-form-label">Address</label>
                            <div class="col-md-10">
                              <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address here...">
                            </div>
                        </div>
                             <div class="form-group row">
                            <label class="col-md-2 col-form-label">City</label>
                            <div class="col-md-10">
                              <input type="text" name="city" id="city" class="form-control" placeholder="Enter City here...">
                            </div>
                        </div>
                         <!--    <div class="form-group row">
                            <label class="col-md-2 col-form-label">Images</label>
                            <div class="col-md-10">
                              <input type="text" name="img" id="price_edit" class="form-control" placeholder="Price">
                            </div>
                        </div> -->

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
         <form >
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
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

<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
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
                url   : '<?php echo base_url() . 'Dashboard/product_data'; ?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].user+'</td>'+
                                '<td>'+data[i].mob+'</td>'+
                                '<td>'+data[i].email+'</td>'+
                                '<td>'+data[i].address+'</td>'+
                                '<td>'+data[i].city+'</td>'+
                                '<td><img src="<?php echo base_url(); ?>assets/images/users/'+data[i].img+'" style="width:50px; height:50px;"></td>'+
                                '<td>'+data[i].date+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'" data-user="'+data[i].user+'" data-mob="'+data[i].mob+'" data-email="'+data[i].email+'" data-address="'+data[i].address+'" data-city="'+data[i].city+'" data-img="'+data[i].img+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-product_code="'+data[i].id+'">Delete</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //Save product
        $('#btn_save').on('click',function(){
            var product_code = $('#product_code').val();
            var product_name = $('#product_name').val();
            var price        = $('#price').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/save') ?>",
                dataType : "JSON",
                data : {product_code:product_code , product_name:product_name, price:price},
                success: function(data){
                    $('[name="product_code"]').val("");
                    $('[name="product_name"]').val("");
                    $('[name="price"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var id = $(this).data('id');
            var user = $(this).data('user');
            var mob         = $(this).data('mob');
            var email = $(this).data('email');
            var address = $(this).data('address');
            var city        = $(this).data('city');

            $('#Modal_Edit').modal('show');
            $('[name="id"]').val(id);
            $('[name="user"]').val(user);
            $('[name="mob"]').val(mob);
            $('[name="email"]').val(email);
            $('[name="address"]').val(address);
            $('[name="city"]').val(city);
        });

        //update record to database
         $('#btn_update').on('click',function(){

            var id = $('#id').val();
            var user = $('#user').val();
            var mob  = $('#mob').val();
            var email = $('#email').val();
            var address = $('#address').val();
            var city        = $('#city').val();

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Dashboard/update') ?>",
                dataType : "JSON",
                data : {id:id , user:user, mob:mob, email:email, address:address, city:city},
                success: function(data){
                    document.getElementById('form_update').reset();
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
                url  : "<?php echo site_url('Dashboard/delete') ?>",
                dataType : "JSON",
                data : {product_code:product_code},
                success: function(data){
                    $('[name="product_code_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });

    });

</script>


<!-- ********* -->


<?php // require 'includes/footer_start.php'?>

    <!-- BEGIN PAGE SCRIPTS -->
    <!-- Jquery-Ui -->

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
                    lengthChange: false,
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

<?php require 'includes/footer_end.php'?>