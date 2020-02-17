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
        <h4 class="page-title">Grid</h4>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title m-t-0">Grid options</h4>
            <p class="text-muted m-b-20 font-13">
                See how aspects of the Bootstrap grid system work across multiple devices with a handy table.
            </p>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th></th>
                        <th class="text-center">
                            Extra small<br>
                            <small>&lt;576px</small>
                        </th>
                        <th class="text-center">
                            Small<br>
                            <small>≥576px</small>
                        </th>
                        <th class="text-center">
                            Medium<br>
                            <small>≥768px</small>
                        </th>
                        <th class="text-center">
                            Large<br>
                            <small>≥992px</small>
                        </th>
                        <th class="text-center">
                            Extra large<br>
                            <small>≥1200px</small>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th class="text-nowrap" scope="row">Grid behavior</th>
                        <td>Horizontal at all times</td>
                        <td colspan="4">Collapsed to start, horizontal above breakpoints</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap" scope="row">Max container width</th>
                        <td>None (auto)</td>
                        <td>540px</td>
                        <td>720px</td>
                        <td>960px</td>
                        <td>1140px</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap" scope="row">Class prefix</th>
                        <td><code>.col-</code></td>
                        <td><code>.col-sm-</code></td>
                        <td><code>.col-md-</code></td>
                        <td><code>.col-lg-</code></td>
                        <td><code>.col-xl-</code></td>
                    </tr>
                    <tr>
                        <th class="text-nowrap" scope="row"># of columns</th>
                        <td colspan="5">12</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap" scope="row">Gutter width</th>
                        <td colspan="5">20px (10px on each side of a column)</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap" scope="row">Nestable</th>
                        <td colspan="5">Yes</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap" scope="row">Offsets</th>
                        <td colspan="5">Yes</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap" scope="row">Column ordering</th>
                        <td colspan="5">Yes</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end row -->


<?php require 'includes/footer_start.php' ?>
<!-- put any extra js here -->
<?php require 'includes/footer_end.php' ?>
