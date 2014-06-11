<?php

session_start();
$userdata=$this->session->all_userdata();

//print_r($userdata);

?>


<div class="wrapper">
    <!-- Page Header -->
    <header id="masthead">

        <nav class="navbar navbar-static-top">

            <div class="navbar-inner">
                <div class="container-fluid">

                    <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="pull-left">
                        <div class="pull-left" style="margin-top:15px;">
                            <img src="<?php echo base_url(); ?>assets/images/QTC-logo.png" alt="MedHealth2Go Logo">
                        </div>
                        <div class="pull-right" style="margin-top:35px;margin-left:10px;font-size:20px;">TeleHealth Portal</div>
                    </div>

                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <?php if($userdata['role_id']==4) {?>
                                <li <?php if($menu=="users"){ ?>class="active" <?php } ?>><a href="<?php echo base_url();?>account/">Users</a></li>
                            <?php } ?>

                            <li <?php if($menu=="appointment"){ ?>class="active" <?php } ?>><a href="<?php echo base_url() ;?>appointment/">Scheduling</a></li>
                            <?php if($userdata['role_id']==1) {?>
                                <li <?php if($menu=="current_session"){ ?>class="active" <?php } ?>><a href="<?php echo base_url();?>appointment/create_session">Create Session</a></li>
                            <?php } ?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hello, <?php echo $userdata['email'] ;?> <b class="caret bottom-up"></b>
                                </a>
                                <ul class="dropdown-menu bottom-up pull-right">
                                    <li><a href="<?php echo base_url()?>account/UpdatePassword/<?php echo $userdata['user_id'] ;?>">Settings</a></li>
                                    <li><a href="<?php echo base_url();?>logout">Log out</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- img alt='MedHealth2Go Logo' src='images/assets/landscapes/logo.png' -->
                </div>
            </div>
        </nav>
    </header>