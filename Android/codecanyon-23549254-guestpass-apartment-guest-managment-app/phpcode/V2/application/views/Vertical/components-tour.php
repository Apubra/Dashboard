<?php require 'includes/header_start.php'; ?>
<!-- Tour css -->
<link href="assets/plugins/hopscotch/css/hopscotch.min.css" rel="stylesheet" type="text/css"/>
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
                    <div class="page-title-box" id="page-title-tour">
                        <h4 class="page-title float-left">Tour</h4>

                        <ol class="breadcrumb float-right" id="bro-tour">
                            <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                            <li class="breadcrumb-item"><a href="#">Components</a></li>
                            <li class="breadcrumb-item active">Tour</li>
                        </ol>

                        <div class="clearfix"></div>
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
                    target: 'bro-tour',
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
