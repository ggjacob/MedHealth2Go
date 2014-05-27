<!DOCTYPE html>
<!--[if IE 8 ]><html lang='en' class='ie8'> <![endif]-->
<!--[if (gt IE 8)]><!-->
<html lang="en"><!--<![endif]--><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>MedHealth2Go | Appointments</title>
    <meta content="Medical Telepresence, Tele-Health, Tele-Medicine" name="description">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <!--[if lt IE 9]>
    <script src='https://html5shim.googlecode.com/svn/trunk/html5.js'></script>
    <script src='javascripts/PIE.js'></script>
    <![endif]-->
    <link href="https://qtc.medhealth2go.com/favicon.ico" rel="shortcut icon">
    <link href="https://qtc.medhealth2go.com/images/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="https://qtc.medhealth2go.com/images/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="https://qtc.medhealth2go.com/images/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="https://qtc.medhealth2go.com/images/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/responsive.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/theme.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/fonts.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/fancybox.css" media="screen" rel="stylesheet" type="text/css"><link href="<?php echo base_url();?>assets/css/datetimepicker.css" media="screen" rel="stylesheet" type="text/css">
</head>
<body>
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
                        <img src="<?php echo base_url();?>assets/images/QTC-logo.png" alt="MedHealth2Go Logo">
                    </div>
                    <div class="pull-right" style="margin-top:35px;margin-left:10px;font-size:20px;">TeleHealth Portal</div>
                </div>

                <div class="nav-collapse collapse">
                    <ul class="nav pull-right"><li class=""><a href="https://qtc.medhealth2go.com/users">Users</a></li>
                        <li class="active"><a href="https://qtc.medhealth2go.com/appointments-view">Appointments</a></li><li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hello, System Admin <b class="caret bottom-up"></b></a>
                            <ul class="dropdown-menu bottom-up pull-right">
                                <li><a href="https://qtc.medhealth2go.com/user_settings">Settings</a></li>
                                <li><a href="https://qtc.medhealth2go.com/logout">Log out</a></li>
                            </ul>
                        </li></ul>
                </div>
                <!-- img alt='MedHealth2Go Logo' src='images/assets/landscapes/logo.png' -->
            </div>
        </div>
    </nav>
