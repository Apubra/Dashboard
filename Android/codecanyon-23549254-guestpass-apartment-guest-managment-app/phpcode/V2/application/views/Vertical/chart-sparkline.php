<?php require 'includes/header_start.php'; ?>

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
                            <h4 class="page-title float-left">Sparkline Charts</h4>

                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                                <li class="breadcrumb-item"><a href="#">Charts</a></li>
                                <li class="breadcrumb-item active">Sparkline Charts</li>
                            </ol>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-4">
                                    <h4 class="header-title m-t-0">Line Charts</h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Display as line Chart.Your awesome text goes here.
                                    </p>

                                    <div class="p-20">
                                        <div id="sparkline1"></div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-4">
                                    <h4 class="header-title m-t-0">Bar Chart</h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Display as bar Chart.Your awesome text goes here.
                                    </p>

                                    <div class="p-20">
                                        <div id="sparkline2" class="text-xs-center"></div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-4">
                                    <h4 class="header-title m-t-0">Pie Chart</h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Display as pie Chart.Your awesome text goes here.
                                    </p>

                                    <div class="p-20">
                                        <div id="sparkline3" class="text-xs-center"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row m-t-50">
                                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Custom Line Chart</h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Display as custom line Chart.Your awesome text goes here.
                                    </p>

                                    <div class="p-20">
                                        <div id="sparkline4" class="text-xs-center"></div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Mouse Speed Chart Example</h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Display as Mouse Speed Chart.Your awesome text goes here.
                                    </p>

                                    <div class="p-20">
                                        <div id="sparkline5" class="text-xs-center"></div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Composite bar Chart</h4>
                                    <p class="text-muted font-13 m-b-30">
                                        Display as Composite bar Chart.Your awesome text goes here.
                                    </p>

                                    <div class="p-20">
                                        <div id="sparkline6" class="text-xs-center"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->


                        </div>
                    </div><!-- end col-->

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

    <!-- Sparkline charts js -->
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/pages/jquery.charts-sparkline.js"></script>

<?php require 'includes/footer_end.php' ?>