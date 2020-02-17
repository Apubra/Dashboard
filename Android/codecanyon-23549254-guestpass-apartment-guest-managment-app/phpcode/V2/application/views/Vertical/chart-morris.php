<?php require 'includes/header_start.php'; ?>

<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">

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
                        <h4 class="page-title float-left">Morris Chart</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                            <li class="breadcrumb-item"><a href="#">Charts</a></li>
                            <li class="breadcrumb-item active">Morris Chart</li>
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
                            <div class="col-sm-12 col-xs-12 col-md-6">
                                <h4 class="header-title m-t-0">Line Chart</h4>
                                <p class="text-muted font-13 m-b-30">
                                    The public API is terribly simple. It's just one function: Morris.Line
                                    (options), where options is an object containing some of the
                                    configuration options.
                                </p>

                                <div class="p-20">
                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li class="list-inline-item">
                                                <h6 style="color: #1bb99a;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series A</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color: #f1b53d;"><i class="zmdi zmdi-triangle-up m-r-5"></i>Series B</h6>
                                            </li>
                                        </ul>
                                    </div>

                                    <div id="morris-line-example" style="height: 300px;"></div>

                                </div>
                            </div>

                            <div class="col-sm-12 col-xs-12 col-md-6">
                                <h4 class="header-title m-t-0">Bar Chart</h4>
                                <p class="text-muted font-13 m-b-30">
                                    Create bar charts using Morris.Bar(options), where options is an object
                                    containing the configuration options.
                                </p>

                                <div class="p-20 p-b-0">
                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li class="list-inline-item">
                                                <h6 style="color: #3db9dc;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series A</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color: #f1b53d;"><i class="zmdi zmdi-triangle-up m-r-5"></i>Series B</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color: #ff5d48;"><i class="zmdi zmdi-square-o m-r-5"></i>Series C</h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="morris-bar-example" style="height: 320px;"></div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row m-t-50">
                            <div class="col-sm-12 col-xs-12 col-md-6 m-t-20">
                                <h4 class="header-title m-t-0">Stacked Bar Chart</h4>
                                <p class="text-muted font-13 m-b-30">
                                    Create stacked bar charts using Morris.Bar(options), where options is an object
                                    containing the configuration options.
                                </p>

                                <div class="p-20">
                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li class="list-inline-item">
                                                <h6 style="color: #3db9dc;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series A</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6><i class="zmdi zmdi-triangle-up m-r-5"></i>Series B</h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="morris-bar-stacked" style="height: 300px;"></div>

                                </div>
                            </div>

                            <div class="col-sm-12 col-xs-12 col-md-6 m-t-20">
                                <h4 class="header-title m-t-0">Area Chart</h4>
                                <p class="text-muted font-13 m-b-30">
                                    Create an area chart using Morris.Area(options). Area charts take all the
                                    same options as line charts.
                                </p>

                                <div class="p-20">
                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li class="list-inline-item">
                                                <h6 style="color: #3db9dc;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series A</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color: #039cfd;"><i class="zmdi zmdi-triangle-up m-r-5"></i>Series B</h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="morris-area-example" style="height: 300px;"></div>

                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row m-t-50">

                            <div class="col-sm-12 col-xs-12 col-md-6 m-t-20">
                                <h4 class="header-title m-t-0">Area Chart with Point</h4>
                                <p class="text-muted font-13 m-b-30">
                                    Create an area chart using Morris.Area(options). Area charts take all the
                                    same options as line charts.
                                </p>

                                <div class="p-20">
                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li class="list-inline-item">
                                                <h6 style="color: #9261c6;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series A</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color: #ff7aa3;"><i class="zmdi zmdi-triangle-up m-r-5"></i>Series B</h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="morris-area-with-dotted" style="height: 300px;"></div>

                                </div>
                            </div>

                            <div class="col-sm-12 col-xs-12 col-md-6 m-t-20">
                                <h4 class="header-title m-t-0">Donut Chart</h4>
                                <p class="text-muted font-13 m-b-30">
                                    This really couldn't be easier. Create a Donut chart using Morris.Donut(options).
                                </p>

                                <div class="p-20">
                                    <div id="morris-donut-example" style="height: 300px;"></div>

                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li class="list-inline-item">
                                                <h6 style="color: #f1b53d;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series A</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color: #9261c6;"><i class="zmdi zmdi-triangle-up m-r-5"></i>Series B</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color: #ff7aa3;"><i class="zmdi zmdi-square-o m-r-5"></i>Series C</h6>
                                            </li>
                                        </ul>
                                    </div>

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

<!--Morris Chart-->
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>
<script src="assets/pages/jquery.morris.init.js"></script>


<?php require 'includes/footer_end.php' ?>
