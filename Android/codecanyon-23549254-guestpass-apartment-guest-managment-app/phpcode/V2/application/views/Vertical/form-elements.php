<?php require 'includes/header_start.php'; ?>
    <!-- Extra css -->
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
                            <h4 class="page-title float-left">Form elements</h4>

                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Form elements</li>
                            </ol>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <h4 class="header-title m-t-0 m-b-30">Input Types</h4>

                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                                    <form>
                                        <fieldset class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter email">
                                            <small class="text-muted">We'll never share your email with anyone
                                                else.
                                            </small>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control"
                                                    id="exampleInputPassword1" placeholder="Password">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="exampleSelect1">Example select</label>
                                            <select class="form-control" id="exampleSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="exampleSelect2">Example multiple select</label>
                                            <select multiple class="form-control" id="exampleSelect2">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="exampleTextarea">Example textarea</label>
                                            <textarea class="form-control" id="exampleTextarea"
                                                        rows="3"></textarea>
                                        </fieldset>

                                        <fieldset class="form-group">
                                            <label >Example Readonly</label>
                                            <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
                                        </fieldset>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div><!-- end col -->

                                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6 m-t-sm-40">
                                    <form>
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <label for="disabledTextInput">Disabled input</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                        placeholder="Disabled input">
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled select menu</label>
                                                <select id="disabledSelect" class="form-control">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label >Example Control sizing</label>
                                            <input class="form-control form-control-lg m-b-20" type="text"
                                                    placeholder=".form-control-lg">
                                            <input class="form-control m-b-20" type="text" placeholder="Default input">
                                            <input class="form-control form-control-sm m-b-20" type="text"
                                                    placeholder=".form-control-sm">

                                            <div class="row">
                                                <div class="col-2">
                                                    <input type="text" class="form-control m-b-15"
                                                            placeholder=".col-xs-2">
                                                </div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control m-b-15"
                                                            placeholder=".col-xs-3">
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" class="form-control m-b-15"
                                                            placeholder=".col-xs-4">
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label>Select menu</label>

                                            <select class="custom-select mb-3">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>

                                            <label> <i class="fa fa-star"></i> Checkboxes and Radios</label>

                                            <div class="mt-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </form>
                                </div><!-- end col -->

                            </div><!-- end row -->
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Textual inputs</h4>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Text</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Search</label>
                                <div class="col-10">
                                    <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-2 col-form-label">Email</label>
                                <div class="col-10">
                                    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-url-input" class="col-2 col-form-label">URL</label>
                                <div class="col-10">
                                    <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                                <div class="col-10">
                                    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-password-input" class="col-2 col-form-label">Password</label>
                                <div class="col-10">
                                    <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Number</label>
                                <div class="col-10">
                                    <input class="form-control" type="number" value="42" id="example-number-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
                                <div class="col-10">
                                    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                <div class="col-10">
                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-month-input" class="col-2 col-form-label">Month</label>
                                <div class="col-10">
                                    <input class="form-control" type="month" value="2011-08" id="example-month-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-week-input" class="col-2 col-form-label">Week</label>
                                <div class="col-10">
                                    <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-time-input" class="col-2 col-form-label">Time</label>
                                <div class="col-10">
                                    <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-color-input" class="col-2 col-form-label">Color</label>
                                <div class="col-10">
                                    <input class="form-control" type="color" value="#563d7c" id="example-color-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                                    <h4 class="header-title m-t-0 m-b-30">Inline forms</h4>

                                    <h6 class="m-b-20 text-muted">Visible labels</h6>

                                    <form class="form-inline">
                                        <label class="sr-only" for="inlineFormInput">Name</label>
                                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Jane Doe">

                                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                        </div>

                                        <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox"> Remember me
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                    <form class="form-inline m-t-30">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
                                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                        <div class="custom-control mr-2 custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                                            <label class="custom-control-label" for="customCheck13">Remember my preference</label>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                    <h6 class="m-b-20 m-t-30 text-muted">Hidden labels</h6>

                                    <form class="form-inline">
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail3">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail3"
                                                    placeholder="Enter email">
                                        </div>
                                        <div class="form-group mx-sm-3">
                                            <label class="sr-only" for="exampleInputPassword3">Password</label>
                                            <input type="password" class="form-control"
                                                    id="exampleInputPassword3" placeholder="Password">
                                        </div>
                                        <div class="checkbox mx-sm-3">
                                            <input id="checkbox0" type="checkbox">
                                            <label for="checkbox0">
                                                Remember me
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>

                                </div>

                                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6 m-t-sm-40">

                                    <h4 class="header-title m-t-0 m-b-30">Using the Grid</h4>

                                    <form>
                                        <div class="form-group row">
                                            <label for="inputEmail3"
                                                    class="col-sm-2 form-control-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail3"
                                                        placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 form-control-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword3"
                                                        placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Radios</label>
                                            <div class="col-sm-10">
                                                <div class="radio">
                                                    <input type="radio" name="radio" id="radio1" value="option1" checked>
                                                    <label for="radio1">
                                                        Option one is this and that&mdash;be sure to include why
                                                        it's great
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <input type="radio" name="radio" id="radio2" value="option2">
                                                    <label for="radio2">
                                                        Option two can be something else and selecting it will
                                                        deselect option one
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <input type="radio" name="radio" id="radio3" value="option3" disabled>
                                                    <label for="radio3">
                                                        Option three is disabled
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Checkbox</label>
                                            <div class="col-sm-10">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox21" type="checkbox">
                                                    <label for="checkbox21">
                                                        Check me out
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

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
    <!-- extra js -->
<?php require 'includes/footer_end.php' ?>