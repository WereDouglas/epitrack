<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Epitrack</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.4 -->
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- FontAwesome 4.3.0 -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons 2.0.0 -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="<?php echo base_url(); ?>plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url(); ?>plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo base_url(); ?>plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?= base_url(); ?>css/frame.css" />

    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><img  height="50px" width="250px" class="nav" src="<?= base_url(); ?>images/log.png" alt="Logo" />
                    </span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li style="padding-top:8px;"> 
                                <img src="<?= base_url(); ?>flags/<?php echo $this->session->userdata('flag'); ?>"  class="user-image" height="30px" width="40px" alt="user" />
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <?php 
                            
                             if ($this->session->userdata('level') == 2 || $this->session->userdata('level') == 1) {
                            ?>
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning"><?php echo count($student_cnt_false) + count($publication_cnt_review) + count($publication_cnt_accepted); ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Your notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="<?php echo base_url() . "index.php/management/country_student"; ?>" target="frame">
                                                    <i class="fa fa-users text-aqua"></i> <?php echo count($student_cnt_false); ?> new members/inactive students today
                                                </a>
                                            </li>
                                            <li>
                                            <li>
                                                <a href="<?php echo base_url() . "index.php/student/publication"; ?>" target="frame">
                                                    <i class="fa fa-users text-aqua"></i> <?php echo count($publication_cnt_review); ?> Publications pending review
                                                </a>

                                            </li>
                                            <li>
                                            <li>
                                                <a href="<?php echo base_url() . "index.php/student/publication"; ?>" target="frame">
                                                    <i class="fa fa-users text-aqua"></i> <?php echo count($publication_cnt_accepted); ?> publications pending acceptance
                                                </a>
                                            </li>


                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
<?php }?>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">


                                    <?php
                                    // echo $this->session->userdata('image');
                                    if ($this->session->userdata('image') != null) {
                                        ?>       

                                        <img src="<?= base_url(); ?>uploads/<?php echo $this->session->userdata('image'); ?>"  class="user-image" alt="user" />

                                        <?php
                                    } else {
                                        ?>                                       

                                        <img src="<?= base_url(); ?>uploads/temp_face.png"  class="user-image" alt="user" />
                                    <?php } ?>   

                                    <span class="hidden-xs"><?php echo $this->session->userdata('name'); ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">

                                        <?php
                                        if ($this->session->userdata('image') != null) {
                                            ?>       

                                            <img src="<?= base_url(); ?>uploads/<?php echo $this->session->userdata('image'); ?>" class="img-circle" alt="user" />

                                            <?php
                                        } else {
                                            echo $this->session->userdata('image');
                                            ?>                                       

                                            <img src="<?= base_url(); ?>uploads/temp_face.png" class="img-circle" alt="user" />
                                        <?php } ?>   

                                        <p>
                                            <?php echo $this->session->userdata('name'); ?>
                                            <small><?php echo $this->session->userdata('country'); ?></small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo base_url() . "index.php/management/details/" . $this->session->userdata('id'); ?>" target="frame" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo base_url() . "index.php/welcome/logout"; ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->

                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->

            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">              
                            <?php
                            if ($this->session->userdata('image') != null) {
                                ?>       

                                <img src="<?= base_url(); ?>uploads/<?php echo $this->session->userdata('image'); ?>"  class="user-image" alt="user" />

                                <?php
                            } else {
                                echo $this->session->userdata('image');
                                ?>                                       

                                <img src="<?= base_url(); ?>uploads/temp_face.png"  class="user-image" alt="user" />
                            <?php } ?>   </div>
                        <div class="pull-left info">
                            <small><?php echo $this->session->userdata('name'); ?></small><br>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>                  
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>

                        <li class="active"><a href="<?php echo base_url() . "index.php/management/news"; ?>" target="frame"><i class="fa  fa-calendar"></i>Home</a></li>

                        <?php
                        if ($this->session->userdata('level') == 2) {
                            ?>
                            <li class="header">Country</li>
                            <li><a href="<?php echo base_url() . "index.php/management/country_report"; ?>" target="frame"><i class="fa fa-bar-chart"></i> Country reports</a></li>
                            <li><a href="<?php echo base_url() . "index.php/management/event"; ?>" target="frame"><i class="fa  fa-calendar"></i>Event & Updates</a></li>
                            <li><a href="<?php echo base_url() . "index.php/management/country_student"; ?>" target="frame"><i class="fa fa-users"></i> Students</a></li>
    <!--                            <li><a href="<?php echo base_url() . "index.php/management/advert"; ?>" target="frame"><i class="fa fa-circle-o"></i> Advertisement</a></li>-->
                            <li><a href="<?php echo base_url() . "index.php/management/tracks"; ?>" target="frame"><i class="fa fa-road"></i> Tracks</a></li>
                            <li><a href="<?php echo base_url() . "index.php/management/cohort"; ?>" target="frame"><i class="fa fa-user-md"></i> Cohorts</a></li>
                            <li><a href="<?php echo base_url() . "index.php/pending/"; ?>" target="frame"><i class="fa  fa-calendar"></i> Pending Actions</a></li>


                        <?php } ?>
                        <?php if ($this->session->userdata('level') == 1) {
                            ?>
                            <li class="header">General</li>
                            <li><a href="<?php echo base_url() . "index.php/management/"; ?>" target="frame"><i class="fa fa-calendar"></i> Calendar</a></li>
                            <li><a href="<?php echo base_url() . "index.php/management/tracks"; ?>" target="frame"><i class="fa fa-road"></i> Tracks</a></li>
                            <li><a href="<?php echo base_url() . "index.php/management/cohort"; ?>" target="frame"><i class="fa fa-user-md"></i> Cohorts</a></li>
                            <li><a href="<?php echo base_url() . "index.php/management/country"; ?>" target="frame"><i class="fa fa-flag"></i> Countries</a></li>
                            <li><a href="<?php echo base_url() . "index.php/management/country_user"; ?>" target="frame"><i class="fa fa-users"></i> Users</a></li>
                            <li><a href="<?php echo base_url() . "index.php/management/event"; ?>" target="frame"><i class="fa  fa-calendar"></i> Events & Updates</a></li>
                            <li><a href="<?php echo base_url() . "index.php/pending/"; ?>" target="frame"><i class="fa  fa-calendar"></i> Pending Actions</a></li>

                        <?php } ?>                       

                        <?php
                        if ($this->session->userdata('level') == "student") {
                            ?>
                            <li class="header">Student</li>
                            <li><a href="<?php echo base_url() . "index.php/student/"; ?>" target="frame"><i class="fa fa-circle-o"></i> start</a></li>
                            <li><a href="<?php echo base_url() . "index.php/student/bio"; ?>" target="frame"><i class="fa fa-male"></i> Bio</a></li>
                            <li><a href="<?php echo base_url() . "index.php/student/contact"; ?>" target="frame"><i class="fa fa-phone"></i> Contacts</a></li>
                            <li><a href="<?php echo base_url() . "index.php/student/employment"; ?>" target="frame"><i class="fa fa-newspaper-o"></i> Employment records</a></li>
                            <li><a href="<?php echo base_url() . "index.php/student/qualification"; ?>" target="frame"><i class="fa fa-mortar-board"></i> Qualification</a></li>
                            <li><a href="<?php echo base_url() . "index.php/student/surveillance"; ?>" target="frame"><i class="fa fa-video-camera"></i> Surveillance</a></li>
                            <li><a href="<?php echo base_url() . "index.php/student/publication"; ?>" target="frame"><i class="fa fa-newspaper-o"></i>Publications</a></li>
                            <li><a href="<?php echo base_url() . "index.php/student/study"; ?>" target="frame"><i class="fa  fa-university"></i> Studies</a></li>
                            <li><a href="<?php echo base_url() . "index.php/student/outbreak"; ?>" target="frame"><i class="fa fa-circle-o"></i> Outbreaks</a></li>
                            <li><a href="<?php echo base_url() . "index.php/student/presentation"; ?>" target="frame"><i class="fa fa-file"></i> Presentations</a></li>
                            <li><a href="<?php echo base_url() . "index.php/student/course"; ?>" target="frame"><i class="fa  fa-file-text"></i> Short courses</a></li>


                        <?php } ?>


                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

