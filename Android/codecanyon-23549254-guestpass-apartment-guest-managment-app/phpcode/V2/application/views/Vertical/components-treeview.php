<?php require 'includes/header_start.php'; ?>
<!-- Treeview css -->
<link href="assets/plugins/jstree/style.css" rel="stylesheet" type="text/css"/>
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
                        <h4 class="page-title float-left">Tree View</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                            <li class="breadcrumb-item"><a href="#">Components</a></li>
                            <li class="breadcrumb-item active">Tree View</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Basic Tree</h4>

                        <div id="basicTree">
                            <ul>
                                <li>Admin
                                    <ul>
                                        <li data-jstree='{"opened":true}'>Assets
                                            <ul>
                                                <li data-jstree='{"type":"file"}'>Css</li>
                                                <li data-jstree='{"opened":true}'>Plugins
                                                    <ul>
                                                        <li data-jstree='{"selected":true,"type":"file"}'>Plugin one</li>
                                                        <li data-jstree='{"type":"file"}'>Plugin two</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{"opened":true}'>Email Template
                                            <ul>
                                                <li data-jstree='{"type":"file"}'>Email one</li>
                                                <li data-jstree='{"type":"file"}'>Email two</li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{"icon":"zmdi zmdi-view-dashboard"}'>Dashboard</li>
                                        <li data-jstree='{"icon":"zmdi zmdi-format-underlined"}'>Typography</li>
                                        <li data-jstree='{"opened":true}'>User Interface
                                            <ul>
                                                <li data-jstree='{"type":"file"}'>Buttons</li>
                                                <li data-jstree='{"type":"file"}'>Cards</li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{"icon":"zmdi zmdi-collection-text"}'>Forms</li>
                                        <li data-jstree='{"icon":"zmdi zmdi-view-list"}'>Tables</li>
                                    </ul>
                                </li>
                                <li data-jstree='{"type":"file"}'>Frontend</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-md-6 col-xs-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Checkbox Tree</h4>

                        <div id="checkTree">
                            <ul>
                                <li>Admin
                                    <ul>
                                        <li data-jstree='{"opened":true}'>Assets
                                            <ul>
                                                <li data-jstree='{"type":"file"}'>Css</li>
                                                <li data-jstree='{"opened":true}'>Plugins
                                                    <ul>
                                                        <li data-jstree='{"selected":true,"type":"file"}'>Plugin one</li>
                                                        <li data-jstree='{"type":"file"}'>Plugin two</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{"opened":true}'>Email Template
                                            <ul>
                                                <li data-jstree='{"type":"file"}'>Email one</li>
                                                <li data-jstree='{"type":"file"}'>Email two</li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{"icon":"zmdi zmdi-view-dashboard"}'>Dashboard</li>
                                        <li data-jstree='{"icon":"zmdi zmdi-format-underlined"}'>Typography</li>
                                        <li data-jstree='{"opened":true}'>User Interface
                                            <ul>
                                                <li data-jstree='{"type":"file"}'>Buttons</li>
                                                <li data-jstree='{"type":"file"}'>Cards</li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{"icon":"zmdi zmdi-collection-text"}'>Forms</li>
                                        <li data-jstree='{"icon":"zmdi zmdi-view-list"}'>Tables</li>
                                    </ul>
                                </li>
                                <li data-jstree='{"type":"file"}'>Frontend</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Drag &amp; Drop</h4>

                        <div id="dragTree">
                            <ul>
                                <li>Admin
                                    <ul>
                                        <li data-jstree='{"opened":true}'>Assets
                                            <ul>
                                                <li data-jstree='{"type":"file"}'>Css</li>
                                                <li data-jstree='{"opened":true}'>Plugins
                                                    <ul>
                                                        <li data-jstree='{"selected":true,"type":"file"}'>Plugin one</li>
                                                        <li data-jstree='{"type":"file"}'>Plugin two</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{"opened":true}'>Email Template
                                            <ul>
                                                <li data-jstree='{"type":"file"}'>Email one</li>
                                                <li data-jstree='{"type":"file"}'>Email two</li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{"icon":"zmdi zmdi-view-dashboard"}'>Dashboard</li>
                                        <li data-jstree='{"icon":"zmdi zmdi-format-underlined"}'>Typography</li>
                                        <li data-jstree='{"opened":true}'>User Interface
                                            <ul>
                                                <li data-jstree='{"type":"file"}'>Buttons</li>
                                                <li data-jstree='{"type":"file"}'>Cards</li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{"icon":"zmdi zmdi-collection-text"}'>Forms</li>
                                        <li data-jstree='{"icon":"zmdi zmdi-view-list"}'>Tables</li>
                                    </ul>
                                </li>
                                <li data-jstree='{"type":"file"}'>Frontend</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-md-6 col-xs-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Ajax</h4>

                        <div id="ajaxTree"></div>
                    </div>
                </div><!-- end col -->
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
<!-- Tree view js -->
<script src="assets/plugins/jstree/jstree.min.js"></script>
<script src="assets/pages/jquery.tree.js"></script>
<?php require 'includes/footer_end.php' ?>
