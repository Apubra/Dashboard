<?php require 'includes/header_start.php'; ?>
<!-- ION Slider -->
<link href="assets/plugins/ion-rangeslider/ion.rangeSlider.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/ion-rangeslider/ion.rangeSlider.skinModern.css" rel="stylesheet" type="text/css"/>
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
        <h4 class="page-title">Range Sliders</h4>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-12">

        <div class="card-box">

            <h4 class="header-title m-t-0">Modern skin</h4>

            <p class="text-muted m-b-30 font-13">
                Cool, comfortable, responsive and easily customizable range slider
            </p>

            <form class="form-horizontal">
                <div class="form-group row">
                    <label for="range_01" class="col-sm-2 col-xs-12 control-label"><b>Default</b><span class="font-13 display-block text-muted clearfix">Start without params</span></label>
                    <div class="col-sm-10 col-xs-12">
                        <input type="text" id="range_01">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="range_02" class="col-sm-2 col-xs-12 control-label"><b>Min-Max</b><span class=" font-13 display-block text-muted f-s-12 clearfix">Set min value, max value and start point</span></label>
                    <div class="col-sm-10 col-xs-12">
                        <input type="text" id="range_02">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="range_03" class="col-sm-2 col-xs-12 control-label"><b>Prefix</b><span class="font-13 display-block text-muted f-s-12 clearfix">showing grid and adding prefix "$"</span></label>
                    <div class="col-sm-10 col-xs-12">
                        <input type="text" id="range_03">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="range_04" class="col-sm-2 col-xs-12 control-label"><b>Range</b><span class="display-block font-13 text-muted f-s-12 clearfix">Set up range with negative values</span></label>
                    <div class="col-sm-10 col-xs-12">
                        <input type="text" id="range_04">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="range_05" class="col-sm-2 col-xs-12 control-label"><b>Step</b><span class="display-block font-13 text-muted f-s-12 clearfix">Using step 250</span></label>
                    <div class="col-sm-10 col-xs-12">
                        <input type="text" id="range_05">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="range_06" class="col-sm-2 col-xs-12 control-label"><b>Custom Values</b><span class="display-block font-13 text-muted f-s-12 clearfix">Using any strings as values</span></label>
                    <div class="col-sm-10 col-xs-12">
                        <input type="text" id="range_06">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="range_07" class="col-sm-2 col-xs-12 control-label"><b>Prettify Numbers</b><span class="display-block font-13 text-muted f-s-12 clearfix">Prettify enabled. Much better!</span></label>
                    <div class="col-sm-10 col-xs-12">
                        <input type="text" id="range_07">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="range_08" class="col-sm-2 col-xs-12 control-label"><b>Disabled</b><span class="display-block font-13 text-muted f-s-12 clearfix">Lock slider by using disable option</span></label>
                    <div class="col-sm-10 col-xs-12">
                        <input type="text" id="range_08">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="range_09" class="col-sm-2 col-xs-12 control-label"><b>Extra Example</b><span class="display-block font-13 text-muted f-s-12 clearfix">Whant to show that max number is not the biggest one?</span></label>
                    <div class="col-sm-10 col-xs-12">
                        <input type="text" id="range_09">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="range_10" class="col-sm-2 col-xs-12 control-label"><b>Use decorate_both option</b><span class="display-block font-13 text-muted f-s-12 clearfix">Use decorate_both option</span></label>
                    <div class="col-sm-10 col-xs-12">
                        <input type="text" id="range_10">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="range_11" class="col-sm-2 col-xs-12 control-label"><b>Postfixes</b><span class="display-block font-13 text-muted f-s-12 clearfix">Using postfixes</span></label>
                    <div class="col-sm-10 col-xs-12">
                        <input type="text" id="range_11">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="range_12" class="col-sm-2 col-xs-12 control-label"><b>Hide</b><span class="display-block font-13 text-muted f-s-12 clearfix">Or hide any part you wish</span></label>
                    <div class="col-sm-10 col-xs-12">
                        <input type="text" id="range_12">
                    </div>
                </div>
            </form>
        </div>
    </div><!-- end col -->
</div><!-- Row -->




<?php require 'includes/footer_start.php' ?>
<!-- range slider js -->
<script src="assets/plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>
<script src="assets/pages/jquery.ui-sliders.js"></script>
<?php require 'includes/footer_end.php' ?>