</header>
<!-- Main Content -->
<div id="content" role="main"><section class="section section-alt section-padded">
<div class="container-fluid">
    <div class="section-header">
        <h1>
            Appointment
            <small class="light">Manager</small>
        </h1>
    </div>
    <div class="row-fluid">
        <div class="span10 offset1 well">
            <button data-toggle="modal" data-target="#myModal" class="btn btn-small btn-primary"><i class="icon-plus icon-white"></i></button>
            <button data-toggle="modal" data-target="#importModal" class="btn btn-small btn-primary">Import</button>

            <table class="table table-bordered sortable">
                <thead>
                <tr><th>Provider</th><th>Patient</th><th>Start Date/Time</th>
                    <th>Duration (min)</th>
                    <th>Status</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody><tr class="error danger"><td>Provider, Provider3</td><td>Examinee, Examinee3</td><td>2014-03-17 16:00</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="41d292da46a11046ee6666f44ee5209d5327717d07bf15.61374591" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider3</td><td>Examinee, Examinee3</td><td>2014-03-17 21:06</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="e525fa68ab568436ec24a323fd09e8725327c65bb25d85.60378476" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider1</td><td>Examinee, Examinee1</td><td>2014-03-18 07:47</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="180e2ff87348fc99e1a0b0cc9640dc9a532860b6409b03.58628958" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider1</td><td>Examinee, Examinee1</td><td>2014-03-18 08:42</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="d5fa54c7bcf3f3799b9d59a09524757b532869605a6751.32301490" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider1</td><td>Examinee, Examinee1</td><td>2014-03-18 09:50</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="b931982d305a694b20df515eb9fc641b5328796e96dbe6.02710083" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>provider1, salman</td><td>Examinee, Examinee1</td><td>2014-03-19 04:30</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="68f469560c08e1030db1ea8f01eed51853297fda679729.37371627" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>provider1, salman</td><td>Examinee, Examinee1</td><td>2014-03-19 04:33</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="636819a4dfcdde19ce2281490c0fb3c753298076431c25.74696984" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>provider1, salman</td><td>patient1, mirza</td><td>2014-03-19 04:38</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="32c44c9d909e3e510e5eb3716a88cfe4532981a6358840.49291407" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>provider1, salman</td><td>patient1, mirza</td><td>2014-03-19 04:39</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="90aa7e41b0f724b591e7d1377a531a6b532981df059d23.83909921" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>provider1, salman</td><td>patient1, mirza</td><td>2014-03-19 04:39</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="31fb37ca832a30f3912c356f4ca60e3c532981f60c1f07.88039694" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>provider1, salman</td><td>patient1, mirza</td><td>2014-03-19 04:40</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="5929fa3c9844728e3af8868af66fbc8253298232279f83.21427155" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>provider1, salman</td><td>patient1, mirza</td><td>2014-03-19 04:40</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="df44ed188d7032be74e2f57e8fac9a895329823b694697.67030535" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>provider1, salman</td><td>patient1, mirza</td><td>2014-03-19 05:29</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="00097385513ce5aeae21f72c75230cbe53298db62fc686.86493205" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>provider1, salman</td><td>patient1, mirza</td><td>2014-03-19 05:30</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="00fefa0090d0d3de1fc3a17accb0601653298df32a2d60.13588357" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>provider1, salman</td><td>patient1, mirza</td><td>2014-03-19 05:30</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="c70bb08ed50de24a0fc31214349f540553298dffb91546.83175070" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>patient1, mirza</td><td>2014-03-19 10:43</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="ba9f059814e9317ff028b31babe98c065329d7551172b5.47948810" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>patient1, mirza</td><td>2014-03-19 13:35</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="56d6c9ec7fc14fb9ecda721d08a2d96a5329ff81771f83.91698270" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>provider1, salman</td><td>patient1, mirza</td><td>2014-03-19 21:51</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="4b1ddc903aee9edd1c5ce8eda88603e3532a73ce92f2a4.33789701" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Patient, Noureddine</td><td>2014-03-22 14:00</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="bbcfe813500e83489511562154c185b7532de3e5f2c1b8.77575745" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Patient, Noureddine</td><td>2014-03-23 18:00</td><td>15</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="67ec02d1ca1711e09344b48c28824f21532f786e5aa597.96548074" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Patient, Noureddine</td><td>2014-03-23 22:00</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="77f94051e8970ede61a255084712e222532fb0ecbbccd2.83836624" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Patient, Noureddine</td><td>2014-03-23 22:00</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="6fd0403f6f41ee704e7073c66522c595532fb340ea9c58.25437887" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider1</td><td>Examinee, Examinee3</td><td>2014-03-25 14:47</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="d55126a2ca3baa1b992afc94eec119645331f96b663e54.78115700" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider1</td><td>Examinee, Examinee3</td><td>2014-03-25 14:51</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="3443915dceaebee046f83a5071a8f39d5331fa71aa2e34.99444211" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider2</td><td>Examinee, Examinee2</td><td>2014-03-26 08:28</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="75c762740344e9b3cf155274aa744e635332f8ba6b3b32.50031315" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider2</td><td>Examinee, Examinee2</td><td>2014-03-26 08:52</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="71d2b88b4ea2e4f23d7217aac67ee1f55332f7a3236976.96325283" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider2</td><td>Examinee, Examinee2</td><td>2014-03-26 08:56</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="d4e5fc4a3b6887dc8f709d025e8795955332f8c9bf0646.24995544" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider2</td><td>Examinee, Examinee2</td><td>2014-03-26 12:55</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="b0580ad36d07af3ae028c32e502514c2533330a3237609.73683861" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Patient, Noureddine</td><td>2014-03-26 14:28</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="16b8529cba7baf80b3d4d1efe485d3ca5333467c471692.62115367" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Patient, Noureddine</td><td>2014-03-26 14:47</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="fffb0f2a37a418446e02f9ac5a356f2553334c23d370d7.94727145" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Patient, Noureddine</td><td>2014-03-26 14:51</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="2a4d6db7359145550db8e2a28248d73653334bfe191c09.57655198" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>patient1, mirza</td><td>2014-03-27 12:19</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="126a4453ac70ae77bf7f200103382edd533479a5013384.20160994" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Patient, Noureddine</td><td>2014-03-27 12:40</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="f06ff0a1ba835e394dab7eafba3f719453347f521ded92.31201936" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Patient, Noureddine</td><td>2014-03-27 12:43</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="f41b1cc8c4ba78d8fc55a31b209ee6b353347f60e6c6e2.09595719" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>provider1, salman</td><td>Patient, Noureddine</td><td>2014-03-27 22:51</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="c8bcfe69636ad9f15e861c429d1c7c0353350de7d3d606.75067202" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Patient, Noureddine</td><td>2014-03-28 00:03</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="6e5ec221ad3c8eafa701db044e5c8bb353351ea9047a55.59982237" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Patient, Noureddine</td><td>2014-03-28 14:49</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="d0d28f346d173d880a0534401e9f48ea5335ee70bc07e1.75823295" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Patient, Noureddine</td><td>2014-03-28 15:13</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="9750a7df4e74c42fe85f76945cf97c695335f40f3acde1.78230436" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Patient, Noureddine</td><td>2014-03-29 00:02</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="f11803f00c6e553bb94711c32fd450dd5336700a39bbc0.73636830" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Patient, Noureddine</td><td>2014-04-01 09:26</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="def3ff6824fc9221ae0ceda2f83bae57533ae8cbd9e0c8.49332677" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider1</td><td>Examinee, Examinee1</td><td>2014-04-01 09:35</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="f2bf7f155a2fa15beb4f3a64424607ae533af0479d39b4.64757027" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider1</td><td>Examinee, Examinee1</td><td>2014-04-01 09:59</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="4733a0cd44cb37f9a4e83b74d631be8c533af08011a521.29044357" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider1</td><td>Examinee, Examinee1</td><td>2014-04-01 10:00</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="52341b5cd9ea3935a1659392288740c3533af091c9b379.74654827" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Examinee, Examinee3</td><td>2014-04-02 21:46</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="6eccb43e812d35e6454134d66835879e533ce7bba4dea8.53185170" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Examinee, Examinee3</td><td>2014-04-02 21:48</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="80c5acb947393984f946122c4725041a533ce819ad5b31.85707767" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Patient, Noureddine</td><td>2014-04-02 21:53</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="2262112655368288520c959452ef26b8533ce95257aa71.51580167" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Examinee, Examinee1</td><td>2014-04-04 10:38</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="945621f73f8271a941c45a15f1180c19533eee176a7d50.14708608" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Examinee, Examinee1</td><td>2014-04-04 10:39</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="939c5d726120a4c49867d00020f0003a533eee5219ba79.20571183" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Examinee, Examinee2</td><td>2014-04-05 16:28</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="1385d7f6bcab8db150a6afa13a64ecbf534091ad72ae86.02573531" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>provider1, salman</td><td>bai, sal</td><td>2014-04-13 23:35</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="a227b390a53f600bc6fbd4e1db5aac79534b81b56b08b8.84485753" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>bai, sal</td><td>2014-04-14 07:04</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="ed9179c8505a1f89847bfd724cb7ad8f534bedc20e1155.93083260" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>bai, sal</td><td>2014-04-14 07:17</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="d5502592fb36be7e3bf328a5a5d6036b534bee09c08909.62920533" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>bai, sal</td><td>2014-04-14 07:20</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="3c9d94e0651173de697d206fbc0a39bf534beea41a2da8.54643297" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>bai, sal</td><td>2014-04-14 07:52</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="7c73b86dc3438205f7cea0dc144fd882534bf61b604b90.93879516" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider1</td><td>Examinee, Examinee1</td><td>2014-04-15 14:19</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="14b08bbfbd0176cf259276b23d964245534da2552c4a48.92185475" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider1</td><td>Examinee, Examinee1</td><td>2014-04-15 14:28</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="95572f1349a7e5a25d888cbe22b8234e534da48cdbbbd3.20688685" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>provider1, salman</td><td>bai, sal</td><td>2014-04-15 16:30</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="663c0650d3603abfc7d4299c64e6fa37534dc110c5daa7.44895106" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>appointments, mirza</td><td>2014-04-15 16:32</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="5858169c8c287a6916e898f5ac1fdc11534dc1849ba7d1.71646859" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider1</td><td>Examinee, Examinee1</td><td>2014-04-16 13:43</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="8c68039ee78f258939e9aa85f8711f2d534eeb66b694e6.66228636" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Examinee, Examinee1</td><td>2014-04-17 20:51</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="2bdd049bf8c12bbe68e1e68a1efcc4c85350a1401062e1.95193101" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Provider, Provider2</td><td>Examinee, Examinee2</td><td>2014-04-18 10:16</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="50924a4693d7d31b6f8426d7eec8624053515dd9561be6.99522511" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr><tr class="error danger"><td>Harche, Noureddine</td><td>Examinee, Examinee1</td><td>2014-04-18 10:31</td><td>30</td><td>expired</td><td><form action="/appointments-view.php" method="post">
                            <input name="action" value="delete" type="hidden">
                            <input name="meetingId" value="fcc0cc3a060632824fae9929cb8cc4735351615b99e706.05448534" type="hidden"><button class="btn btn-danger"><i class="icon-trash icon-white"></i></button></form></td></tr>
                </tbody>
            </table>            </div>
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Add Appointment</h3>
            </div>
            <div class="modal-body">

                <form name="newAppointment" action="/appointments-view.php" method="post" accept-charset="UTF-8" enctype="multipart/form-data">

                    <input name="action" value="newAppt" type="hidden">

                    <select name="doctor" class="span12">
                        <option value="-1" disabled="disabled" selected="selected"> --Select Provider-- </option><option value="145">baig, mirza</option><option value="150">baig, salmannew</option><option value="120">Harche, Noureddine</option><option value="132">Provider, Provider2</option><option value="133">Provider, Provider1</option><option value="134">Provider, Provider3</option><option value="119">provider1, salman</option><option value="160">provider22, mirza</option></select>

                    <select name="patient" class="span12">
                        <option value="-1" disabled="disabled" selected="selected"> --Select Patient-- </option><option value="153">appt1, mirza</option><option value="151">bai, sal</option><option value="130">Examinee, Examinee1</option><option value="131">Examinee, Examinee2</option><option value="135">Examinee, Examinee3</option><option value="124">Nemati, Nader</option><option value="149">Patient, Noureddine</option><option value="146">patient1, mirza</option><option value="154">scheduler, mirza</option></select>
                    <select name="duration" class="span12">
                        <option value="-1" disabled="disabled" selected="selected"> --Select Duration-- </option>
                        <option value="15">15 minutes</option>
                        <option value="30">30 minutes</option>
                        <option value="60">60 minutes</option>
                    </select>

                    <div class="control-group">
                        <div class="controls input-append date form_datetime" data-date="2014-04-19T12:00:00Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="date_time">
                            <input size="16" readonly="readonly" placeholder="Select Date/Time" type="text">
                            <span class="add-on"><i class="icon-remove"></i></span>
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                        <input name="date_time" id="date_time" value="" type="hidden"><br>
                    </div>                </form></div>
            <div class="modal-footer">
                <input class="btn btn-primary" value="Submit" type="submit">

            </div>
        </div>
        <div id="importModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="importModalLabel">Import Appointments</h3>
            </div>
            <div class="modal-body">

                <form name="import" action="/appointments-view.php" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input name="action" value="import" type="hidden">
                    <br>
                    <input name="csv" id="csv" accept=".csv" type="file">                </form></div>
            <div class="modal-footer">
                <input class="btn btn-primary btn-block" value="Submit" type="submit">

            </div>
        </div>
    </div>
