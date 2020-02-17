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
            <h4 class="page-title">Sparkline Charts</h4>
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




<?php require 'includes/footer_start.php' ?>

    <!-- Sparkline charts js -->
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/pages/jquery.charts-sparkline.js"></script>

<?php require 'includes/footer_end.php' ?>