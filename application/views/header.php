<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>epi-track</title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--basic styles-->

        <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?= base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css" />

        <!--[if IE 7]>
          <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
        <![endif]-->

        <!--page specific plugin styles-->

        <!--fonts-->

        
        <!--ace styles-->

        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-responsive.min.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery.gritter.css" />
        <!--[if lte IE 8]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!--inline styles related to this page-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

    <body>
        <div class="navbar">
            <div class="navbar-inner" style="background-color: #2E8965;">
                <div class="container-fluid">
                    <a href="#" class="brand">
                        <small>
                            <img  height="300px" width="300px" class="nav-user-photo" src="<?= base_url(); ?>images/log.png" alt="User's Photo" />

                        </small>
                    </a><!--/.brand-->

                    <ul class="nav ace-nav pull-right">
                        <li class="grey">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-tasks"></i>
                                <span class="badge badge-grey">4</span>
                            </a>

                            <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                                <li class="nav-header">
                                    <i class="icon-ok"></i>
                                    4 Tasks to complete
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Software Update</span>
                                            <span class="pull-right">65%</span>
                                        </div>

                                        <div class="progress progress-mini ">
                                            <div style="width:65%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Hardware Upgrade</span>
                                            <span class="pull-right">35%</span>
                                        </div>

                                        <div class="progress progress-mini progress-danger">
                                            <div style="width:35%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Unit Testing</span>
                                            <span class="pull-right">15%</span>
                                        </div>

                                        <div class="progress progress-mini progress-warning">
                                            <div style="width:15%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Bug Fixes</span>
                                            <span class="pull-right">90%</span>
                                        </div>

                                        <div class="progress progress-mini progress-success progress-striped active">
                                            <div style="width:90%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        See tasks with details
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="purple">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-bell-alt icon-animated-bell"></i>
                                <span class="badge badge-important">8</span>
                            </a>

                            <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
                                <li class="nav-header">
                                    <i class="icon-warning-sign"></i>
                                    8 Notifications
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-mini no-hover btn-pink icon-comment"></i>
                                                New Comments
                                            </span>
                                            <span class="pull-right badge badge-info">+12</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="btn btn-mini btn-primary icon-user"></i>
                                        Bob just signed up as an editor ...
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
                                                New Orders
                                            </span>
                                            <span class="pull-right badge badge-success">+8</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-mini no-hover btn-info icon-twitter"></i>
                                                Followers
                                            </span>
                                            <span class="pull-right badge badge-info">+11</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        See all notifications
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="green">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-envelope icon-animated-vertical"></i>
                                <span class="badge badge-success">5</span>
                            </a>

                            <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                                <li class="nav-header">
                                    <i class="icon-envelope-alt"></i>
                                    5 Messages
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Alex:</span>
                                                Ciao sociis natoque penatibus et auctor ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>a moment ago</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="<?= base_url(); ?>assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Susan:</span>
                                                Vestibulum id ligula porta felis euismod ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>20 minutes ago</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="<?= base_url(); ?>assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Bob:</span>
                                                Nullam quis risus eget urna mollis ornare ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>3:15 pm</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        See all messages
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="<?= base_url(); ?>assets/avatars/user.jpg" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    Jason
                                </span>

                                <i class="icon-caret-down"></i>
                            </a>

                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                                <li>
                                    <a href="#">
                                        <i class="icon-cog"></i>
                                        Settings
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i>
                                        Profile
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="<?php echo base_url() . "index.php/welcome/"; ?>">
                                        <i class="icon-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul><!--/.ace-nav-->
                </div><!--/.container-fluid-->
            </div><!--/.navbar-inner-->
        </div>

        <div class="main-container container-fluid">
            <a class="menu-toggler" id="menu-toggler" href="#">
                <span class="menu-text"></span>
            </a>

            <div class="sidebar" id="sidebar">
                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-small btn-success">
                            <i class="icon-signal"></i>
                        </button>

                        <button class="btn btn-small btn-info">
                            <i class="icon-pencil"></i>
                        </button>

                        <button class="btn btn-small btn-warning">
                            <i class="icon-group"></i>
                        </button>

                        <button class="btn btn-small btn-danger">
                            <i class="icon-cogs"></i>
                        </button>
                    </div>

                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>

                        <span class="btn btn-info"></span>

                        <span class="btn btn-warning"></span>

                        <span class="btn btn-danger"></span>
                    </div>
                </div><!--#sidebar-shortcuts-->
