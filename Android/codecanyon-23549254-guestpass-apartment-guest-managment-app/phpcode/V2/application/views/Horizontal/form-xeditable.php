<?php require 'includes/header_start.php'; ?>

    <!-- X-editable css -->
    <link type="text/css" href="assets/plugins/x-editable/css/bootstrap-editable.css" rel="stylesheet">

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
            <h4 class="page-title">X-Editable</h4>
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-b-30 m-t-0 header-title">Inline Editor</h4>
                <table class="table table-borderless table-striped">
                    <tbody>
                    <tr>
                        <td width="35%">Simple text field</td>
                        <td width="65%"><a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">superuser</a></td>
                    </tr>
                    <tr>
                        <td>Empty text field, required</td>
                        <td><a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a></td>
                    </tr>
                    <tr>
                        <td>Select, local array, custom display</td>
                        <td><a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a></td>
                    </tr>
                    <tr>
                        <td>Select, remote array, no buttons</td>
                        <td><a href="#" id="inline-group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-title="Select group">Admin</a></td>
                    </tr>
                    <tr>
                        <td>Select, error while loading</td>
                        <td><a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a></td>
                    </tr>

                    <tr>
                        <td>Combodate (date)</td>
                        <td><a href="#" id="inline-dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a></td>
                    </tr>
                    <tr>
                        <td>Combodate (datetime)</td>
                        <td><a href="#" id="inline-event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1"  data-title="Setup event date and time"></a></td>
                    </tr>

                    <tr>
                        <td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
                        <td><a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></td>
                    </tr>

                    <tr>
                        <td>Checklist</td>
                        <td><a href="#" id="inline-fruits" data-type="checklist" data-value="2,3" data-title="Select fruits"></a></td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- end row -->




<?php require 'includes/footer_start.php' ?>

    <!-- XEditable Plugin -->
    <script src="assets/plugins/moment/moment.js"></script>
    <script type="text/javascript" src="assets/plugins/x-editable/js/bootstrap-editable.min.js"></script>
    <script type="text/javascript" src="assets/pages/jquery.xeditable.js"></script>


<?php require 'includes/footer_end.php' ?>