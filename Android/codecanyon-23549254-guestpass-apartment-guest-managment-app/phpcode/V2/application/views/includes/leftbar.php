<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
<?php $user_role = $this->session->userdata('user_role');?>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <!--- <li class="text-muted menu-title">Navigation</li> -->
<?php if ($user_role == 1) {?>
                <li class="has_sub">
                    <a href="<?php echo base_url(); ?>dashboard/" class="waves-effect"><span class="label label-pill label-primary float-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
                </li>

                <li class="has_sub">
                    <a href="<?php echo base_url(); ?>Dashboard/customers_management" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> Estate Admin </span></a>
                </li>
                 <li class="has_sub">
                    <a href="<?php echo base_url(); ?>Dashboard/Packages" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> Packages </span></a>
                </li>
            <?php }?>

            <?php if ($user_role == 2) {?>
                <li class="has_sub">
                    <a href="<?php echo base_url(); ?>Estate_dashboard/" class="waves-effect"><span class="label label-pill label-primary float-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
                </li>

                <li class="has_sub">
                    <a href="<?php echo base_url(); ?>Estate_dashboard/customers_management" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> Create User </span></a>
                </li>
                 <li class="has_sub">
                    <a href="<?php echo base_url(); ?>Estate_dashboard/Packages" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> Create Guard </span></a>
                </li>
            <?php }?>

<!--
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-album"></i> <span> Components </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="components-grid.php">Grid</a></li>
                        <li><a href="components-range-sliders.php">Range sliders</a></li>
                        <li><a href="components-sweet-alert.php">Sweet Alerts</a></li>
                        <li><a href="components-ratings.php">Ratings</a></li>
                        <li><a href="components-treeview.php">Treeview</a></li>
                        <li><a href="components-tour.php">Tour</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="calendar.php" class="waves-effect"><i class="zmdi zmdi-calendar"></i><span> Calendar </span> </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-widgets"></i> <span> Widgets </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="widgets-tiles.php">Tile Box</a></li>
                        <li><a href="widgets-charts.php">Chart Widgets</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-fire"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="icons-materialdesign.php">Material Design</a></li>
                        <li><a href="icons-ionicons.php">Ion Icons</a></li>
                        <li><a href="icons-fontawesome.php">Font awesome</a></li>
                        <li><a href="icons-themify.php">Themify Icons</a></li>
                        <li><a href="icons-simple-line.php">Simple line Icons</a></li>
                        <li><a href="icons-weather.php">Weather Icons</a></li>
                        <li><a href="icons-pe7.php">PE7 Icons</a></li>
                        <li><a href="icons-typicons.php">Typicons</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><span class="label label-pill label-warning float-right">8</span><i class="zmdi zmdi-collection-text"></i><span> Forms </span> </a>
                    <ul class="list-unstyled">
                        <li><a href="form-elements.php">General Elements</a></li>
                        <li><a href="form-advanced.php">Advanced Form</a></li>
                        <li><a href="form-validation.php">Form Validation</a></li>
                        <li><a href="form-pickers.php">Form Pickers</a></li>
                        <li><a href="form-wizard.php">Form Wizard</a></li>
                        <li><a href="form-mask.php">Form Masks</a></li>
                        <li><a href="form-uploads.php">Multiple File Upload</a></li>
                        <li><a href="form-xeditable.php">X-editable</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="tables-basic.php">Basic Tables</a></li>
                        <li><a href="tables-datatable.php">Data Table</a></li>
                        <li><a href="tables-responsive.php">Responsive Table</a></li>
                        <li><a href="tables-tablesaw.php">Tablesaw</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-chart"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="chart-flot.php">Flot Chart</a></li>
                        <li><a href="chart-morris.php">Morris Chart</a></li>
                        <li><a href="chart-chartjs.php">Chartjs</a></li>
                        <li><a href="chart-peity.php">Peity Charts</a></li>
                        <li><a href="chart-chartist.php">Chartist Charts</a></li>
                        <li><a href="chart-c3.php">C3 Charts</a></li>
                        <li><a href="chart-sparkline.php">Sparkline charts</a></li>
                        <li><a href="chart-knob.php">Jquery Knob</a></li>
                    </ul>
                </li>

                <li class="text-muted menu-title">More</li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><span class="label label-success label-pill float-right">13</span><i class="zmdi zmdi-collection-item"></i><span> Pages </span></a>
                    <ul class="list-unstyled">
                        <li><a href="pages-starter.php">Starter Page</a></li>
                        <li><a href="pages-login.php">Login</a></li>
                        <li><a href="pages-register.php">Register</a></li>
                        <li><a href="pages-recoverpw.php">Recover Password</a></li>
                        <li><a href="pages-lock-screen.php">Lock Screen</a></li>
                        <li><a href="pages-404.php">Error 404</a></li>
                        <li><a href="pages-500.php">Error 500</a></li>
                        <li><a href="pages-timeline.php">Timeline</a></li>
                        <li><a href="pages-invoice.php">Invoice</a></li>
                        <li><a href="pages-pricing.php">Pricing</a></li>
                        <li><a href="pages-gallery.php">Gallery</a></li>
                        <li><a href="pages-maintenance.php">Maintenance</a></li>
                        <li><a href="pages-comingsoon.php">Coming Soon</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-blur-linear"></i><span>Multi Level </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span>  <span class="menu-arrow"></span>    </a>
                            <ul style="">
                                <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                        </li>
                    </ul>
                </li>
 -->
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
<!-- Left Sidebar End -->
