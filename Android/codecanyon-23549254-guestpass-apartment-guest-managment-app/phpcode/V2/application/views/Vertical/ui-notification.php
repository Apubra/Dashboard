<?php require 'includes/header_start.php'; ?>
<!-- Notification css (Toastr) -->
<link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>
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
                        <h4 class="page-title float-left">Notifications</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                            <li class="breadcrumb-item"><a href="#">UI Kit</a></li>
                            <li class="breadcrumb-item active">Notifications</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="control-label">Title</label>
                                        <input id="title" type="text" class="input-large form-control" placeholder="Enter a title ..." />
                                        <label class="control-label m-t-10">Message</label>
                                        <textarea class="input-large form-control" id="message" rows="3" placeholder="Enter a message ..."></textarea>
                                    </div>
                                </div>
                                <div class="control-group m-t-30">
                                    <div class="checkbox controls">
                                        <input id="closeButton" type="checkbox" value="checked" class="input-mini" />
                                        <label for="closeButton">
                                            Close Button
                                        </label>
                                    </div>

                                    <div class="checkbox controls">
                                        <input id="addBehaviorOnToastClick" type="checkbox" value="checked" class="input-mini" />
                                        <label for="addBehaviorOnToastClick">
                                            Add behavior on toast click
                                        </label>
                                    </div>

                                    <div class="checkbox controls">
                                        <input id="debugInfo" type="checkbox" value="checked" class="input-mini" />
                                        <label for="debugInfo">
                                            Debug
                                        </label>
                                    </div>

                                    <div class="controls checkbox">
                                        <input id="progressBar" type="checkbox" value="checked" class="input-mini" />
                                        <label for="progressBar">
                                            Progress Bar
                                        </label>
                                    </div>

                                    <div class="checkbox controls">
                                        <input id="preventDuplicates" type="checkbox" value="checked" class="input-mini" />
                                        <label for="preventDuplicates">
                                            Prevent Duplicates
                                        </label>
                                    </div>

                                    <div class="checkbox controls">
                                        <input id="addClear" type="checkbox" value="checked" class="input-mini" />
                                        <label for="addClear">
                                            Add button to force clearing a toast, ignoring focus
                                        </label>
                                    </div>

                                    <div class="checkbox controls">
                                        <input id="newestOnTop" type="checkbox" value="checked" class="input-mini" />
                                        <label for="newestOnTop">
                                            Newest on top
                                        </label>
                                    </div>


                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="control-group" id="toastTypeGroup">
                                    <div class="controls">
                                        <label>Toast Type</label>
                                        <div class="radio radio-success">
                                            <input type="radio" name="radio" id="radio1" value="success"
                                                   checked>
                                            <label for="radio1">
                                                Success
                                            </label>
                                        </div>

                                        <div class="radio radio-info">
                                            <input type="radio" name="radio" id="radio2" value="info">
                                            <label for="radio2">
                                                Info
                                            </label>
                                        </div>

                                        <div class="radio radio-warning">
                                            <input type="radio" name="radio" id="radio3" value="warning">
                                            <label for="radio3">
                                                Warning
                                            </label>
                                        </div>

                                        <div class="radio radio-danger">
                                            <input type="radio" name="radio" id="radio4" value="error">
                                            <label for="radio4">
                                                Error
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="control-group" id="positionGroup">
                                    <div class="controls">
                                        <label>Position</label>

                                        <div class="radio radio-custom">
                                            <input type="radio" name="positions" id="radio5" value="toast-top-right" checked />
                                            <label for="radio5">
                                                Top Right
                                            </label>
                                        </div>

                                        <div class="radio radio-custom">
                                            <input type="radio" name="positions" id="radio6" value="toast-bottom-right" />
                                            <label for="radio6">
                                                Bottom Right
                                            </label>
                                        </div>

                                        <div class="radio radio-custom">
                                            <input type="radio" name="positions" id="radio7" value="toast-bottom-left" />
                                            <label for="radio7">
                                                Bottom Left
                                            </label>
                                        </div>

                                        <div class="radio radio-custom">
                                            <input type="radio" name="positions" id="radio8" value="toast-top-left" />
                                            <label for="radio8">
                                                Top Left
                                            </label>
                                        </div>

                                        <div class="radio radio-custom">
                                            <input type="radio" name="positions" id="radio9" value="toast-top-full-width" />
                                            <label for="radio9">
                                                Top Full Width
                                            </label>
                                        </div>

                                        <div class="radio radio-custom">
                                            <input type="radio" name="positions" id="radio10" value="toast-bottom-full-width" />
                                            <label for="radio10">
                                                Bottom Full Width
                                            </label>
                                        </div>

                                        <div class="radio radio-custom">
                                            <input type="radio" name="positions" id="radio11" value="toast-top-center" />
                                            <label for="radio11">
                                                Top Center
                                            </label>
                                        </div>

                                        <div class="radio radio-custom">
                                            <input type="radio" name="positions" id="radio12" value="toast-bottom-center" />
                                            <label for="radio12">
                                                Bottom Center
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="control-group">
                                    <div class="controls">
                                        <label for="showEasing">Show Easing</label>
                                        <input id="showEasing" type="text" placeholder="swing, linear" class="input-mini form-control" value="swing" />

                                        <label for="hideEasing" class="m-t-10">Hide Easing</label>
                                        <input id="hideEasing" type="text" placeholder="swing, linear" class="input-mini form-control" value="linear" />

                                        <label for="showMethod" class="m-t-10">Show Method</label>
                                        <input id="showMethod" type="text" placeholder="show, fadeIn, slideDown" class="input-mini form-control" value="fadeIn" />

                                        <label for="hideMethod" class="m-t-10">Hide Method</label>
                                        <input id="hideMethod" type="text" placeholder="hide, fadeOut, slideUp" class="input-mini form-control" value="fadeOut" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="control-group">
                                    <div class="controls">
                                        <label for="showDuration">Show Duration</label>
                                        <input id="showDuration" type="text" placeholder="ms" class="input-mini form-control" value="300" />

                                        <label for="hideDuration" class="m-t-10">Hide Duration</label>
                                        <input id="hideDuration" type="text" placeholder="ms" class="input-mini form-control" value="1000" />

                                        <label for="timeOut" class="m-t-10">Time out</label>
                                        <input id="timeOut" type="text" placeholder="ms" class="input-mini form-control" value="5000" />

                                        <label for="extendedTimeOut" class="m-t-10">Extended time out</label>
                                        <input id="extendedTimeOut" type="text" placeholder="ms" class="input-mini form-control" value="1000" />
                                    </div>
                                </div>
                            </div>
                        </div><!-- end row -->

                        <div class="row m-t-30">
                            <div class="col-12">
                                <button type="button" class="btn btn-primary waves-effect waves-light" id="showtoast">Show Toast</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light" id="cleartoasts">Clear Toasts</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light" id="clearlasttoast">Clear Last Toast</button>
                            </div>
                        </div>

                        <div class="row m-t-30">
                            <div class="col-12">
                                <pre id='toastrOptions' class="alerts-demo"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
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

