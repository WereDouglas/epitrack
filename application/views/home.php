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

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!--inline styles related to this page-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>





    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/select2.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-editable.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>css/mine.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>css/home.css" />






</head>

<body>





    <div class="page-content">
        <div class="row-fluid">
            <div class="span12">

                <div class="well center twitter-panel" style="background-color: #21409A;" >
                    <a href="#" class="brand">
                        <small>
                            <img  height="600px" width="600px" class="nav-user-photo" src="<?= base_url(); ?>images/log.png" alt="User's Photo" />

                        </small>
                    </a><!--/.brand-->

                </div><!--/.row-fluid-->

                <div class="row-fluid">
                    <div class="col-lg-12">

                        <! -- 1st ROW OF PANELS -->
                        <div class="row-fluid">
                            <!-- TWITTER PANEL -->
                            <div class="col-lg-4 col-md-4 col-sm-4 mb span4">
                                <div class="green-panel pn">
                                    <div class=" green-header">
                                        <h5>PARTNERS</h5>
                                    </div>
                                    <p class="user">  <img  height="200px" width="200px" class="nav-user-photo" src="<?= base_url(); ?>images/log.png" alt="partner" />
                                    </p>
                                </div>
                            </div><!-- /col-md-4 -->
                            <div class="col-md-4 col-sm-4 mb span4">
                                <div class="stock card">
                                    <div class="stock-chart">
                                        <div id="chart"></div>
                                    </div>
                                    <div class="stock current-price">
                                        <div class="row">
                                            <div class="info col-sm-4 col-xs-4"><abbr></abbr>
                                                <time></time>
                                            </div>
                                            <div class="changes col-sm-6 col-xs-6">
                                                <div class="value up"><i class="fa fa-caret-up hidden-sm hidden-xs"></i> 694.00</div>
                                                <div class="change hidden-sm hidden-xs">(3.49%)</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary">
                                        <strong>EPIDEMIOLOGY</strong> <span>MEMBERS REGISTERED</span>
                                    </div>
                                </div>
                            </div><! -- /col-md-4 -->

                            <div class="col-lg-4 col-md-4 col-sm-4 mb span4">
                                <div class="steps pn">

                                    <a href="<?php echo base_url() . "index.php/welcome/student"; ?>"> <div class="green-header">
                                           <label class="green-header"><img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/man.png" alt="account" /> MY ACCOUNT</label>
                                        </div></a>

                                    <a href="<?php echo base_url() . "index.php/welcome/management"; ?>">  <label for='op1'><img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/globe.png" alt="account" />TRACKING</label></a>


                                    <a href="#">  <label for='op3'><img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/UgandaFlagColors.PNG" alt="account" />COUNTRIES</label></a>

                                </div>
                            </div><! --/col-md-4 -->
                        </div><! --/END 1ST ROW OF PANELS -->


                        <! -- 3RD ROW OF PANELS -->


                        <! -- 5TH ROW OF PANELS -->
                        <div class="row">





                        </div><!-- /END 5TH ROW OF PANELS -->


                        <! -- 6TH ROW OF PANELS -->



                    </div>
                </div>
            </div><!--/.page-content-->
        </div><!--/.page-content-->

    </div><!--/.page-content-->







</body>
</html>
