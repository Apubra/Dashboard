<?php require 'includes/header_start.php'; ?>

    <!-- Plugins css -->
    <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="assets/plugins/mjolnic-bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/plugins/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
            <h4 class="page-title">Form Pickers</h4>
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-6">
                        <h4 class="header-title m-t-0">Timepicker</h4>
                        <p class="text-muted font-13 m-b-10">
                            Easily select a time for a text input using your mouse or keyboards arrow keys.
                        </p>

                        <div class="p-20">
                            <div class="form-group">
                                <label>Default Time Picker</label>
                                <div class="input-group">
                                    <input id="timepicker" type="text" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                                    </div>
                                </div><!-- input-group -->
                            </div>

                            <div class="form-group">
                                <label>24 Hour Mode Time Picker</label>
                                <div class="input-group">
                                    <input id="timepicker2" type="text" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                                    </div>
                                </div><!-- input-group -->
                            </div>

                            <div class="form-group">
                                <label>Specify a step for the minute field</label>
                                <div class="input-group">
                                    <input id="timepicker3" type="text" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                                    </div>
                                </div><!-- input-group -->
                            </div>

                        </div>

                    </div>

                    <div class="col-sm-12 col-xs-12 col-md-6">
                        <h4 class="header-title m-t-0">Colorpicker</h4>
                        <p class="text-muted font-13 m-b-10">
                            Add color picker to field or to any other element.
                        </p>

                        <div class="p-20">
                            <form action="#">
                                <div class="form-group">
                                    <label>Default</label>
                                    <input type="text" class="colorpicker-default form-control" value="#8fff00">
                                </div>
                                <div class="form-group">
                                    <label>RGBA</label>
                                    <input type="text" class="colorpicker-rgba form-control" value="rgb(0,194,255,0.78)" data-color-format="rgba">
                                </div>
                                <div class="form-group m-b-0">
                                    <label>As Component</label>
                                    <div data-color-format="rgb" data-color="rgb(255, 146, 180)" class="colorpicker-default input-group">
                                        <input type="text" readonly="readonly" value="" class="form-control">
                                        <span class="input-group-append add-on">
                                            <button class="btn btn-white" type="button">
                                                <i style="background-color: rgb(124, 66, 84);margin-top: 2px;"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row m-t-50">
                    <div class="col-sm-12 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Date Picker</h4>
                        <p class="text-muted font-13 m-b-10">
                            The datepicker is tied to a standard form input field. Click on the input to open
                            an interactive calendar in a small overlay. Click elsewhere on the page or hit the Esc
                            key to close. If a date is chosen, feedback is shown as the input's value.
                        </p>

                        <div class="row">
                            <div class="col-lg-8">

                                <div class="p-20">
                                    <form action="#">
                                        <div class="form-group">
                                            <label>Default Functionality</label>
                                            <div>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="icon-calender"></i></span>
                                                    </div>
                                                </div><!-- input-group -->
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Auto Close</label>
                                            <div>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="icon-calender"></i></span>
                                                    </div>
                                                </div><!-- input-group -->
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Multiple Date</label>
                                            <div>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple-date">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="icon-calender"></i></span>
                                                    </div>
                                                </div><!-- input-group -->
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Date Range</label>
                                            <div>
                                                <div class="input-daterange input-group" id="date-range">
                                                    <input type="text" class="form-control" name="start" />
                                                    <input type="text" class="form-control" name="end" />
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-4">

                                <div class="p-20">

                                    <label>Display Inline</label>
                                    <div class="input-group">
                                        <div id="datepicker-inline"></div>
                                    </div><!-- input-group -->

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- end row -->


                <div class="row m-t-50">

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Date Range Picker</h4>
                        <p class="text-muted font-13 m-b-10">
                            A JavaScript component for choosing date ranges.
                            Designed to work with the Bootstrap CSS framework.
                        </p>

                        <div class="p-20">
                            <form>
                                <div class="form-group">
                                    <label>With all options</label>
                                    <div id="reportrange" class="pull-right form-control">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="form-group m-t-50">
                                    <label>Date Range Pick</label>
                                    <div>
                                        <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Date Range With Time</label>
                                    <div>
                                        <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM"/>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <label>Limit Selectable Dates</label>
                                    <div>
                                        <input class="form-control input-limit-datepicker" type="text" name="daterange" value="06/01/2015 - 06/07/2015"/>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Clock Picker</h4>
                        <p class="text-muted font-13 m-b-10">
                            A clock-style timepicker for Bootstrap (or jQuery).Your awesome text goes here.
                        </p>

                        <div class="p-20">
                            <label>Default Clock Picker</label>
                            <div class="input-group clockpicker m-b-20">
                                <input type="text" class="form-control" value="09:30">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                                </div>
                            </div>

                            <label>Auto close</label>
                            <div class="input-group clockpicker m-b-20" data-placement="top" data-align="top" data-autoclose="true">
                                <input type="text" class="form-control" value="13:14">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                                </div>
                            </div>

                            <label>Now time</label>
                            <div class="input-group m-b-20">
                                <input class="form-control" id="single-input" value="" placeholder="Now">
                                <span class="input-group-append">
                                    <button type="button" id="check-minutes" class="btn waves-effect waves-light btn-primary">Check the minutes</button>
                                </span>
                            </div>

                            <label>Place at left, align the arrow to top </label>
                            <div class="input-group clockpicker" data-placement="top" data-align="top">
                                <input type="text" class="form-control" value="13:14">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                                </div>
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

    <script src="assets/plugins/moment/moment.js"></script>
    <script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="assets/plugins/mjolnic-bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/plugins/clockpicker/bootstrap-clockpicker.js"></script>
    <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="assets/pages/jquery.form-pickers.init.js"></script>

<?php require 'includes/footer_end.php' ?>