<!-- Toastr js -->
<script src="assets/plugins/toastr/toastr.min.js"></script>

<!-- DEMO PURPOSE ONLY -->
<script type="text/javascript">
    $(function () {
        var i = -1;
        var toastCount = 0;
        var $toastlast;

        var getMessage = function () {
            var msgs = ['My name is Inigo Montoya. You killed my father. Prepare to die!',
                'Are you the six fingered man?',
                'Inconceivable!',
                'I do not think that means what you think it means.',
                'Have fun storming the castle!'
            ];
            i++;
            if (i === msgs.length) {
                i = 0;
            }

            return msgs[i];
        };

        var getMessageWithClearButton = function (msg) {
            msg = msg ? msg : 'Clear itself?';
            msg += '<br /><br /><button type="button" class="btn btn-secondary clear">Yes</button>';
            return msg;
        };

        $('#showtoast').click(function () {
            var shortCutFunction = $("#toastTypeGroup input:radio:checked").val();
            var msg = $('#message').val();
            var title = $('#title').val() || '';
            var $showDuration = $('#showDuration');
            var $hideDuration = $('#hideDuration');
            var $timeOut = $('#timeOut');
            var $extendedTimeOut = $('#extendedTimeOut');
            var $showEasing = $('#showEasing');
            var $hideEasing = $('#hideEasing');
            var $showMethod = $('#showMethod');
            var $hideMethod = $('#hideMethod');
            var toastIndex = toastCount++;
            var addClear = $('#addClear').prop('checked');

            toastr.options = {
                closeButton: $('#closeButton').prop('checked'),
                debug: $('#debugInfo').prop('checked'),
                newestOnTop: $('#newestOnTop').prop('checked'),
                progressBar: $('#progressBar').prop('checked'),
                positionClass: $('#positionGroup input:radio:checked').val() || 'toast-top-right',
                preventDuplicates: $('#preventDuplicates').prop('checked'),
                onclick: null
            };

            if ($('#addBehaviorOnToastClick').prop('checked')) {
                toastr.options.onclick = function () {
                    alert('You can perform some custom action after a toast goes away');
                };
            }

            if ($showDuration.val().length) {
                toastr.options.showDuration = $showDuration.val();
            }

            if ($hideDuration.val().length) {
                toastr.options.hideDuration = $hideDuration.val();
            }

            if ($timeOut.val().length) {
                toastr.options.timeOut = addClear ? 0 : $timeOut.val();
            }

            if ($extendedTimeOut.val().length) {
                toastr.options.extendedTimeOut = addClear ? 0 : $extendedTimeOut.val();
            }

            if ($showEasing.val().length) {
                toastr.options.showEasing = $showEasing.val();
            }

            if ($hideEasing.val().length) {
                toastr.options.hideEasing = $hideEasing.val();
            }

            if ($showMethod.val().length) {
                toastr.options.showMethod = $showMethod.val();
            }

            if ($hideMethod.val().length) {
                toastr.options.hideMethod = $hideMethod.val();
            }

            if (addClear) {
                msg = getMessageWithClearButton(msg);
                toastr.options.tapToDismiss = false;
            }
            if (!msg) {
                msg = getMessage();
            }

            $('#toastrOptions').text('Command: toastr["'
                + shortCutFunction
                + '"]("'
                + msg
                + (title ? '", "' + title : '')
                + '")\n\ntoastr.options = '
                + JSON.stringify(toastr.options, null, 2)
            );

            var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
            $toastlast = $toast;

            if (typeof $toast === 'undefined') {
                return;
            }

            if ($toast.find('#okBtn').length) {
                $toast.delegate('#okBtn', 'click', function () {
                    alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
                    $toast.remove();
                });
            }
            if ($toast.find('#surpriseBtn').length) {
                $toast.delegate('#surpriseBtn', 'click', function () {
                    alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
                });
            }
            if ($toast.find('.clear').length) {
                $toast.delegate('.clear', 'click', function () {
                    toastr.clear($toast, {force: true});
                });
            }
        });

        function getLastToast() {
            return $toastlast;
        }

        $('#clearlasttoast').click(function () {
            toastr.clear(getLastToast());
        });
        $('#cleartoasts').click(function () {
            toastr.clear();
        });
    })
</script>

<?php require 'includes/footer_end.php' ?>
