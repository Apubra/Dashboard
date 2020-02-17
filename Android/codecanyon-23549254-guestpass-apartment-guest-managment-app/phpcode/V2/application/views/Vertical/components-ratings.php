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
                            <h4 class="page-title float-left">Rating</h4>

                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                                <li class="breadcrumb-item"><a href="#">Components</a></li>
                                <li class="breadcrumb-item active">Rating</li>
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
                                <div class="col-lg-4 col-xs-12">
                                    <h4 class="header-title m-t-0">Default</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You need just to have a <code>div</code> to build the Raty.
                                    </p>
                                    <div id="default"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-sm-40">
                                    <h4 class="header-title m-t-0">Score</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Used when we want to start with a saved rating.
                                    </p>
                                    <div id="score"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-sm-40">
                                    <h4 class="header-title m-t-0">Score callback</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        If you need to start you score depending of a dynamic value, you can to
                                        use callback for it.
                                        You can pass any value for it, not necessarily a data- value. You can
                                        use a field value for example.
                                    </p>
                                    <div id="score-callback" data-score="1"></div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row m-t-50">
                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Score Name</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Changes the name of the hidden score field.
                                    </p>
                                    <div id="scoreName"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Number</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Changes the number of stars.
                                    </p>
                                    <div id="number"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Number callback</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You can receive the number of stars dynamic using callback to set it.
                                    </p>
                                    <div id="number-callback" data-number="3"></div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row m-t-50">
                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Number Max</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Change the maximum of start that can be created.
                                    </p>
                                    <div id="numberMax"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Read Only</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You can prevent users to vote. It can be applied with or without score
                                        and all stars will receives the hint corresponding of the selected star.
                                        Stop the mouse over the stars to see:
                                    </p>
                                    <div id="readOnly"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Read Only callback</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You can decide if the rating will be readOnly dynamically returning true of false on callback.
                                    </p>
                                    <div id="readOnly-callback" data-number="3"></div>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row m-t-50">
                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">No Rated Message</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        If readOnly is enabled and there is no score, the hint "Not rated yet!"
                                        will be shown for all stars. But you can change it.
                                        Stop the mouse over the star to see:
                                    </p>
                                    <div id="noRatedMsg"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Half Show</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You can represent a float score as a half star icon.
                                    </p>
                                    <div id="halfShow-true"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Half Show <small>Disabled</small></h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You can decide if the rating will be readOnly dynamically returning true of false on callback.
                                    </p>
                                    <div id="halfShow-false"></div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row m-t-50">
                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Round</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        We changed the default interval [x.25 .. x.76], now x.26 will round down instead of to be a half star.
                                        Remember that the full attribute is used only when halfShow is disabled.
                                    </p>
                                    <div id="round"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Half</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Enables the half star mouseover to be possible vote with half values.
                                    </p>
                                    <div id="half"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Star Half</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Changes the name of the half star.
                                    </p>
                                    <div id="starHalf"></div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row m-t-50">
                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Click</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Callback to handle the score and the click event on click action.
                                        You can mension the Raty element (DOM) itself using this.
                                    </p>
                                    <div id="click"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Hints</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Changes the hint for each star by it position on array.
                                    </p>
                                    <div id="hints"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Star Off and Star On</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Changes the name of the star on and star off.
                                    </p>
                                    <div id="star-off-and-star-on"></div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row m-t-50">
                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Cancel</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Add a cancel button on the left side of the stars to cacel the score.
                                        Inside the click callback the argument code receives the value null when we click on cancel button.
                                    </p>
                                    <div id="cancel"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Cancel Hint</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Like the stars, the cancel button have a hint too, and you can change it.
                                    </p>
                                    <div id="cancelHint"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Cancel Place</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Changes the cancel button to the right side.
                                    </p>
                                    <div id="cancelPlace"></div>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row m-t-50">
                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Cancel off and Cancel On</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Changes the on and off icon of the cancel button.
                                    </p>
                                    <div id="cancel-off-and-cancel-on"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Icon Range</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        It's an array of objects where each one represents a custom icon.
                                        The range attribute is until wich position the icon will be displayed.
                                    </p>
                                    <div id="iconRange"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Size</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        The size of the icons are controlled by the css property font-size as
                                        all icons are text. The plugin tries to calculate the font size
                                        automatically, but should that fail, you can provide a size (in pixels)
                                        with the size option.
                                    </p>
                                    <div id="size-md" class="rating-md"></div>

                                    <div id="size-lg" class="rating-lg m-t-20"></div>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row m-t-50">
                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Target</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Some place to display the hints or the cancelHint.<b id="target-div-hint"></b>
                                    </p>
                                    <div id="target-div"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Target Type</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You have the option hint or score to chosse. <b id="targetType-hint" class="label label-success"></b>
                                    </p>
                                    <div id="targetType"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Target Format</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You can choose a template to be merged with your hints and displayed on target.
                                    </p>

                                    <div class="text-xs-center">
                                        <div id="targetFormat" class="rating-md"></div>

                                        <input type="text" class="form-control" id="targetFormat-hint" />
                                    </div>

                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row m-t-50">
                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Mouseover</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You can handle the action on mouseover.
                                    </p>
                                    <div id="mouseover"></div>
                                </div>

                                <div class="col-lg-4 col-xs-12 m-t-20">
                                    <h4 class="header-title m-t-0">Mouseout</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You can handle the action on mouseout.
                                    </p>
                                    <div id="mouseout"></div>
                                </div>
                            </div>
                            <!-- end row -->

                        </div>
                    </div>
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

<!--Rating js-->
<script src="assets/plugins/raty-fa/jquery.raty-fa.js"></script>


<!-- Page specific js -->
<script src="assets/pages/jquery.rating.js"></script>


<?php require 'includes/footer_end.php' ?>