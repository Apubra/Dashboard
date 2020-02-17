<?php require 'includes/header_start.php'; ?>

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
            <h4 class="page-title">Form Masks</h4>
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <div class="row">
                    <div class="col-12">
                        <h4 class="header-title m-t-0">Input Masks</h4>
                        <p class="text-muted font-13 m-b-10">
                            Your awesome text goes here.Your awesome text goes here.
                        </p>

                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="p-20">
                                    <form action="#">
                                        <div class="form-group">
                                            <label>ISBN 1</label>
                                            <input type="text" placeholder="" data-mask="999-99-999-9999-9" class="form-control">
                                            <span class="font-13 text-muted">e.g "999-99-999-9999-9"</span>
                                        </div>
                                        <div class="form-group">
                                            <label>ISBN 2</label>
                                            <input type="text" placeholder="" data-mask="999 99 999 9999 9" class="form-control">
                                            <span class="font-13 text-muted">999 99 999 9999 9</span>
                                        </div>
                                        <div class="form-group">
                                            <label>ISBN 3</label>
                                            <input type="text" placeholder="" data-mask="999/99/999/9999/9" class="form-control">
                                            <span class="font-13 text-muted">999/99/999/9999/9</span>
                                        </div>
                                        <div class="form-group">
                                            <label>IPV4</label>
                                            <input type="text" placeholder="" data-mask="999.999.999.9999" class="form-control">
                                            <span class="font-13 text-muted">192.168.110.310</span>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <label>IPV6</label>
                                            <input type="text" placeholder="" data-mask="9999:9999:9999:9:999:9999:9999:9999" class="form-control">
                                            <span class="font-13 text-muted">4deg:1340:6547:2:540:h8je:ve73:98pd</span>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12">
                                <div class="p-20">
                                    <form action="#">

                                        <div class="form-group">
                                            <label>Tax ID</label>
                                            <input type="text" placeholder="" data-mask="99-9999999" class="form-control">
                                            <span class="font-13 text-muted">99-9999999</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control">
                                            <span class="font-13 text-muted">(999) 999-9999</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Currency</label>
                                            <input type="text" placeholder="" data-mask="$ 999,999,999.99" class="form-control">
                                            <span class="font-13 text-muted">$ 999,999,999.99</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="text" placeholder="" data-mask="99/99/9999" class="form-control">
                                            <span class="font-13 text-muted">dd/mm/yyyy</span>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <label>Date 2</label>
                                            <input type="text" placeholder="" data-mask="99-99-9999" class="form-control">
                                            <span class="font-13 text-muted">dd-mm-yyyy</span>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div> <!-- end row -->

                    </div>
                </div>
                <!-- end row -->

                <div class="row m-t-50">
                    <div class="col-12">
                        <h4 class="header-title m-t-0">Auto Numberic</h4>
                        <p class="text-muted font-13 m-b-10">
                            Your awesome text goes here.Your awesome text goes here.
                        </p>

                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="p-20">
                                    <form action="#">
                                        <div class="form-group">
                                            <label>Default</label>
                                            <input type="text" placeholder="" class="form-control autonumber" data-a-sep="." data-a-dec=",">
                                            <span class="font-13 text-muted">e.g. "1.234.567.890.123"</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Auto Numeric ($)</label>
                                            <input type="text" placeholder="" data-a-sign="$ " class="form-control autonumber">
                                            <span class="font-13 text-muted">e.g. "$ $ 1,234,567,890,123"</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Auto Numeric (€)</label>
                                            <input type="text" placeholder="" data-a-sign="€ " class="form-control autonumber">
                                            <span class="font-13 text-muted">e.g. "€ 1,234,567,890,123"</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Auto Numeric (Rs.)</label>
                                            <input type="text" placeholder="" data-a-sign="Rs. " class="form-control autonumber">
                                            <span class="font-13 text-muted">e.g. "Rs. 1,234,567,890,123"</span>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <label>4 digit Group (¥)</label>
                                            <input type="text" placeholder="" data-d-group="4" data-a-sign="¥ " class="form-control autonumber">
                                            <span class="font-13 text-muted">e.g. "¥ 1,2345,6789,0123"</span>
                                        </div>

                                    </form>

                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12">
                                <div class="p-20">
                                    <form action="#">
                                        <div class="form-group">
                                            <label>Auto Numeric (£)</label>
                                            <input type="text" placeholder="" data-a-sign="£ " class="form-control autonumber">
                                            <span class="font-13 text-muted">e.g. "£ 1,234,567,890,123"</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Auto Numeric (%)</label>
                                            <input type="text" placeholder="" data-a-sign="%" data-p-sign="s" class="form-control autonumber">
                                            <span class="font-13 text-muted">e.g. "11%"</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Maximum Value (0 - 9999)</label>
                                            <input type="text" placeholder="" data-v-max="9999" data-v-min="0" class="form-control autonumber">
                                            <span class="font-13 text-muted">e.g. "9,999"</span>
                                        </div>

                                        <div class="form-group">
                                            <label>Range Value (-99.99 - 1000.00)</label>
                                            <input type="text" placeholder="" data-v-min="-99.99" data-v-max="1000.00" class="form-control autonumber">
                                            <span class="font-13 text-muted">e.g. "1000 Or -99.99"</span>
                                        </div>

                                        <div class="form-group m-b-0">
                                            <label>Bracket Value</label>
                                            <input type="text" placeholder="" data-a-sep="." data-a-dec="," data-v-min="-9999.99" data-v-max="0.00" data-n-bracket="(,)" class="form-control autonumber">
                                            <span class="font-13 text-muted">e.g. "(9,999.00)"</span>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div> <!-- end row -->

                    </div>
                </div>
                <!-- end row -->

            </div>
        </div><!-- end col-->

    </div>
    <!-- end row -->




<?php require 'includes/footer_start.php' ?>

    <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
    <script src="assets/plugins/autoNumeric/autoNumeric.js" type="text/javascript"></script>

    <script type="text/javascript">
      jQuery(function($) {
          $('.autonumber').autoNumeric('init');
      });
    </script>

<?php require 'includes/footer_end.php' ?>