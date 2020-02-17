<?php require 'includes/header_start.php'; ?>
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
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>

            </div>
            <h4 class="page-title">Chartist charts</h4>
        </div>
    </div>



    <div class="row">
        <div class="col-xs-12">
            <div class="card-box">

                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-6">
                        <h4 class="header-title m-t-0">Advanced Smil Animations</h4>
                        <p class="text-muted font-13 m-b-30">
                            Chartist provides a simple API to animate the elements on the Chart using
                            SMIL. Usually you can achieve most animation with CSS3 animations but
                            in some cases you'd like to animate SVG properties that are not available in CSS.
                        </p>

                        <div class="p-20">
                            <div id="smil-animations" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 col-md-6">
                        <h4 class="header-title m-t-0">Simple line chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            An example of a simple line chart with three series. You can edit this example in realtime.
                        </p>

                        <div class="p-20">
                            <div id="simple-line-chart" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row m-t-50">
                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Line Scatter Diagram</h4>
                        <p class="text-muted font-13 m-b-30">
                            This advanced example uses a line chart to draw a scatter diagram. The
                            data object is created with a functional style random mechanism.
                        </p>

                        <div class="p-20">
                            <div id="scatter-diagram" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Line chart with tooltips</h4>
                        <p class="text-muted font-13 m-b-30">
                            An example of a simple line chart with two series. You can edit this
                            example in realtime.
                        </p>

                        <div class="p-20">
                            <div id="line-chart-tooltips" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row m-t-50">

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Line chart with area</h4>
                        <p class="text-muted font-13 m-b-30">
                            This chart uses the showArea option to draw line, dots but also an area
                            shape. Use the low option to specify a fixed lower bound that will make
                            the area expand.
                        </p>

                        <div class="p-20">
                            <div id="chart-with-area" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Bi-polar Line chart with area only</h4>
                        <p class="text-muted font-13 m-b-30">
                            You can also only draw the area shapes of the line chart. Area shapes
                            will always be constructed around their areaBase (that can be configured
                            in the options) which also allows you to draw nice bi-polar areas.
                        </p>

                        <div class="p-20">
                            <div id="bi-polar-line" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

                <div class="row m-t-50">

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">SVG Path animation</h4>
                        <p class="text-muted font-13 m-b-30">
                            Path animation is made easy with the SVG Path API. The API allows you to
                            modify complex SVG paths and transform them for different animation
                            morphing states.
                        </p>

                        <div class="p-20">
                            <div id="svg-animation" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Line Interpolation / Smoothing</h4>
                        <p class="text-muted font-13 m-b-30">
                            By default Chartist uses a cardinal spline algorithm to smooth the lines.
                            However, like all other things in Chartist, this can be customized easily!
                        </p>

                        <div class="p-20">
                            <div id="line-smoothing" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

                <div class="row m-t-50">

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Different configuration for different series</h4>
                        <p class="text-muted font-13 m-b-30">
                            By naming your series using the series object notation with a name property,
                            you can enable the individual configuration of series specific settings.
                        </p>

                        <div class="p-20">
                            <div id="different-series" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">SVG Animations chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            This advanced example uses a line chart to draw a scatter diagram.
                            The data object is created with a functional style random mechanism.
                        </p>

                        <div class="p-20">
                            <div id="svg-dot-animation" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row m-t-50">

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Bi-polar bar chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            A bi-polar bar chart with a range limit set with low and high. There is
                            also an interpolation function used to skip every odd grid line / label.
                        </p>

                        <div class="p-20">
                            <div id="bi-polar-bar" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Overlapping bars on mobile</h4>
                        <p class="text-muted font-13 m-b-30">
                            This example makes use of label interpolation and the seriesBarDistance
                            property that allows you to make bars overlap over each other.
                        </p>

                        <div class="p-20">
                            <div id="overlapping-bars" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row m-t-50">

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Multi-line labels</h4>
                        <p class="text-muted font-13 m-b-30">
                            Chartist will figure out if your browser supports foreignObject and it
                            will use them to create labels that are based on regular HTML text elements.
                        </p>

                        <div class="p-20">
                            <div id="multi-line-chart" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Stacked bar chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            You can also set your bar chart to stack the series bars on top of each
                            other easily by using the stackBars property in your configuration.
                        </p>

                        <div class="p-20">
                            <div id="stacked-bar-chart" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row m-t-50">

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Horizontal bar chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            Guess what! Creating horizontal bar charts is as simple as it can get.
                            There's no new chart type you need to learn, just passing an additional option is enough.
                        </p>

                        <div class="p-20">
                            <div id="horizontal-bar-chart" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Extreme responsive configuration</h4>
                        <p class="text-muted font-13 m-b-30">
                            As all settings of a chart can be customized with the responsive configuration
                            override mechanism of Chartist, you can create a chart that adopts to every media condition!
                        </p>

                        <div class="p-20">
                            <div id="extreme-chart" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

                <div class="row m-t-50">

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Distributed series</h4>
                        <p class="text-muted font-13 m-b-30">
                            Sometime it's desired to have bar charts that show one bar per series
                            distributed along the x-axis. If this option is enabled, you need to
                            make sure that you pass a single series array to Chartist that contains the series values.
                        </p>

                        <div class="p-20">
                            <div id="distributed-series" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Label placement</h4>
                        <p class="text-muted font-13 m-b-30">
                            You can change the position of the labels on line and bar charts easily
                            by using the position option inside of the axis configuration.
                        </p>

                        <div class="p-20">
                            <div id="label-placement-chart" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row m-t-50">

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Animating a Donut with Svg.animate</h4>
                        <p class="text-muted font-13 m-b-30">
                            Although it'd be also possible to achieve this animation with CSS, with
                            some minor suboptimal things, here's an example of how to animate donut
                            charts using Chartist.Svg.animate and SMIL.
                        </p>

                        <div class="p-20">
                            <div id="animating-donut" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Simple pie chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            A very simple pie chart with label interpolation to show percentage instead
                            of the actual data series value.
                        </p>

                        <div class="p-20">
                            <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"></div>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row m-t-50">

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Pie chart with custom labels</h4>
                        <p class="text-muted font-13 m-b-30">
                            This pie chart is configured with custom labels specified in the data object.
                            On desktop we use the labelOffset property to offset the labels from the center.
                        </p>

                        <div class="p-20">
                            <div id="pie-chart" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 m-t-20">
                        <h4 class="header-title m-t-0">Gauge chart</h4>
                        <p class="text-muted font-13 m-b-30">
                            This pie chart uses donut, startAngle and total to draw a gauge chart.
                        </p>

                        <div class="p-20">
                            <div id="gauge-chart" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div>
        </div><!-- end col-->

    </div>
    <!-- end row -->



<?php require 'includes/footer_start.php' ?>

    <!--Chartist Chart-->
    <script src="assets/plugins/chartist/dist/chartist.min.js"></script>
    <script src="assets/plugins/chartist/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/pages/jquery.chartist.init.js"></script>


<?php require 'includes/footer_end.php' ?>