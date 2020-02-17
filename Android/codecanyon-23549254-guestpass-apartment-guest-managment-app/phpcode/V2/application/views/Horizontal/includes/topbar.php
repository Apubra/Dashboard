<!-- Navigation Bar-->

<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.php" class="logo">
                    <i class="zmdi zmdi-group-work icon-c-logo"></i>
                    <span>Uplon</span>
                </a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras navbar-topbar">

                <ul class="list-inline float-right mb-0">

                    <li class="list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="zmdi zmdi-notifications-none noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5><small><span class="label label-danger float-right">7</span>Notification</small></h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1min ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                <p class="notify-details">New user registered.<small class="text-muted">1min ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1min ago</small></p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="zmdi zmdi-email noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg" aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title bg-success">
                                <h5><small><span class="label label-danger float-right">7</span>Messages</small></h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="<?=base_url()?>assets/images/users/avatar-2.jpg" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Robert Taylor</b>
                                    <span>New tasks needs to be done</span>
                                    <small class="text-muted">1min ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="<?=base_url()?>assets/images/users/avatar-3.jpg" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Carlos Crouch</b>
                                    <span>New tasks needs to be done</span>
                                    <small class="text-muted">1min ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="<?=base_url()?>assets/images/users/avatar-4.jpg" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Robert Taylor</b>
                                    <span>New tasks needs to be done</span>
                                    <small class="text-muted">1min ago</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                            <i class="zmdi zmdi-format-subject noti-icon"></i>
                        </a>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="<?=base_url()?>assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-power"></i> <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

            </div> <!-- end menu-extras -->
            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->


    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li>
                        <a href="<?=base_url()?>"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                    </li>
                    <li class="has-submenu">
                        <a href="<?=base_url()?>Dashboard/customers_management"><i class="zmdi zmdi-format-underlined"></i> <span> User </span> </a>
                     <!--   <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="ui-buttons.php">Buttons</a></li>
                                    <li><a href="ui-cards.php">Cards</a></li>
                                    <li><a href="ui-dropdowns.php">Dropdowns</a></li>
                                    <li><a href="ui-checkbox-radio.php">Checkboxs-Radios</a></li>
                                    <li><a href="ui-navs.php">Navs</a></li>
                                    <li><a href="ui-progress.php">Progress</a></li>
                                    <li><a href="ui-modals.php">Modals</a></li>
                                    <li><a href="ui-alerts.php">Alerts</a></li>
                                    <li><a href="ui-bootstrap.php">Bootstrap UI</a></li>
                                    <li><a href="ui-typography.php">Typography</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="ui-notification.php">Notification</a></li>
                                    <li><a href="ui-carousel.php">Carousel</a></li>
                                    <li><a href="components-grid.php">Grid</a></li>
                                    <li><a href="components-range-sliders.php">Range sliders</a></li>
                                    <li><a href="components-sweet-alert.php">Sweet Alerts</a></li>
                                    <li><a href="components-ratings.php">Ratings</a></li>
                                    <li><a href="components-treeview.php">Treeview</a></li>
                                    <li><a href="components-tour.php">Tour</a></li>
                                    <li><a href="widgets-tiles.php">Tile Box</a></li>
                                    <li><a href="widgets-charts.php">Chart Widgets</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-album"></i> <span> Icons </span> </a>
                      <!--  <ul class="submenu">
                            <li><a href="icons-materialdesign.php">Material Design</a></li>
                            <li><a href="icons-ionicons.php">Ion Icons</a></li>
                            <li><a href="icons-fontawesome.php">Font awesome</a></li>
                            <li><a href="icons-themify.php">Themify Icons</a></li>
                            <li><a href="icons-simple-line.php">Simple line Icons</a></li>
                            <li><a href="icons-weather.php">Weather Icons</a></li>
                            <li><a href="icons-pe7.php">PE7 Icons</a></li>
                            <li><a href="icons-typicons.php">Typicons</a></li>
                        </ul> -->
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-collection-text"></i><span> Forms </span> </a>
                    <!--    <ul class="submenu">
                            <li><a href="form-elements.php">General Elements</a></li>
                            <li><a href="form-advanced.php">Advanced Form</a></li>
                            <li><a href="form-validation.php">Form Validation</a></li>
                            <li><a href="form-pickers.php">Form Pickers</a></li>
                            <li><a href="form-wizard.php">Form Wizard</a></li>
                            <li><a href="form-mask.php">Form Masks</a></li>
                            <li><a href="form-uploads.php">Multiple File Upload</a></li>
                            <li><a href="form-xeditable.php">X-editable</a></li>
                        </ul>  -->
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Tables </span> </a>
                    <!--    <ul class="submenu">
                            <li><a href="tables-basic.php">Basic Tables</a></li>
                            <li><a href="tables-datatable.php">Data Table</a></li>
                            <li><a href="tables-responsive.php">Responsive Table</a></li>
                            <li><a href="tables-tablesaw.php">Tablesaw</a></li>
                        </ul>  -->
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-chart"></i><span> Charts </span> </a>
                    <!--    <ul class="submenu">
                            <li><a href="chart-flot.php">Flot Chart</a></li>
                            <li><a href="chart-morris.php">Morris Chart</a></li>
                            <li><a href="chart-chartjs.php">Chartjs</a></li>
                            <li><a href="chart-peity.php">Peity Charts</a></li>
                            <li><a href="chart-chartist.php">Chartist Charts</a></li>
                            <li><a href="chart-c3.php">C3 Charts</a></li>
                            <li><a href="chart-sparkline.php">Sparkline charts</a></li>
                            <li><a href="chart-knob.php">Jquery Knob</a></li>
                        </ul> -->
                    </li>



                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>
</header>
<!-- End Navigation Bar-->


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="wrapper">
    <div class="container">
