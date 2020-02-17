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
                            <h4 class="page-title float-left">Chartjs</h4>

                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                                <li class="breadcrumb-item"><a href="#">Charts</a></li>
                                <li class="breadcrumb-item active">Chartjs</li>
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
                                    <p class="text-muted font-13 m-b-10">
                                        A line chart is a way of plotting data points on a line. Often, it is
                                        used to show trend data, and the comparison of two data sets.
                                    </p>

                                    <div class="p-20">
                                        <canvas id="lineChart" height="300"></canvas>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-xs-12 col-md-6">
                                    <h4 class="header-title m-t-0">Bar Chart</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        A bar chart is a way of showing data as bars. It is sometimes used to
                                        show trend data, and the comparison of multiple data sets side by side.
                                    </p>

                                    <div class="p-20">
                                        <canvas id="bar" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row m-t-50">
                                <div class="col-sm-12 col-xs-12 col-md-6 m-t-20">
                                    <h4 class="header-title m-t-0">Pie Chart</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        Pie and doughnut charts are probably the most commonly used chart there
                                        are. They are divided into segments, the arc of each segment shows the
                                        proportional value of each piece of data.
                                    </p>

                                    <div class="p-20">

                                        <canvas id="pie" height="260"></canvas>

                                    </div>
                                </div>

                                <div class="col-sm-12 col-xs-12 col-md-6 m-t-20">
                                    <h4 class="header-title m-t-0">Donut Chart</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        Pie and doughnut charts are probably the most commonly used chart there
                                        are. They are divided into segments, the arc of each segment shows the
                                        proportional value of each piece of data.
                                    </p>

                                    <div class="p-20">

                                        <canvas id="doughnut" height="260"></canvas>

                                    </div>
                                </div>

                            </div>
                            <!-- end row -->


                            <div class="row m-t-50">

                                <div class="col-sm-12 col-xs-12 col-md-6 m-t-20">
                                    <h4 class="header-title m-t-0">Polar area Chart</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        Polar area charts are similar to pie charts, but each segment has the
                                        same angle - the radius of the segment differs depending on the value.
                                    </p>

                                    <div class="p-20">

                                        <canvas id="polarArea" height="300"> </canvas>

                                    </div>
                                </div>

                                <div class="col-sm-12 col-xs-12 col-md-6 m-t-20">
                                    <h4 class="header-title m-t-0">Radar Chart</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        A radar chart is a way of showing multiple data points and the variation
                                        between them. They are often useful for comparing the points of two or
                                        more different data sets.
                                    </p>

                                    <div class="p-20">

                                        <canvas id="radar" height="300"></canvas>

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

    <!-- Chart JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script>
    <script src="assets/pages/chartjs.init.js"></script>


<?php require 'includes/footer_end.php' ?>