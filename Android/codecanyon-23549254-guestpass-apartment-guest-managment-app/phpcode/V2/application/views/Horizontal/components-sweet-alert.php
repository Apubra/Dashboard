<?php require 'includes/header_start.php'; ?>
<!-- Sweet Alert css -->
<link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css"/>
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
        <h4 class="page-title">Sweet-Alert</h4>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-12">
        <div class="card-box">

            <h4 class="header-title m-t-0">Alerts Examples</h4>

            <p class="text-muted m-b-30 font-13">
                A beautiful replacement for JavaScript's "alert"
            </p>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="min-width:50%;">Alert Type</th>
                    <th>Example</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="middle-align">Basic Example</td>
                    <td>
                        <button class="btn btn-custom waves-effect waves-light btn-sm" id="sa-basic">Click me</button>
                    </td>
                </tr>

                <tr>
                    <td class="middle-align">A title with a text under</td>
                    <td>
                        <button class="btn btn-custom waves-effect waves-light btn-sm" id="sa-title">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A success message!</td>
                    <td>
                        <button class="btn btn-custom waves-effect waves-light btn-sm" id="sa-success">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A warning message, with a function attached to the "Confirm"-button...</td>
                    <td>
                        <button class="btn btn-custom waves-effect waves-light btn-sm" id="sa-warning">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">By passing a parameter, you can execute something else for "Cancel".</td>
                    <td>
                        <button class="btn btn-custom waves-effect waves-light btn-sm" id="sa-params">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A message with custom Image Header</td>
                    <td>
                        <button class="btn btn-custom waves-effect waves-light btn-sm" id="sa-image">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A message with auto close timer</td>
                    <td>
                        <button class="btn btn-custom waves-effect waves-light btn-sm" id="sa-close">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A message with button primary</td>
                    <td>
                        <button class="btn btn-primary waves-effect waves-light btn-sm" id="primary-alert">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A message with button info</td>
                    <td>
                        <button class="btn btn-info waves-effect waves-light btn-sm" id="info-alert">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A message with button success</td>
                    <td>
                        <button class="btn btn-success waves-effect waves-light btn-sm" id="success-alert">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A message with button warning</td>
                    <td>
                        <button class="btn btn-warning waves-effect waves-light btn-sm" id="warning-alert">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A message with button danger</td>
                    <td>
                        <button class="btn btn-danger waves-effect waves-light btn-sm" id="danger-alert">Click me</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div><!-- end col -->
</div>
<!-- end row -->


<?php require 'includes/footer_start.php' ?>
<!-- Sweet Alert js -->
<script src="assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
<script src="assets/pages/jquery.sweet-alert.init.js"></script>
<?php require 'includes/footer_end.php' ?>
