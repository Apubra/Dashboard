<?php require 'includes/header_start.php'; ?>
<!-- Tour css -->
<link href="assets/plugins/hopscotch/css/hopscotch.min.css" rel="stylesheet" type="text/css"/>
<?php require 'includes/header_end.php'; ?>


<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15" id="notification-tour">
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
        <h4 class="page-title" id="page-title-tour">Tour</h4>
    </div>
</div>
<!-- end row -->



<?php require 'includes/footer_start.php' ?>

<!-- Tour page js -->
<script src="assets/plugins/hopscotch/js/hopscotch.min.js"></script>

<script>
    $(document).ready(function () {
        var placementRight = 'right';
        var placementLeft = 'left';

        // Define the tour!
        var tour = {
            id: "my-intro",
            steps: [
                {
                    target: 'page-title-tour',
                    title: "User settings",
                    content: "You can edit you profile info here.",
                    placement: 'bottom',
                    zindex: 999
                },
                {
                    target: 'notification-tour',
                    title: "Configuration tools",
                    content: "Here you can change theme skins and other features.",
                    placement: 'left',
                    zindex: 999
                }
            ],
            showPrevButton: true
        };

        // Start the tour!
        hopscotch.startTour(tour);
    });
</script>
<?php require 'includes/footer_end.php' ?>
