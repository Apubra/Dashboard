<header id="topnav">
   <div class="topbar-main">
      <div class="container">
         <div class="topbar-left">
            <a href="index.html" class="logo">
            <i class="zmdi zmdi-group-work icon-c-logo"></i>
            <span>Uplon</span>
            </a>
         </div>
         <div class="menu-extras navbar-topbar">
            <ul class="list-inline float-right mb-0">
               <li class="list-inline-item">
                  <a class="navbar-toggle">
                     <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                     </div>
                  </a>
               </li>
               <li class="list-inline-item dropdown notification-list">
                  <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                     aria-haspopup="false" aria-expanded="false">
                  <img src="template/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                  </a>
                  <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                     <div class="dropdown-item noti-title">
                        <h5 class="text-overflow"><small>Welcome ! <br><?php echo $_SESSION['name']; ?></small> </h5>
                     </div>
                     <a href="<?php echo site_url('login/logout'); ?>" class="dropdown-item notify-item">
                     <i class="zmdi zmdi-power"></i> <span>Logout</span>
                     </a>
                  </div>
               </li>
            </ul>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
   <div class="navbar-custom">
      <div class="container">
         <div id="navigation">
            <ul class="navigation-menu">
               <li <?php if(current_url()==site_url('dashboard')) echo 'class="active"'; ?>>
                  <a href="<?php echo site_url('dashboard'); ?>"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
               </li>
               <?php
               if($_SESSION['usertypeid'] == 1){ ?>
               <li <?php if(current_url()==site_url('outlets') || current_url()==site_url('outlets/terminals')) echo 'class="active"';?>>
                  <a href="<?php echo site_url('outlets'); ?>"><i class="icon-people"></i> <span> Outlet Manager </span> </a>
               </li>
               <li class="has-submenu <?php if(in_array(current_url(), array(site_url('dishManager/menus/base'), site_url('dishManager/menus/sauce'), site_url('dishManager/menus/sides'),site_url('dishManager/menus/addon'),site_url('dishManager/menus/toppings'),site_url('dishManager/menus/protein'),site_url('dishManager/menus/poke')))) echo 'active';?>">
                    <a href="javascript:void(0)"><i class="fa fa-coffee"></i> <span> Dishes Manager </span> </a>
                    <ul class="submenu">
                        <li><a href="<?php echo site_url('dishManager/menus/base'); ?>">Menu Master</a></li>
                        
                    </ul>
                </li>
                <li class="has-submenu <?php if(in_array(current_url(), array(site_url('campaign/coupon'), site_url('campaign/drop_day'), site_url('campaign/double_point')))) echo 'active';?>">
                    <a href="javascript:void(0)"><i class="fa fa-ticket"></i> <span> Campaign Manager </span> </a>
                    <ul class="submenu">
                        <li><a href="<?php echo site_url('campaign/coupon'); ?>">Discount Coupons</a></li>
                        <li><a href="<?php echo site_url('campaign/drop_day'); ?>">Price Drop Day</a></li>
                        <li><a href="<?php echo site_url('campaign/double_point'); ?>">Double Points</a></li>
                    </ul>
                </li>
                <li class="has-submenu <?php if(in_array(current_url(), array(site_url('rewardPoints/trans_summery'), site_url('rewardPoints/earn_point'), site_url('rewardPoints/redeem_point')))) echo 'active';?>">
                    <a href="javascript:void(0)"><i class="fa fa-trophy"></i> <span> Reward Points </span> </a>
                    <ul class="submenu">
                        <li><a href="javascript:void(0)">Transaction Summery</a></li>
                        <li><a href="<?php echo site_url('rewardPoints/earn_point'); ?>">Points Settings</a></li>
                    </ul>
                </li>
                <li <?php if(current_url()==site_url('tax')) echo 'class="active"';?>>
                  <a href="<?php echo site_url('tax'); ?>"><i class="fa fa-file-pdf-o"></i> <span> Tax </span> </a>
               </li>
               <?php }else{
                   ?>
                   <li <?php if(current_url()==site_url('outlets/users')) echo 'class="active"';?>>
                        <a href="<?php echo site_url('outlets/users'); ?>"><i class="icon-people"></i> <span> Users </span> </a>
                    </li>
                   <li <?php if(current_url()==site_url('dishManager/menus/base')) echo 'class="active"';?>>
                        <a href="<?php echo site_url('dishManager/menus/base'); ?>"><i class="fa fa-coffee"></i> <span> Menu Availability </span> </a>
                    </li>
                   <?php
               } ?>
            </ul>
         </div>
      </div>
   </div>
</header>