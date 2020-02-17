<?php require 'includes/header_start.php'; ?>
    <!-- C3 charts css -->
    <link href="assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"/>

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
            <h4 class="page-title">C3 Chart</h4>
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
                        <h4 class="header-title m-t-0">Bar Chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            Display as Bar Chart.
                        </p>

                        <div class="p-20">
                            <div id="chart"></div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
                        <h4 class="header-title m-t-0">Stacked Area Chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            Display as Stacked Area Chart.
                        </p>

                        <div class="p-20">
                            <div id="chart-stacked"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row m-t-50">
                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Roated Chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            Display as roated Chart.
                        </p>

                        <div class="p-20">
                            <div id="roated-chart"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Combine Chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            Display all kinda charts up in here.
                        </p>

                        <div class="p-20">
                            <div id="combine-chart"></div>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row m-t-50">

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Donut Chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            Display as Donut Chart.
                        </p>

                        <div class="p-20">
                            <div id="donut-chart"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Pie Chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            Display as Pie Chart.
                        </p>

                        <div class="p-20">
                            <div id="pie-chart"></div>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row m-t-50">

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Scatter Plot</h4>
                        <p class="text-muted font-13 m-b-30">
                            Display as Scatter Plot.
                        </p>

                        <div class="p-20">
                            <div id="scatter-plot"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Line Chart with Regions</h4>
                        <p class="text-muted font-13 m-b-30">
                            Set regions for each data with style.
                        </p>

                        <div class="p-20">
                            <div id="line-regions"></div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div>
        </div><!-- end col-->

    </div>
    <!-- end row -->



<?php require 'includes/footer_start.php' ?>

    <!--C3 Chart-->
    <script type="text/javascript" src="assets/plugins/d3/d3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/c3/c3.min.js"></script>
    <script src="assets/pages/jquery.c3-chart.init.js"></script>

<?php require 'includes/footer_end.php' ?>