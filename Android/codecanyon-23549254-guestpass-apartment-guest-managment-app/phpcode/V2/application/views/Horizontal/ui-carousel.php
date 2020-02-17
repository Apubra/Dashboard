<?php require 'includes/header_start.php'; ?>
<!-- Extra css -->
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
        <h4 class="page-title">Carousel</h4>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div class="row">
                <div class="col-12">
                    <h4 class=" m-t-0 header-title">Bootstrap Carousel</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">

                    <p class="text-muted m-b-30 font-13">Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item</code>. </p>

                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="assets/images/big/1.jpg" alt="First slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>First slide label</h3>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="assets/images/big/2.jpg" alt="Second slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Second slide label</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="assets/images/big/3.jpg" alt="Third slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Third slide label</h3>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 m-t-sm-40">

                    <p class="text-muted m-b-30 font-13">Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item</code>. </p>

                    <!-- START carousel-->
                    <div id="carouselExample" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExample" data-slide-to="1"></li>
                            <li data-target="#carouselExample" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="assets/images/big/1.jpg" alt="First slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="assets/images/big/2.jpg" alt="Second slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="assets/images/big/3.jpg" alt="Third slide" />
                            </div>
                        </div>
                    </div>
                    <!-- END carousel-->
                </div>
            </div>

            <div class="row m-t-50">
                <div class="col-lg-6">

                    <p class="text-muted m-b-30 font-13">Add <code>.carousel-fade</code> to your carousel to animate slides with a fade transition instead of a slide.</p>

                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                            <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="assets/images/big/1.jpg" alt="First slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-white">First slide label</h3>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="assets/images/big/2.jpg" alt="Second slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-white">Second slide label</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="assets/images/big/3.jpg" alt="Third slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-white">Third slide label</h3>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->



<?php require 'includes/footer_start.php' ?>
<!-- put any extra js here -->
<?php require 'includes/footer_end.php' ?>
