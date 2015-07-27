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

<body style="background: #21409A;">





    <div class="page-content" style="background: #FFF;">
        <div class="row-fluid">
            <div class="span12">

                
                    <a href="#" class="brand">
                        <small>
                            <img  height="400px" width="300px" class="nav-user-photo" src="<?= base_url(); ?>images/logos.png" alt="User's Photo" />

                        </small>
                    </a><!--/.brand-->

                    <div class="span12"></div>

                <div class="row-fluid">
                    <div class="col-lg-12">
                          

                        <! -- 1st ROW OF PANELS -->
                        <div class="row-fluid">
                            
                              <div class="col-lg-4 col-md-4 col-sm-4 mb span4">
                             <div class="steps pn ">

                                    <a href="<?php echo base_url() . "index.php/welcome/register"; ?>"> <div class="green-header">
                                           <label class="green-header"><img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/man.png" alt="account" /> MY ACCOUNT</label>
                                        </div></a>
                                   <a href="<?php echo base_url() . "index.php/welcome/register"; ?>"> <div class="green-header">
                                           <label class="green-header"><img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/User.png" alt="account" /> USERS</label>
                                        </div></a>
                                  <a href="<?php echo base_url() . "index.php/welcome/register"; ?>"> <div class="green-header">
                                           <label class="green-header"><img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/pub.png" alt="account" /> PUBLISH</label>
                                        </div></a>
                                  <a href="<?php echo base_url() . "index.php/welcome/register"; ?>"> <div class="green-header">
                                           <label class="green-header"><img  height="50px" width="50px" class="nav-user-photo" src="<?= base_url(); ?>images/gps.png" alt="account" /> LOCATIONS</label>
                                        </div></a>

                                </div>
                             </div>
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
                           
                            </div><! --/col-md-4 -->
                        </div><! --/END 1ST ROW OF PANELS -->


                        <! -- 3RD ROW OF PANELS -->
   <div class="row-fluid">
                            
                           <div class="col-lg-4 col-md-4 col-sm-4 mb span4">
                                <div class="green-panel pn">
                                    <div class=" green-header">
                                        <h5>REPORTS</h5>
                                    </div>
                                    <p class="user">  <img  height="200px" width="200px" class="nav-user-photo" src="<?= base_url(); ?>images/chart.png" alt="partner" />
                                    </p>
                                </div>
                            </div><!-- /col-md-4 -->
                            <!-- TWITTER PANEL -->
                            <div class="col-lg-4 col-md-4 col-sm-4 mb span4">
                                <div class="green-panel pn">
                                    <div class=" green-header">
                                        <h5>GLOBAL CENTERS</h5>
                                    </div>
                                    <p class="user">  <img  height="200px" width="200px" class="nav-user-photo" src="<?= base_url(); ?>images/localization.png" alt="partner" />
                                    </p>
                                </div>
                            </div><!-- /col-md-4 -->
                           <div class="col-lg-4 col-md-4 col-sm-4 mb span4">
                                <div class="green-panel pn">
                                    <div class=" green-header">
                                        <h5>HELP</h5>
                                    </div>
                                    <p class="user">  <img  height="200px" width="200px" class="nav-user-photo" src="<?= base_url(); ?>images/help.png" alt="partner" />
                                    </p>
                                </div>
                            </div><!-- /col-md-4 -->
                    

                            <div class="col-lg-4 col-md-4 col-sm-4 mb span4">
                           
                            </div><! --/col-md-4 -->
                        </div><! --/END 1ST ROW OF PANELS -->

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
	<script src="<?= base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?= base_url(); ?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?= base_url(); ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--ace scripts-->

		<script src="<?= base_url(); ?>assets/js/ace-elements.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/ace.min.js"></script>
<script type="text/javascript">
			function show_box(id) {
			 $('.widget-box.visible').removeClass('visible');
			 $('#'+id).addClass('visible');
			}
		</script>