<!--              <a href="#collapseTracks" data-parent="#accordionTracks" data-toggle="collapse" class="accordion-toggle collapsed">
                         
-->
  <a href="<?php echo base_url() . "index.php/management/"; ?>" target="frame">
                <div class="infobox infobox-grey infobox-small infobox-dark">
                    <div class="infobox-chart">
                        <div class="infobox-icon">
                         <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/home.png" alt="account" />
                           </div>
                    </div>

                    <div class="infobox-data">
                        <div class="infobox-content">Home</div>
                        <div class="infobox-content"></div>
                    </div>
                </div> </a>
          <a href="<?php echo base_url() . "index.php/management/tracks"; ?>" target="frame">
                <div class="infobox infobox-grey infobox-small infobox-dark">
                    <div class="infobox-chart">
                        <div class="infobox-icon">
                                            <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/tracks.png" alt="account" />
                           </div>
                    </div>

                    <div class="infobox-data">
                        <div class="infobox-content">Tracks</div>
                        <div class="infobox-content"></div>
                    </div>
                </div> </a>
                  <a href="<?php echo base_url() . "index.php/management/cohort"; ?>" target="frame">
                                    <div class="infobox infobox-grey infobox-small infobox-dark">
                                         <div class="infobox-icon">
                                           <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/cohort.png" alt="account" />
                          </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">Cohorts</div>
                                            
                                        </div>
                   </div>
                </a>
               
             <a href="<?php echo base_url() . "index.php/management/student"; ?>" target="frame">     <div class="infobox infobox-grey infobox-small infobox-dark">
                                   
                                      <div class="infobox-icon">
                                              <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/students.png" alt="account" />
                          </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">Students</div>
                                            
                                            
                                        </div>
                   </div>
                </a>
            
              <a href="#collapseCountry" data-parent="#accordionCountry" data-toggle="collapse" class="accordion-toggle collapsed">
                                  
                   <div class="infobox infobox-grey infobox-small infobox-dark">
                                         <div class="infobox-icon">
                                           <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/flag.png" alt="account" />
                      </div>

                                        <div class="infobox-icon">
                                            <div class="infobox-content">Countries</div>
                                            <div class="infobox-content"></div>
                                        </div>
                   </div>
                </a>
 <a href="#collapseUser" data-parent="#accordionUser" data-toggle="collapse" class="accordion-toggle collapsed">
                                   
                   <div class="infobox infobox-grey infobox-small infobox-dark">
                                       <div class="infobox-icon">
                                           <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/users.png" alt="account" />
                          </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">Users</div>
                                            <div class="infobox-content"></div>
                                        </div>
                   </div>
                </a>
                <a href="#">
                  <div class="infobox infobox-grey infobox-small infobox-dark">
                                        <div class="infobox-icon">
                                            <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/files.png" alt="account" />
                          </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">Files</div>
                                            <div class="infobox-content">1,205</div>
                                        </div>
                  </div></a>
                    <a href="#collapseAdverts" data-parent="#accordionAdverts" data-toggle="collapse" class="accordion-toggle collapsed">
                                         <div class="infobox infobox-grey infobox-small infobox-dark">
                                      <div class="infobox-icon">
                                            <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/advert.png" alt="account" />
                      </div>   

                                        <div class="infobox-data">
                                            <div class="infobox-content">Events</div>
                                            <div class="infobox-content"></div>
                                        </div>
                   </div>
                </a>
                    <a href="#collapseAdverts" data-parent="#accordionAdverts" data-toggle="collapse" class="accordion-toggle collapsed">
                                         <div class="infobox infobox-grey infobox-small infobox-dark">
                                      <div class="infobox-icon">
                                            <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/advert.png" alt="account" />
                      </div>   

                                        <div class="infobox-data">
                                            <div class="infobox-content">Adverts</div>
                                            <div class="infobox-content"></div>
                                        </div>
                   </div>
                </a>

        

                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="icon-double-angle-left"></i>
                </div>
            </div>