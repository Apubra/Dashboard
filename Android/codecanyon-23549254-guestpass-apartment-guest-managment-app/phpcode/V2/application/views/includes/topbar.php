<!-- Navigation Bar-->

<style>
.no-hover:hover{
background-color: #ff5d48 !important;
text-decoration: none;
}
.no-hove:hover{
background-color: #1bb99a !important;
text-decoration: none;
}
</style>
<?php $user_role = $this->session->userdata('user_role');?>
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="user_management" class="logo" style="float:left">
                  
                    <span><img src="<?php echo base_url();?>assets/logo.png" >
                        <?php
                                 $this->db->select('count(*)');
                                 //$this->db->where('pay_from', $rows3['ugid']);
                                 //$this->db->where('pay_to', $pay_to);
                                 $query113 = $this->db->get('estate_user');
                                 $cnt113 = $query113->row_array();
                                 $tot_ctn113=$cnt113['count(*)'];
                        ?>
                        <?php
                                 $this->db->select('count(*)');
                                 //$this->db->where('pay_from', $rows3['ugid']);
                                 //$this->db->where('pay_to', $pay_to);
                                 $query112 = $this->db->get('estate_guard');
                                 $cnt112 = $query112->row_array();
                                 $tot_ctn112=$cnt112['count(*)'];
                        ?>
                        <?php
                        $user_email = $this->session->userdata('user_email');
                        $this->db->select('ref_code');
                        $this->db->from('estate_admin');
                        $this->db->where('mail',$user_email);
                        $q=$this->db->get();
                        $ref_code=$q->row_array();
                        ?>
                    <a class="btn btn-danger no-hover" data-toggle="" style="margin-left: 20px;margin-top:10px;float: left;color: white"> Total Users <?=$tot_ctn113?></a>
                    <a class="btn btn-danger no-hover"  style="margin-left: 20px;margin-top:10px;color: white">Total Guards <?=$tot_ctn112?></a>
                    <!--<a class="btn"  style="margin-left: 20px;margin-top:10px;color: white; font-size:large;"><b>REF.CODE- <?=$ref_code['ref_code']?></b></a>-->

                </span>
                </a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras navbar-topbar" >

                <ul class="list-inline float-right mb-0" style="margin-top:-37px">

                    <li class="list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <?php
                                $this->db->select('*');
                                $this->db->where('id',$this->session->userdata('user_id'));

                                $query1 = $this->db->get('estate_admin');
                                foreach ($query1->result_array() as $row1) {
                                $pack_name = $row1['pack']; 
                                $pack_date = $row1['date']; 
                                $expire_date = $row1['expire_date'];
                                }
                            ?>

                        <?php
                             $start_date=date('Y-m-d');
                            $date =  date('Y-m-d', strtotime('today - 30 days'));// Y-m-d
                               

                                 $this->db->select('count(*)');
                                 //$this->db->where('pay_from', $rows3['ugid']);
                                 $this->db->where('status', '1');
                                
                                 
                                 
                                 
                                 $this->db->where('a_date BETWEEN "'. date('Y-m-d', strtotime($date)). '" and "'. date('Y-m-d', strtotime($start_date)).'"');
                                 $query115 = $this->db->get('guest');
                                 $cnt115 = $query115->row_array();
                                 $tot_ctn115=$cnt115['count(*)'];
                        ?>

                             <b style="margin-left: 20px;margin-top:10px;color: white; font-size:large;">REF.CODE- <?=$ref_code['ref_code']?></b>

                       
                    </li>

                   

                    <li class="list-inline-item dropdown notification-list">
                        <a href="<?php echo base_url(); ?>login/user_logout" class="btn btn-success no-hove no-hover"  style="margin-left: 20px;margin-bottom: 5px;color: white;">                                <i class="zmdi zmdi-power"></i> <span>Logout</span></a>
                      
                    </li>

                </ul>

            </div> <!-- end menu-extras -->
            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->


    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                      <!--- <li class="text-muted menu-title">Navigation</li> -->
<?php if ($user_role == 1) {?>
                <li class="has-submenu">
                    <a href="<?php echo base_url(); ?>dashboard/" class="waves-effect"><span class="label label-pill label-primary float-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
                </li>

                <li class="has-submenu">
                    <a href="<?php echo base_url(); ?>Dashboard/customers_management" class="waves-effect"><i class="zmdi zmdi-accounts-alt" style="font-size:25px;"></i> <span> Estate Admin </span></a>
                </li>
                 <li class="has-submenu">
                    <a href="<?php echo base_url(); ?>Dashboard/Packages" class="waves-effect"><i class="zmdi zmdi-accounts-alt" style="font-size:25px;"></i> <span> Packages </span></a>
                </li>
            <?php }?>

            <?php if ($user_role == 2) {?>
               
                <li class="has-submenu">
                    <a href="<?php echo base_url(); ?>Estate_dashboard/user_management" class="waves-effect"><i class="zmdi zmdi-accounts-alt" style="font-size:25px;"></i> <span> Manage User </span></a>
                </li>
                 <li class="has-submenu">
                    <a href="<?php echo base_url(); ?>Estate_dashboard/manage_guard" class="waves-effect"><i class="zmdi zmdi-accounts-alt" style="font-size:25px;"></i> <span> Manage Guard </span></a>
                </li>
                 <li class="has-submenu">
                    <a href="<?php echo base_url(); ?>Estate_dashboard/property_management" class="waves-effect"><i class="zmdi zmdi-home" style="font-size:25px;"></i> <span>Property/Flats</span></a>
                </li>
                 <li class="has-submenu">
                    <a href="<?php echo base_url(); ?>Estate_dashboard/guest_list" class="waves-effect"><i class="zmdi zmdi-accounts-alt" style="font-size:25px;"></i> <span> Guest List </span></a>
                </li>
            <?php }?>


                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>
</header>
<!-- End Navigation Bar-->


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="wrapper">
    <div class="container">
