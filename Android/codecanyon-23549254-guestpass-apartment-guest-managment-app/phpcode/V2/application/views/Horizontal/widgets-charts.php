<?php require 'includes/header_start.php'; ?>
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <!--Chartist Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/chartist/dist/chartist.min.css">
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
            <h4 class="page-title">Charts Widgets</h4>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-md-12 col-sm-6 col-xs-12 col-xl-6">
            <div class="card-box">

                <h4 class="header-title m-t-0">Stacked Bar Chart</h4>
                <p class="text-muted font-13 m-b-30">
                    Create stacked bar charts using Morris.Bar(options), where options is an object
                    containing the configuration options.
                </p>

                <div class="row text-center m-t-30">
                    <div class="col-4">
                        <h3 data-plugin="counterup" class="text-success">1,507</h3>
                        <p class="text-muted">Total Sales</p>
                    </div>
                    <div class="col-4">
                        <h3 data-plugin="counterup" class="text-danger">916</h3>
                        <p class="text-muted">Open Compaign</p>
                    </div>
                    <div class="col-4">
                        <h3 data-plugin="counterup" class="text-warning">22</h3>
                        <p class="text-muted">Daily Sales</p>
                    </div>
                </div>

                <div id="morris-bar-stacked" style="height: 300px;"></div>

            </div>
        </div><!-- end col-->

        <div class="col-md-12 col-sm-6 col-xs-12 col-xl-6">
            <div class="card-box">

                <h4 class="header-title m-t-0">Area Chart</h4>
                <p class="text-muted font-13 m-b-30">
                    Create an area chart using Morris.Area(options). Area charts take all the
                    same options as line charts.
                </p>

                <div class="row text-center m-t-30">
                    <div class="col-4">
                        <h3 data-plugin="counterup" class="text-danger">2,532</h3>
                        <p class="text-muted">Total Sales</p>
                    </div>
                    <div class="col-4">
                        <h3 data-plugin="counterup" class="text-warning">895</h3>
                        <p class="text-muted">Open Compaign</p>
                    </div>
                    <div class="col-4">
                        <h3 data-plugin="counterup" class="text-success">25</h3>
                        <p class="text-muted">Daily Sales</p>
                    </div>
                </div>

                <div id="morris-area-example" style="height: 300px;"></div>

            </div>
        </div><!-- end col-->

    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-md-12 col-sm-6 col-xs-12 col-xl-6">
            <div class="card-box">

                <h4 class="header-title m-t-0">Total Revenue</h4>
                <p class="text-muted font-13 m-b-30">
                    Here's an example of how to animate donut charts using Chartist.Svg.animate and SMIL.
                </p>

                <div class="text-center m-b-30">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-custom">Today</button>
                        <button type="button" class="btn btn-custom">This Week</button>
                        <button type="button" class="btn btn-custom">Last Week</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div id="animating-donut" class="ct-chart ct-golden-section"></div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <ul class="list-unstyled chart-detail-list m-t-30">
                            <li class="m-b-10">
                                <h6 style="color: #3db9dc;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series A</h6>
                            </li>
                            <li class="m-b-10">
                                <h6 style="color: #1bb99a;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series B</h6>
                            </li>
                            <li class="m-b-10">
                                <h6 style="color: #f1b53d;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series C</h6>
                            </li>
                            <li class="m-b-10">
                                <h6 style="color: #ff7aa3;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series D</h6>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div><!-- end col-->

        <div class="col-md-12 col-sm-6 col-xs-12 col-xl-6">
            <div class="card-box">

                <h4 class="header-title m-t-0">Sales Analytics</h4>
                <p class="text-muted font-13 m-b-30">
                    A very simple pie chart with label interpolation to show percentage instead of
                    the actual data series value.
                </p>

                <div class="text-center m-b-30">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-custom">Today</button>
                        <button type="button" class="btn btn-custom">This Week</button>
                        <button type="button" class="btn btn-custom">Last Week</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"></div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <ul class="list-unstyled chart-detail-list m-t-30">
                            <li class="m-b-10">
                                <h6 style="color: #3db9dc;"><i class="zmdi zmdi-circle-o m-r-5"></i>Desktops</h6>
                            </li>
                            <li class="m-b-10">
                                <h6 style="color: #1bb99a;"><i class="zmdi zmdi-circle-o m-r-5"></i>Tablets</h6>
                            </li>
                            <li class="m-b-10">
                                <h6 style="color: #f1b53d;"><i class="zmdi zmdi-circle-o m-r-5"></i>Mobiles</h6>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div><!-- end col-->


    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-lg-4">
            <div class="card-box">
                <h4 class="text-dark header-title m-t-0 m-b-30">Total Revenue</h4>

                <div class="widget-chart text-center">
                    <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#5d9cec" value="55" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>

                    <p class="text-muted font-13 m-t-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Nunc nec dui vitae urna cursus lacinia. In venenatis eget justo in dictum. Vestibulum auctor raesent quisnm.</p>

                    <div class="row text-center m-t-30">
                        <div class="col-4">
                            <h3 data-plugin="counterup" class="text-muted">1,507</h3>
                            <p class="text-muted">Total Sales</p>
                        </div>
                        <div class="col-4">
                            <h3 data-plugin="counterup" class="text-muted">916</h3>
                            <p class="text-muted">Open Compaign</p>
                        </div>
                        <div class="col-4">
                            <h3 data-plugin="counterup" class="text-muted">22</h3>
                            <p class="text-muted">Daily Sales</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="card-box">
                <h4 class="text-dark header-title m-t-0 m-b-30">Total Revenue</h4>

                <div class="widget-chart text-center">
                    <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#fb6d9d" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>

                    <p class="text-muted font-13 m-t-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Nunc nec dui vitae urna cursus lacinia. In venenatis eget justo in dictum. Vestibulum auctor raesent quisnm.</p>

                    <div class="row text-center m-t-30">
                        <div class="col-4">
                            <h3 data-plugin="counterup" class="text-muted">1,507</h3>
                            <p class="text-muted">Total Sales</p>
                        </div>
                        <div class="col-4">
                            <h3 data-plugin="counterup" class="text-muted">916</h3>
                            <p class="text-muted">Open Compaign</p>
                        </div>
                        <div class="col-4">
                            <h3 data-plugin="counterup" class="text-muted">22</h3>
                            <p class="text-muted">Daily Sales</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="card-box">
                <h4 class="text-dark header-title m-t-0 m-b-30">Total Revenue</h4>

                <div class="widget-chart text-center">
                    <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#34d3eb" value="60" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>

                    <p class="text-muted font-13 m-t-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Nunc nec dui vitae urna cursus lacinia. In venenatis eget justo in dictum. Vestibulum auctor raesent quisnm.</p>

                    <div class="row text-center m-t-30">
                        <div class="col-4">
                            <h3 data-plugin="counterup" class="text-muted">1,507</h3>
                            <p class="text-muted">Total Sales</p>
                        </div>
                        <div class="col-4">
                            <h3 data-plugin="counterup" class="text-muted">916</h3>
                            <p class="text-muted">Open Compaign</p>
                        </div>
                        <div class="col-4">
                            <h3 data-plugin="counterup" class="text-muted">22</h3>
                            <p class="text-muted">Daily Sales</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <div class="row">
                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <h4 class="header-title m-t-0">Bi-polar bar chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            A bi-polar bar chart with a range limit set with low and high. There is
                            also an interpolation function used to skip every odd grid line / label.
                        </p>

                        <div class="text-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary">Today</button>
                                <button type="button" class="btn btn-secondary">This Week</button>
                                <button type="button" class="btn btn-secondary">Last Week</button>
                            </div>
                        </div>

                        <div class="p-20">
                            <div id="bi-polar-bar" class="ct-chart ct-golden-section"></div>
                        </div>

                    </div>

                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <h4 class="header-title m-t-0">Line chart with area</h4>
                        <p class="text-muted font-13 m-b-30">
                            This chart uses the showArea option to draw line, dots but also an area
                            shape. Use the low option to specify a fixed lower bound that will make
                            the area expand.
                        </p>

                        <div class="text-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary">Today</button>
                                <button type="button" class="btn btn-secondary">This Week</button>
                                <button type="button" class="btn btn-secondary">Last Week</button>
                            </div>
                        </div>

                        <div class="p-20">
                            <div id="chart-with-area" class="ct-chart ct-golden-section"></div>
                        </div>

                    </div>
                </div><!-- end row -->
            </div>
        </div>
    </div>
    <!-- end row -->




<?php require 'includes/footer_start.php' ?>

    <!--Morris Chart-->
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/raphael/raphael-min.js"></script>

    <!--Chartist Chart-->
    <script src="assets/plugins/chartist/dist/chartist.min.js"></script>
    <script src="assets/plugins/chartist/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- Charts Widget init -->
    <script src="assets/pages/jquery.chart-widgets.init.js"></script>
<?php require 'includes/footer_end.php' ?>