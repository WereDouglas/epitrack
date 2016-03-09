<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Efenet-epitrack</title>
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
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li><!-- end message -->
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="<?php echo base_url(); ?>dist/img/user3-128x128.jpg" class="img-circle" alt="User Image" />
                                                    </div>
                                                    <h4>
                                                        AdminLTE Design Team
                                                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="<?php echo base_url(); ?>dist/img/user4-128x128.jpg" class="img-circle" alt="User Image" />
                                                    </div>
                                                    <h4>
                                                        Developers
                                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="<?= base_url(); ?>dist/img/user3-128x128.jpg" class="img-circle" alt="User Image" />
                                                    </div>
                                                    <h4>
                                                        Sales Department
                                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="<?= base_url(); ?>dist/img/user4-128x128.jpg" class="img-circle" alt="User Image" />
                                                    </div>
                                                    <h4>
                                                        Reviewers
                                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-red"></i> 5 new members joined
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-user text-red"></i> You changed your username
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Create a nice theme
                                                        <small class="pull-right">40%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Some task I need to do
                                                        <small class="pull-right">60%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Make beautiful transitions
                                                        <small class="pull-right">80%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">80% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= base_url(); ?>uploads/<?php echo $this->session->userdata('image');?>" class="user-image" alt="user" />
                                    <span class="hidden-xs"><?php echo $this -> session -> userdata('name'); ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?= base_url(); ?>uploads/<?php echo $this->session->userdata('image');?>" class="img-circle" alt="user" />
                                        <p>
                                          <?php echo $this -> session -> userdata('name'); ?>
                                            <small><?php echo $this -> session -> userdata('country'); ?></small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                   
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo base_url() . "index.php/welcome/logout"; ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
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
                                <img src="<?= base_url(); ?>uploads/<?php echo $this->session->userdata('image');?>" class="img-circle" alt="User Image" />
                            </div>
                            <div class="pull-left info">
                                <p><?php echo $this -> session -> userdata('name'); ?></p>
                                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                            </div>
                        </div>
                        <!-- search form -->
                        <form action="#" method="get" class="sidebar-form">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Search..." />
                                <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                        <!-- /.search form -->
                        <!-- sidebar menu: : style can be found in sidebar.less -->
                        <ul class="sidebar-menu">
                            <li class="header">MAIN NAVIGATION</li>
                            <li class="active treeview">
                                <a href="#">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="active"><a href="<?php echo base_url() . "index.php/management/news"; ?>" target="frame"><i class="fa fa-circle-o"></i>Home</a></li>
                                    
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-files-o"></i>
                                    <span>Country options Options</span>
                                    <span class="label label-primary pull-right">4</span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url() . "index.php/management/country_report"; ?>" target="frame"><i class="fa fa-circle-o"></i> Country reports</a></li>
                                    <li><a href="<?php echo base_url() . "index.php/management/tracks"; ?>" target="frame"><i class="fa fa-circle-o"></i> Tracks</a></li>
                                    <li><a href="<?php echo base_url() . "index.php/management/cohort"; ?>" target="frame"><i class="fa fa-circle-o"></i> Cohorts</a></li>
                                    <li><a href="<?php echo base_url() . "index.php/management/country_student"; ?>" target="frame"><i class="fa fa-circle-o"></i> Students</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-pie-chart"></i>
                                    <span>Options</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url() . "index.php/management/country"; ?>" target="frame"><i class="fa fa-circle-o"></i> Countries</a></li>
                                    <li><a href="<?php echo base_url() . "index.php/management/country_user"; ?>" target="frame"><i class="fa fa-circle-o"></i> Users</a></li>
                                    <li><a href="<?php echo base_url() . "index.php/management/event"; ?>" target="frame"><i class="fa fa-circle-o"></i> Events & Updates</a></li>
                                    <li><a href="<?php echo base_url() . "index.php/management/advert"; ?>" target="frame"><i class="fa fa-circle-o"></i> Advertisement</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-laptop"></i>
                                    <span>Student</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url() . "index.php/student/"; ?>" target="frame"><i class="fa fa-circle-o"></i> start</a></li>
                                    <li><a href="<?php echo base_url() . "index.php/student/bio"; ?>" target="frame"><i class="fa fa-circle-o"></i> Bio</a></li>
                                    <li><a href="<?php echo base_url() . "index.php/student/contact"; ?>" target="frame"><i class="fa fa-circle-o"></i> Contacts</a></li>
                                    <li><a href="<?php echo base_url() . "index.php/student/employment"; ?>" target="frame"><i class="fa fa-circle-o"></i> Employement records</a></li>
                                    <li><a href="<?php echo base_url() . "index.php/student/qualification"; ?>" target="frame"><i class="fa fa-circle-o"></i> Qualification</a></li>
                                    <li><a href="<?php echo base_url() . "index.php/student/surveillance"; ?>" target="frame"><i class="fa fa-circle-o"></i> Surveillance</a></li>
                                    <li><a href="<?php echo base_url() . "index.php/student/publication"; ?>" target="frame"><i class="fa fa-circle-o"></i>Publications</a></li>
                                                           <li><a href="<?php echo base_url() . "index.php/student/study"; ?>" target="frame"><i class="fa fa-circle-o"></i> Studies</a></li>
                           <li><a href="<?php echo base_url() . "index.php/student/outbreak"; ?>" target="frame"><i class="fa fa-circle-o"></i> Outbreaks</a></li>
                           <li><a href="<?php echo base_url() . "index.php/student/presentation"; ?>" target="frame"><i class="fa fa-circle-o"></i> Presentations</a></li>
                           <li><a href="<?php echo base_url() . "index.php/student/course"; ?>" target="frame"><i class="fa fa-circle-o"></i> Short courses</a></li>
                           
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-edit"></i> <span>Forms</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                                    <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                                    <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-table"></i> <span>Tables</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                                    <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="pages/calendar.html">
                                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                                    <small class="label pull-right bg-red">3</small>
                                </a>
                            </li>
                            <li>
                                <a href="pages/mailbox/mailbox.html">
                                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                    <small class="label pull-right bg-yellow">12</small>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-folder"></i> <span>Examples</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                                    <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                                    <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                                    <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                                    <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                                    <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                                    <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-share"></i> <span>Multilevel</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                                    <li>
                                        <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                                        <ul class="treeview-menu">
                                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                            <li>
                                                <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                                <ul class="treeview-menu">
                                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                                </ul>
                            </li>
                            <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                            <li class="header">LABELS</li>
                            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                        </ul>
                    </section>
                    <!-- /.sidebar -->
                </aside>

