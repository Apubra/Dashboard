<?php require 'includes/header_start.php'; ?>

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
            <h4 class="page-title">Flot Chart</h4>
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-6">
                        <h4 class="header-title m-t-0">Multiple Statistics</h4>
                        <p class="text-muted font-13 m-b-30">
                            Stacked chart not only shows the trends over time, you can also see the cumulative
                            sum of all data.Your awesome text goes here.
                        </p>

                        <div class="p-20">
                            <div id="website-stats" style="height: 320px;" class="flot-chart"></div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 col-md-6">
                        <h4 class="header-title m-t-0">Realtime Statistics</h4>
                        <p class="text-muted font-13 m-b-30">
                            You can update a chart periodically to get a real-time effect by using a timer
                            to insert the new data in the plot and redraw it.
                        </p>

                        <div class="p-20">
                            <div id="flotRealTime" style="height: 320px;" class="flot-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row m-t-50">
                    <div class="col-sm-12 col-xs-12 col-md-6 m-t-20">
                        <h4 class="header-title m-t-0">Line Chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            The line chart is most often used chart, aslo the easiest to make, it shows trends over time,
                            visualizes data and information, so users can know how exactly these numbers are relate to
                            each other in one glance.
                        </p>

                        <div class="p-20">
                            <div id="website-stats1" style="height: 320px;" class="flot-chart"></div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 col-md-6 m-t-20">
                        <h4 class="header-title m-t-0">Donut Pie</h4>
                        <p class="text-muted font-13 m-b-30">
                            Pie chart is used to see the proprotion of each data groups, making Flot pie chart is pretty simple,
                            in order to make pie chart you have to incldue jquery.flot.pie.js plugin.
                        </p>

                        <div class="p-20">
                            <div id="donut-chart">
                                <div id="donut-chart-container" class="flot-chart" style="height: 260px;">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row m-t-50">

                    <div class="col-sm-12 col-xs-12 col-md-6 m-t-20">
                        <h4 class="header-title m-t-0">Pie Chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            Pie chart is used to see the proprotion of each data groups, making Flot pie chart is pretty simple,
                            in order to make pie chart you have to incldue jquery.flot.pie.js plugin.
                        </p>

                        <div class="p-20">
                            <div id="pie-chart">
                                <div id="pie-chart-container" class="flot-chart" style="height: 260px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 col-md-6 m-t-20">
                        <h4 class="header-title m-t-0">Stacked Bar chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            With the stack plugin, you can have Flot stack the series. This is useful if you wish to display
                            both a total and the constituents it is made of.
                        </p>

                        <div class="p-20">
                            <div id="ordered-bars-chart" style="height: 320px;"></div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

                <div class="row m-t-50">
                    <div class="col-12 m-t-20">
                        <h4 class="header-title m-t-0 m-b-30">Combine Chart</h4>

                        <div id="combine-chart">
                            <div id="combine-chart-container" class="flot-chart" style="height: 320px;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
        </div><!-- end col-->

    </div>
    <!-- end row -->



<?php require 'includes/footer_start.php' ?>
    <!-- put any extra js here -->
    <!-- Flot chart js -->
    <script src="assets/plugins/flot-chart/jquery.flot.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.pie.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.axislabels.js"></script>

    <!-- flot init -->
    <script src="assets/pages/jquery.flot.init.js"></script>
<?php require 'includes/footer_end.php' ?>