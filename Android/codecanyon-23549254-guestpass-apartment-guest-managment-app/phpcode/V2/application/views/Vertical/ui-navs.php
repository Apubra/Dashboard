<?php require 'includes/header_start.php'; ?>
<!-- put extra css here -->
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
                        <h4 class="page-title float-left">Navs</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                            <li class="breadcrumb-item"><a href="#">UI Kit</a></li>
                            <li class="breadcrumb-item active">Navs</li>
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
                            <div class="col-md-6 col-xs-12">
                                <h4 class="header-title m-t-0">Base nav</h4>
                                <p class="text-muted m-b-20 font-13">
                                    Roll your own navigation style by extending the base .nav component. All Bootstrap’s nav components are built on top of this by specifying additional styles.
                                </p>

                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Another link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Disabled</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-6 col-xs-12 m-t-sm-40">
                                <h4 class="header-title m-t-0">Inline nav</h4>
                                <p class="text-muted m-b-20 font-13">
                                    Easily space out nav links in a horizontal band with <code>.nav-inline</code>. Longer series of links will wrap to a new line.
                                </p>

                                <nav class="nav nav-inline">
                                    <a class="nav-link active" href="#">Active</a>
                                    <a class="nav-link" href="#">Link</a>
                                    <a class="nav-link" href="#">Another link</a>
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </nav>

                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row m-t-50">
                            <div class="col-md-6 col-xs-12 m-t-20">
                                <h4 class="header-title m-t-0">Stacked pills</h4>
                                <p class="text-muted m-b-20 font-13">
                                    Just add <code class="highlighter-rouge">.nav-stacked</code> to the <code>.nav.nav-pills</code>.
                                </p>

                                <ul class="nav nav-pills nav-stacked">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Another link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Disabled</a>
                                    </li>
                                </ul>

                            </div>

                            <div class="col-md-6 col-xs-12 m-t-sm-40 m-t-20">
                                <h4 class="header-title m-t-0">Tabs with dropdowns</h4>
                                <p class="text-muted m-b-20 font-13">
                                    Add dropdown menus with a little extra HTML and the dropdowns JavaScript plugin.
                                </p>

                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                           role="button" aria-haspopup="true"
                                           aria-expanded="false">Dropdown</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Another link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Disabled</a>
                                    </li>
                                </ul>

                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row m-t-50">
                            <div class="col-md-6 col-xs-12 m-t-20">
                                <h4 class="header-title m-t-0">Default Tabs</h4>
                                <p class="text-muted m-b-20 font-13">
                                    Takes the basic nav from above and adds the .nav-tabs class to generate a tabbed interface.
                                </p>

                                <ul class="nav nav-tabs m-b-10" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                           role="tab" aria-controls="home" aria-expanded="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                           role="tab" aria-controls="profile">Profile</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                           role="button" aria-haspopup="true" aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" role="tab"
                                               data-toggle="tab" aria-controls="dropdown1">@fat</a>
                                            <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" role="tab"
                                               data-toggle="tab" aria-controls="dropdown2">@mdo</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div role="tabpanel" class="tab-pane fade in active show" id="home"
                                         aria-labelledby="home-tab">
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt
                                            tofu stumptown aliqua, retro synth master cleanse. Mustache cliche
                                            tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro
                                            keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry
                                            richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan
                                            aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                         aria-labelledby="profile-tab">
                                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                            single-origin coffee squid. Exercitation +1 labore velit, blog sartorial
                                            PBR leggings next level wes anderson artisan four loko farm-to-table
                                            craft beer twee. Qui photo booth letterpress, commodo enim craft beer
                                            mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud
                                            organic, assumenda labore aesthetic magna delectus mollit. Keytar
                                            helvetica VHS salvia yr, vero magna velit sapiente labore stumptown.
                                            Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts
                                            beard ut DIY ethical culpa terry richardson biodiesel. Art party
                                            scenester stumptown, tumblr butcher vero sint qui sapiente accusamus
                                            tattooed echo park.</p>
                                    </div>
                                    <div class="tab-pane fade" id="dropdown1" role="tabpanel"
                                         aria-labelledby="dropdown1-tab">
                                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out
                                            mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.
                                            Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                                            locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR
                                            banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg
                                            banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                            retro mlkshk vice blog. Scenester cred you probably haven't heard of
                                            them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth
                                            chambray yr.</p>
                                    </div>
                                    <div class="tab-pane fade" id="dropdown2" role="tabpanel"
                                         aria-labelledby="dropdown2-tab">
                                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party
                                            before they sold out master cleanse gluten-free squid scenester freegan
                                            cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf
                                            cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR,
                                            banh mi before they sold out farm-to-table VHS viral locavore cosby
                                            sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft
                                            beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                            vegan.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12 m-t-sm-40 m-t-20">
                                <h4 class="header-title m-t-0">Pills Tabs</h4>
                                <p class="text-muted m-b-20 font-13">
                                    Take that same HTML, but use .nav-pills instead:
                                </p>

                                <ul class="nav nav-pills m-b-10" id="myTabalt" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1"
                                           role="tab" aria-controls="home" aria-expanded="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1"
                                           role="tab" aria-controls="profile">Profile</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                           role="button" aria-haspopup="true" aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" id="dropdown1-tab1" href="#dropdown1-alt" role="tab"
                                               data-toggle="tab" aria-controls="dropdown1">@fat</a>
                                            <a class="dropdown-item" id="dropdown2-tab1" href="#dropdown2-alt" role="tab"
                                               data-toggle="tab" aria-controls="dropdown2">@mdo</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabaltContent">
                                    <div role="tabpanel" class="tab-pane fade in active show" id="home1"
                                         aria-labelledby="home-tab">
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt
                                            tofu stumptown aliqua, retro synth master cleanse. Mustache cliche
                                            tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro
                                            keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry
                                            richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan
                                            aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                    </div>
                                    <div class="tab-pane fade" id="profile1" role="tabpanel"
                                         aria-labelledby="profile-tab">
                                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                            single-origin coffee squid. Exercitation +1 labore velit, blog sartorial
                                            PBR leggings next level wes anderson artisan four loko farm-to-table
                                            craft beer twee. Qui photo booth letterpress, commodo enim craft beer
                                            mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud
                                            organic, assumenda labore aesthetic magna delectus mollit. Keytar
                                            helvetica VHS salvia yr, vero magna velit sapiente labore stumptown.
                                            Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts
                                            beard ut DIY ethical culpa terry richardson biodiesel. Art party
                                            scenester stumptown, tumblr butcher vero sint qui sapiente accusamus
                                            tattooed echo park.</p>
                                    </div>
                                    <div class="tab-pane fade" id="dropdown1-alt" role="tabpanel"
                                         aria-labelledby="dropdown1-tab">
                                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out
                                            mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.
                                            Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                                            locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR
                                            banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg
                                            banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                            retro mlkshk vice blog. Scenester cred you probably haven't heard of
                                            them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth
                                            chambray yr.</p>
                                    </div>
                                    <div class="tab-pane fade" id="dropdown2-alt" role="tabpanel"
                                         aria-labelledby="dropdown2-tab">
                                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party
                                            before they sold out master cleanse gluten-free squid scenester freegan
                                            cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf
                                            cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR,
                                            banh mi before they sold out farm-to-table VHS viral locavore cosby
                                            sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft
                                            beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                            vegan.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end row -->

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
<!-- put any extra js here -->
<?php require 'includes/footer_end.php' ?>

