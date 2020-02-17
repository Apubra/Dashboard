<?php require 'includes/header_start.php'; ?>

    <!-- form Uploads -->
    <link href="assets/plugins/fileuploads/css/dropify.min.css" rel="stylesheet" type="text/css" />

<?php require 'includes/header_end.php'; ?>

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
                <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                        data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
                            class="fa fa-cog"></i></span></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>

            </div>
            <h4 class="page-title">File Uploads</h4>
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