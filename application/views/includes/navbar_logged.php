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
                            <li class=""><a href="<?php echo base_url();?>account/">Users</a></li>
                            <?php } ?>
                            <li class="active"><a href="<?php echo base_url() ;?>appointment/">Appointments</a></li><li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hello, <?php echo $userdata['email'] ;?> <b class="caret bottom-up"></b></a>
                                <ul class="dropdown-menu bottom-up pull-right">
                                    <li><a href="#">Settings</a></li>
                                    <li><a href="<?php echo base_url();?>logout">Log out</a></li>
                                </ul>
                            </li></ul>
                    </div>
                    <!-- img alt='MedHealth2Go Logo' src='images/assets/landscapes/logo.png' -->
                </div>
            </div>
        </nav>
    </header>