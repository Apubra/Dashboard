<?php require 'includes/header_account.php'; ?>

<div class="ex-page-content count-down-page">
    <div class="container">
        <div class="diamond">
            <div class="top"></div>
            <div class="bot"></div>
        </div><!--end diamond-->

        <div class="clearfix"></div>

        <div class="text-center">
            <h3 class="text-danger">Stay tunned, we're launching very soon</h3>
            <p class="text-muted">We're making the system more awesome.we'll be back shortly.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-10">
                <div id="count-down" class="row center-block">
                    <div class="clock-presenter days_dash col-sm-3">
                        <div class="digit"></div>
                        <div class="digit"></div>
                        <div class="digit"></div>
                        <p class='note dash_title'>Days</p>
                    </div>
                    <div class="clock-presenter hours_dash col-sm-3">
                        <div class="digit"></div>
                        <div class="digit"></div>
                        <p class='note dash_title'>Hours</p>
                    </div>
                    <div class="clock-presenter minutes_dash col-sm-3">
                        <div class="digit"></div>
                        <div class="digit"></div>
                        <p class='note dash_title'>Minutes</p>
                    </div>
                    <div class="clock-presenter seconds_dash col-sm-3">
                        <div class="digit"></div>
                        <div class="digit"></div>
                        <p class='note dash_title'>Seconds</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end wrapper page -->



<?php require 'includes/footer_account.php'; ?>

<!-- Count down js -->
<script src="assets/plugins/count-down/jquery.lwtCountdown-1.0.js"></script>

<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        "use strict";
        //Set your date
        $('#count-down').countDown({
            targetDate: {
                'day': 22,
                'month': 7,
                'year': 2019,
                'hour': 7,
                'min': 7,
                'sec': 7
            },
            omitWeeks: true
        });

    });
</script>
