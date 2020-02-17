
<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php echo date("Y"); ?> &copy; Guest Pass Management 
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->


</div> <!-- container -->




<!-- Right Sidebar -->
<div class="side-bar right-bar">
    <div class="nicescroll">
        <ul class="nav nav-pills nav-justified text-xs-center">
            <li class="nav-item">
                <a href="#home-2"  class="nav-link active" data-toggle="tab" aria-expanded="false">
                    Activity
                </a>
            </li>
            <li class="nav-item">
                <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                    Settings
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade active show" id="home-2">
                <div class="timeline-2">
                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">5 minutes ago</small>
                            <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">30 minutes ago</small>
                            <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">59 minutes ago</small>
                            <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">1 hour ago</small>
                            <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">3 hours ago</small>
                            <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">5 hours ago</small>
                            <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="messages-2">

                <div class="row m-t-10">
                    <div class="col-8">
                        <h5 class="m-0">Notifications</h5>
                        <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                    </div>
                </div>

                <div class="row m-t-10">
                    <div class="col-8">
                        <h5 class="m-0">API Access</h5>
                        <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                    </div>
                </div>

                <div class="row m-t-10">
                    <div class="col-8">
                        <h5 class="m-0">Auto Updates</h5>
                        <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                    </div>
                </div>

                <div class="row m-t-10">
                    <div class="col-8">
                        <h5 class="m-0">Online Status</h5>
                        <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end nicescroll -->
</div>
<!-- /Right-bar -->




</div> <!-- End wrapper -->



<!-- jQuery  -->
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/popper.min.js"></script><!-- popper for Bootstrap -->
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/waves.js"></script>
<script src="<?=base_url()?>assets/js/jquery.nicescroll.js"></script>
<script src="<?=base_url()?>assets/plugins/switchery/switchery.min.js"></script>


<!-- Counter Up  -->
<script src="<?=base_url()?>assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?=base_url()?>assets/plugins/counterup/jquery.counterup.min.js"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="<?=base_url()?>assets/plugins/jquery-knob/jquery.knob.js"></script>
       <script src="<?=base_url()?>assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="<?=base_url()?>assets/plugins/custombox/js/legacy.min.js"></script>

<script type="text/javascript" src="<?=base_url()?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
<!-- Peity chart js -->
<script src="<?=base_url()?>assets/plugins/peity/jquery.peity.min.js"></script>


<!-- App js -->
<script src="<?=base_url()?>assets/js/jquery.core.js"></script>
<script src="<?=base_url()?>assets/js/jquery.app.js"></script>




        <!-- Required datatable js -->
        <script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?=base_url()?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?=base_url()?>assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?=base_url()?>assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?=base_url()?>assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?=base_url()?>assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?=base_url()?>assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?=base_url()?>assets/plugins/datatables/buttons.print.min.js"></script>

        <!-- Key Tables -->
        <script src="<?=base_url()?>assets/plugins/datatables/dataTables.keyTable.min.js"></script>

        <!-- Responsive examples -->
        <script src="<?=base_url()?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?=base_url()?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Selection table -->
        <script src="<?=base_url()?>assets/plugins/datatables/dataTables.select.min.js"></script>

