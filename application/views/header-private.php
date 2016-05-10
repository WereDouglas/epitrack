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
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a href="#" class="">
                        <small>
                            <img  height="300px" width="300px"  src="<?= base_url(); ?>images/log.png" alt="User's Photo" />

                        </small>
                    </a><!--/.brand-->

                    <ul class="nav ace-nav pull-right">
                         <li class="">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                
                                 <img  height="80px" width="80px" class="" src="<?= base_url(); ?>flags/<?php echo $this->session->userdata('flag');?>" alt="Flag" />
                                
                            </a>

                        </li>
                        <li class="">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-tasks"></i>
                                <span class="badge badge-grey"><?=count($pubs)?></span>
                            </a>

                            <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                                <li class="nav-header">
                                    <i class="icon-ok"></i>
                                   <?=count($pubs)?> Publications
                                </li>
     <?php
                                            if (is_array($pubs) && count($pubs)) {
                                                foreach ($pubs as $loop) {
                                                   
                                                    ?>
                                <li>
                                    <a href="<?=$loop->link?>">
                                        <div class="clearfix">
                                            <span class="pull-left">  <?=$loop->title?></span>
                                            <span class="pull-right">  <?=$loop->link?></span>
                                        </div>                                     
                                    </a>
                                </li>
                                            <?php }}?>
                           

                                <li>
                                    <a href="#">
                                        Publications
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="purple">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-bell-alt icon-animated-bell"></i>
                                <span class="badge badge-important"><?=count($outbreaks)?></span>
                            </a>

                            <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
                                <li class="nav-header">
                                    <i class="icon-warning-sign"></i>
                                  <?=count($outbreaks)?> Outbreaks
                                </li>
                                
                                            <?php
                                            if (is_array($outbreaks) && count($outbreaks)) {
                                                foreach ($outbreaks as $loop) {
                                                   
                                                    ?>  
                                 <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-mini no-hover btn-pink icon-comment"></i>
                                               <?=$loop->name?>
                                            </span>
                                            <span class="pull-right badge badge-info"><?=$loop->max?></span>
                                        </div>
                                    </a>
                                </li>
                              
                                <?php }}?>

                      

                                <li>
                                    <a href="#">
                                        See all outbreaks
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="green">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-envelope icon-animated-vertical"></i>
                                <span class="badge badge-success">  <?=count($chats)?></span>
                            </a>

                            <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                                <li class="nav-header">
                                    <i class="icon-envelope-alt"></i>
                                    <?=count($chats)?>
                                </li>
                                      <?php
                                            if (is_array($chats) && count($chats)) {
                                                foreach ($chats as $loop) {
                                                   
                                                    ?>  
                                <li>
                                    <a href="#">
                                          <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue"><?=$loop->sender?></span>
                                                <?=$loop->message?>
                                            </span>

                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>  <?=$loop->datetimes?></span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <?php }}?>

                                <li>
                                    <a href="#">
                                        See all messages
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="" style="background-color: none;">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="<?php echo base_url(); ?>uploads/<?php echo $this -> session -> userdata('image'); ?>" alt=" <?php echo $this -> session -> userdata('image'); ?>" />
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    <?php echo $this -> session -> userdata('name'); ?>
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
                                    <a href="<?php echo base_url() . "index.php/welcome/logout"; ?>">
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
                
              <a href="<?php echo base_url() . "index.php/student/"; ?>" target="frame">
                      <div class="infobox infobox infobox-small ">   <div class="infobox-icon">
                                            <i class="icon-home"></i>
                                        </div>

                    <div class="infobox-data">
                        <div class="infobox-content">Home</div>
                        <div class="infobox-content"></div>
                    </div>
                </div> </a>
                   <a href="<?php echo base_url() . "index.php/student/bio"; ?>" target="frame">
                             <div class="infobox infobox infobox-small "><div class="infobox-icon">
                                              <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/Teacher.png" alt="account" />
                                        </div>

                    <div class="infobox-data">
                        <div class="infobox-content">Bio-info</div>
                        <div class="infobox-content"></div>
                    </div>
                </div> </a>
                 <a href="<?php echo base_url() . "index.php/student/contact"; ?>" target="frame">
                                                              
                     <div class="infobox infobox infobox-small ">                         <div class="infobox-icon">
                                          <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/contact.png" alt="account" />
                                        </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">Contacts</div>
                                            
                                        </div>
                   </div>
                </a>
                 <a href="<?php echo base_url() . "index.php/student/employment"; ?>" target="frame">
                                                          
                     <div class="infobox infobox infobox-small ">                        <div class="infobox-icon">
                                           <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/work.png" alt="account" />
                                        </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">Employment records</div>
                                            
                                        </div>
                   </div>
                
                <a href="<?php echo base_url() . "index.php/student/qualification"; ?>" target="frame">  
                     <div class="infobox infobox infobox-small ">
                                      <div class="infobox-icon">
                                             <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/employement.png" alt="account" />
                                       </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">Qualifications</div>
                                            <div class="infobox-content"></div>
                                        </div>
                   </div>
                </a>
                        <a href="<?php echo base_url() . "index.php/student/surveillance"; ?>" target="frame">             
                     <div class="infobox infobox infobox-small ">     
                                         <div class="infobox-icon">
                                             <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/employement.png" alt="account" />
                                       </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">Surveillance</div>
                                            <div class="infobox-content"></div>
                                        </div>
                   </div>
                </a>
                 <a href="<?php echo base_url() . "index.php/student/publication"; ?>" target="frame">
                                     <div class="infobox infobox infobox-small ">     
                                         <div class="infobox-icon">
                                           <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/publish.png" alt="account" />
                                       </div>

                                        <div class="infobox-icon">
                                            <div class="infobox-content">Publications</div>
                                            <div class="infobox-content"></div>
                                        </div>
                   </div>
                </a>
                      <a href="<?php echo base_url() . "index.php/field"; ?>" target="frame">
                                     <div class="infobox infobox infobox-small ">     
                                         <div class="infobox-icon">
                                           <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/publish.png" alt="account" />
                                       </div>

                                        <div class="infobox-icon">
                                            <div class="infobox-content">Field Report</div>
                                            <div class="infobox-content"></div>
                                        </div>
                   </div>
                </a>
             <a href="<?php echo base_url() . "index.php/student/study"; ?>" target="frame">
                                    <div class="infobox infobox infobox-small ">       <div class="infobox-icon">
                                           <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/study.png" alt="account" />
                                      </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">Studies</div>
                                            <div class="infobox-content"></div>
                                        </div>
                   </div>
               </a>
       
                   <a href="<?php echo base_url() . "index.php/student/outbreak"; ?>" target="frame">
                      <div class="infobox infobox infobox-small ">         
                          <div class="infobox-icon">
                                          <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/outbreak.png" alt="account" />
                                         </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">Outbreaks</div>
                                           
                                        </div>
                  </div>
                   </a>
               <a href="<?php echo base_url() . "index.php/student/presentation"; ?>" target="frame">
                                        <div class="infobox infobox infobox-small ">   
                                            <div class="infobox-icon">
                                           <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/present.png" alt="account" />
                                           </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">Presentations</div>
                                           
                                        </div>
                  </div></a>
                <a href="<?php echo base_url() . "index.php/student/course"; ?>" target="frame">
                    <div class="infobox infobox infobox-small ">   <div class="infobox-icon">
                                         <img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/courses.png" alt="account" />
                                          </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">Short courses</div>
                                           
                                        </div>
                  </div></a>

        

                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="icon-double-angle-left"></i>
                </div>
            </div>