<?php require 'includes/header_start.php'; ?>

    <!-- form Uploads -->
    <link href="assets/plugins/fileuploads/css/dropify.min.css" rel="stylesheet" type="text/css" />


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
                            <h4 class="page-title float-left">File Uploads</h4>

                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">File Uploads</li>
                            </ol>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <h4 class="header-title m-t-0 m-b-30">Default</h4>

                            <input type="file" class="dropify" data-height="300" />
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-md-4">
                        <div class="card-box">

                            <h4 class="header-title m-t-0 m-b-30">Default File</h4>

                            <input type="file" class="dropify" data-default-file="assets/images/gallery/1.jpg"  />
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="card-box">

                            <h4 class="header-title m-t-0 m-b-30">Disabled the input</h4>

                            <input type="file" class="dropify" disabled="disabled"  />
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="card-box">

                            <h4 class="header-title m-t-0 m-b-30">Max File size</h4>

                            <input type="file" class="dropify" data-max-file-size="1M" />
                        </div>
                    </div><!-- end col -->
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

    <!-- file uploads js -->
    <script src="assets/plugins/fileuploads/js/dropify.min.js"></script>

    <script type="text/javascript">
        $('.dropify').dropify({
            messages: {
                'default': 'Drag and drop a file here or click',
                'replace': 'Drag and drop or click to replace',
                'remove': 'Remove',
                'error': 'Ooops, something wrong appended.'
            },
            error: {
                'fileSize': 'The file size is too big (1M max).'
            }
        });
    </script>

<?php require 'includes/footer_end.php' ?>