</div>
</section>
</div>
</div>
<!-- Page Footer -->
<footer id="footer" role="contentinfo">
    <div class="wrapper wrapper-transparent">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span6 small-screen-center">
                    <p>Powered by
                        <img alt="MedHealth2Go Logo" src="<?php echo base_url();?>assets/images/footer.png">
                        <br>
                        © Copyright MedHealth2Go 2013
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo base_url();?>assets/js/jquery-1.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery_003.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery_002.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/script.js" type="text/javascript"></script><script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
            language: 'en'
        });
    });
</script>

<script src="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.js" type="text/javascript"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
</script><div style="left: 0px; z-index: 1060;" class="datetimepicker datetimepicker-dropdown-bottom-right dropdown-menu"><div style="display: none;" class="datetimepicker-minutes"><table class=" table-condensed"><thead><tr><th style="visibility: visible;" class="prev"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">19 April 2014</th><th style="visibility: visible;" class="next"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><fieldset class="minute"><legend>PM</legend><span class="minute active">12:00</span><span class="minute">12:05</span><span class="minute">12:10</span><span class="minute">12:15</span><span class="minute">12:20</span><span class="minute">12:25</span><span class="minute">12:30</span><span class="minute">12:35</span><span class="minute">12:40</span><span class="minute">12:45</span><span class="minute">12:50</span><span class="minute">12:55</span></fieldset></td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr></tfoot></table></div><div style="display: none;" class="datetimepicker-hours"><table class=" table-condensed"><thead><tr><th style="visibility: visible;" class="prev"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">19 April 2014</th><th style="visibility: visible;" class="next"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><fieldset class="hour"><legend>AM</legend><span class="hour hour_am">12</span><span class="hour hour_am">1</span><span class="hour hour_am">2</span><span class="hour hour_am">3</span><span class="hour hour_am">4</span><span class="hour hour_am">5</span><span class="hour hour_am">6</span><span class="hour hour_am">7</span><span class="hour hour_am">8</span><span class="hour hour_am">9</span><span class="hour hour_am">10</span><span class="hour hour_am">11</span></fieldset><fieldset class="hour"><legend>PM</legend><span class="hour active hour_pm">12</span><span class="hour hour_pm">1</span><span class="hour hour_pm">2</span><span class="hour hour_pm">3</span><span class="hour hour_pm">4</span><span class="hour hour_pm">5</span><span class="hour hour_pm">6</span><span class="hour hour_pm">7</span><span class="hour hour_pm">8</span><span class="hour hour_pm">9</span><span class="hour hour_pm">10</span><span class="hour hour_pm">11</span></fieldset></td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr></tfoot></table></div><div style="display: block;" class="datetimepicker-days"><table class=" table-condensed"><thead><tr><th style="visibility: visible;" class="prev"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">April 2014</th><th style="visibility: visible;" class="next"><i class="icon-arrow-right"></i></th></tr><tr><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th><th class="dow">Su</th></tr></thead><tbody><tr><td class="day old">31</td><td class="day">1</td><td class="day">2</td><td class="day">3</td><td class="day">4</td><td class="day">5</td><td class="day">6</td></tr><tr><td class="day">7</td><td class="day">8</td><td class="day">9</td><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day">13</td></tr><tr><td class="day">14</td><td class="day">15</td><td class="day">16</td><td class="day">17</td><td class="day">18</td><td class="day today active">19</td><td class="day">20</td></tr><tr><td class="day">21</td><td class="day">22</td><td class="day">23</td><td class="day">24</td><td class="day">25</td><td class="day">26</td><td class="day">27</td></tr><tr><td class="day">28</td><td class="day">29</td><td class="day">30</td><td class="day new">1</td><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td></tr><tr><td class="day new">5</td><td class="day new">6</td><td class="day new">7</td><td class="day new">8</td><td class="day new">9</td><td class="day new">10</td><td class="day new">11</td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr></tfoot></table></div><div style="display: none;" class="datetimepicker-months"><table class="table-condensed"><thead><tr><th style="visibility: visible;" class="prev"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">2014</th><th style="visibility: visible;" class="next"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month active">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr></tfoot></table></div><div style="display: none;" class="datetimepicker-years"><table class="table-condensed"><thead><tr><th style="visibility: visible;" class="prev"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">2010-2019</th><th style="visibility: visible;" class="next"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year active">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year">2018</span><span class="year">2019</span><span class="year old">2020</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr></tfoot></table></div></div>
</body></html>