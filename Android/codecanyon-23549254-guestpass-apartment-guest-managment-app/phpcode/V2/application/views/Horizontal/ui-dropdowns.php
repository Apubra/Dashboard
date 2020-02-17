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
            <h4 class="page-title">Dropdowns</h4>
        </div>
    </div>
    <!-- end row -->


    <!-- Row start -->
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">

                <h4 class="header-title m-t-0">Dropdowns Examples</h4>
                <p class="text-muted m-b-10 font-13">
                    Dropdowns are toggleable, contextual overlays for displaying lists of links and more. They’re made interactive with the included Bootstrap dropdown JavaScript plugin.
                </p>


                <div class="row">
                    <div class="col-sm-6 col-xs-12 col-md-6 col-lg-3 m-t-30">
                        <h6>Button elements</h6>

                        <p class="text-muted m-b-20 font-13">
                            You can optionally use <code>&lt;button&gt;</code> elements in your dropdowns instead of <code>&lt;a&gt;</code>s.
                        </p>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle pull-left" type="button"
                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                Dropdown
                            </button>
                            <div class="dropdown-menu dropdown-example" aria-labelledby="dropdownMenu1">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6 col-xs-12 col-md-6 col-lg-3 m-t-30">
                        <h6>Menu headers</h6>

                        <p class="text-muted m-b-20 font-13">
                            Add a header to label sections of actions in any dropdown menu.
                        </p>

                        <div class="dropdown-menu dropdown-example">
                            <h6 class="dropdown-header">Dropdown header</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                        </div>
                    </div>


                    <div class="col-sm-6 col-xs-12 col-md-6 col-lg-3 m-t-30">
                        <h6>Menu dividers</h6>

                        <p class="text-muted m-b-20 font-13">
                            Separate groups of related menu items with a divider.
                        </p>

                        <div class="dropdown-menu dropdown-example" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>


                    <div class="col-sm-6 col-xs-12 col-md-6 col-lg-3 m-t-30">
                        <h6>Disabled menu items</h6>

                        <p class="text-muted m-b-20 font-13">
                            Add <code>.disabled</code> to items in the dropdown to <strong>style them as disabled</strong>.
                        </p>

                        <div class="dropdown-menu dropdown-example" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#">Regular link</a>
                            <a class="dropdown-item disabled" href="#">Disabled link</a>
                            <a class="dropdown-item" href="#">Another link</a>
                        </div>
                    </div>

                </div>
                <!-- end row -->

                <div class="row m-t-20">
                    <div class="col-md-6">
                        <h6 class="m-t-20 m-b-20">Examples</h6>

                        <div class="">
                            <div class="btn-group">
                                <button type="button" class="btn btn-purple dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Dropdown <span class="caret"></span></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Dropdown <span class="caret"></span></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="btn-group dropdown">
                                <button type="button" class="btn btn-success waves-effect waves-light">Dropddown</button>
                                <button type="button" class="btn btn-success dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="btn-group dropdown">
                                <button type="button" class="btn btn-primary waves-effect waves-light">Dropddown</button>
                                <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-md-6">
                        <h6 class="m-t-20 m-b-20">Dropup</h6>

                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Dropdup <span class="caret"></span></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-warning dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Dropdup <span class="caret"></span></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-success dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Dropdup <span class="caret"></span></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-pink dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Dropdup <span class="caret"></span></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>

                    </div> <!-- end col -->

                </div>
                <!-- end row -->

                <div style="height: 100px;"></div>


            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->



<?php require 'includes/footer_start.php' ?>

<?php require 'includes/footer_end.php' ?>