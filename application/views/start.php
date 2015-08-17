<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Epi-track</title>
    <link href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= base_url(); ?>css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?= base_url(); ?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url(); ?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url(); ?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url(); ?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url(); ?>images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url() . "index.php/welcome/register"; ?>"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#main-slider"><i class="icon-android"></i></a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Outbreaks</a></li>
                        <li><a href="#pricing">Publications</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li> <a href="<?php echo base_url() . "index.php/welcome/register"; ?>"> Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->

    <section id="main-slider" class="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="carousel-content">
                           <div id="container3" style="width: 100%;height: 100%;"></div>    </div>
                </div>
            </div><!--/.item-->
            <div class="item">
                <div class="container">
                    <div class="carousel-content">
                        <h1>ShapeBootstrap.net</h1>
                        <p class="lead">Download free but 100% premium quaility twitter Bootstrap based WordPress and HTML themes <br>from shapebootstrap.net</p>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
        <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
        <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            <div class="box first">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="icon-apple icon-md icon-color1"></i>
                            <h4>iOS development</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="icon-android icon-md icon-color2"></i>
                            <h4>Android development</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="icon-windows icon-md icon-color3"></i>
                            <h4>Windows Phone development</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="icon-html5 icon-md icon-color4"></i>
                            <h4>Ruby on Rails development</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="icon-css3 icon-md icon-color5"></i>
                            <h4>Javascript development</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="icon-thumbs-up icon-md icon-color6"></i>
                            <h4>Responsive web design</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="portfolio">
        <div class="container">
            <div class="box">
                <div class="center gap">
                    <h2>Portfolio</h2>
                    <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac<br>turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                </div><!--/.center-->
                <ul class="portfolio-filter">
                    <li><a class="btn btn-primary active" href="#" data-filter="*">All</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".bootstrap">Bootstrap</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".html">HTML</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".wordpress">Wordpress</a></li>
                </ul><!--/#portfolio-filter-->
                <ul class="portfolio-items col-4">
                    <li class="portfolio-item apps">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?= base_url(); ?>images/portfolio/thumb/item1.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item1.jpg"><i class="icon-eye-open"></i></a>             
                                </div>
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla bootstrap">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?= base_url(); ?>images/portfolio/thumb/item2.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item2.jpg"><i class="icon-eye-open"></i></a>  
                                </div>
                            </div> 
                            <h5>Lorem ipsum dolor sit amet</h5>         
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item bootstrap wordpress">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?= base_url(); ?>images/portfolio/thumb/item3.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item3.jpg"><i class="icon-eye-open"></i></a>        
                                </div> 
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>          
                        </div>           
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla wordpress apps">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?= base_url(); ?>images/portfolio/thumb/item4.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item4.jpg"><i class="icon-eye-open"></i></a>          
                                </div>   
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>        
                        </div>           
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla html">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?= base_url(); ?>images/portfolio/thumb/item5.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item5.jpg"><i class="icon-eye-open"></i></a>          
                                </div>  
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>  
                        </div>       
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item wordpress html">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?= base_url(); ?>images/portfolio/thumb/item6.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item6.jpg"><i class="icon-eye-open"></i></a>           
                                </div>  
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>         
                        </div>           
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla html">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?= base_url(); ?>images/portfolio/thumb/item5.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item5.jpg"><i class="icon-eye-open"></i></a>          
                                </div>  
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>  
                        </div>       
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item wordpress html">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?= base_url(); ?>images/portfolio/thumb/item6.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item6.jpg"><i class="icon-eye-open"></i></a>           
                                </div>   
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>        
                        </div>         
                    </li><!--/.portfolio-item-->
                </ul>   
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="pricing">
        <div class="container">
            <div class="box">
                <div class="center">
                    <h2>See our Pricings</h2>
                    <p class="lead">Pellentesque habitant morbi tristique senectus et netus et <br>malesuada fames ac turpis egestas.</p>
                </div><!--/.center-->   
                <div class="big-gap"></div>
                <div id="pricing-table" class="row">
                    <div class="col-sm-4">
                        <ul class="plan">
                            <li class="plan-name">Basic</li>
                            <li class="plan-price">$29</li>
                            <li>5GB Storage</li>
                            <li>1GB RAM</li>
                            <li>400GB Bandwidth</li>
                            <li>10 Email Address</li>
                            <li>Forum Support</li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                        </ul>
                    </div><!--/.col-sm-4-->
                    <div class="col-sm-4">
                        <ul class="plan featured">
                            <li class="plan-name">Standard</li>
                            <li class="plan-price">$49</li>
                            <li>10GB Storage</li>
                            <li>2GB RAM</li>
                            <li>1TB Bandwidth</li>
                            <li>100 Email Address</li>
                            <li>Forum Support</li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                        </ul>
                    </div><!--/.col-sm-4-->
                    <div class="col-sm-4">
                        <ul class="plan">
                            <li class="plan-name">Advanced</li>
                            <li class="plan-price">$199</li>
                            <li>30GB Storage</li>
                            <li>5GB RAM</li>
                            <li>5TB Bandwidth</li>
                            <li>1000 Email Address</li>
                            <li>Forum Support</li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                        </ul>
                    </div><!--/.col-sm-4-->
                </div> 
            </div> 
        </div>
    </section><!--/#pricing-->

    <section id="about-us">
        <div class="container">
            <div class="box">
                <div class="center">
                    <h2>Meet the Team</h2>
                    <p class="lead">Pellentesque habitant morbi tristique senectus et netus et<br>malesuada fames ac turpis egestas.</p>
                </div>
                <div class="gap"></div>
                <div id="team-scroller" class="carousel scale">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="<?= base_url(); ?>images/team1.jpg" alt="" ></p>
                                        <h3>Agnes Smith<small class="designation">CEO &amp; Founder</small></h3>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="<?= base_url(); ?>images/team2.jpg" alt="" ></p>
                                        <h3>Donald Ford<small class="designation">Senior Vice President</small></h3>
                                    </div>
                                </div>        
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="<?= base_url(); ?>images/team3.jpg" alt="" ></p>
                                        <h3>Karen Richardson<small class="designation">Assitant Vice President</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="<?= base_url(); ?>images/team3.jpg" alt="" ></p>
                                        <h3>David Robbins<small class="designation">Co-Founder</small></h3>
                                    </div>
                                </div>   
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="<?= base_url(); ?>images/team1.jpg" alt="" ></p>
                                        <h3>Philip Mejia<small class="designation">Marketing Manager</small></h3>
                                    </div>
                                </div>     
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="<?= base_url(); ?>images/team2.jpg" alt="" ></p>
                                        <h3>Charles Erickson<small class="designation">Support Manager</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left-arrow" href="#team-scroller" data-slide="prev">
                        <i class="icon-angle-left icon-4x"></i>
                    </a>
                    <a class="right-arrow" href="#team-scroller" data-slide="next">
                        <i class="icon-angle-right icon-4x"></i>
                    </a>
                </div><!--/.carousel-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#about-us-->

    <section id="contact">
        <div class="container">
            <div class="box last">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Contact Form</h1>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-danger btn-lg">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--/.col-sm-6-->
                    <div class="col-sm-6">
                        <h1>Our Address</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                            <div class="col-md-6">
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                        </div>
                        <h1>Connect with us</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="icon-facebook icon-social"></i> Facebook</a></li>
                                    <li><a href="#"><i class="icon-google-plus icon-social"></i> Google Plus</a></li>
                                    <li><a href="#"><i class="icon-pinterest icon-social"></i> Pinterest</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="icon-linkedin icon-social"></i> Linkedin</a></li>
                                    <li><a href="#"><i class="icon-twitter icon-social"></i> Twitter</a></li>
                                    <li><a href="#"><i class="icon-youtube icon-social"></i> Youtube</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="#" title=""></a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                  
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?= base_url(); ?>js/jquery.js"></script>
    <script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>js/jquery.isotope.min.js"></script>
    <script src="<?= base_url(); ?>js/jquery.prettyPhoto.js"></script>
    <script src="<?= base_url(); ?>js/main.js"></script>
    
                    <script src="<?=  base_url();?>js/modernizr-1.5.min.js"></script>
              
<script type="text/javascript">
            $(function () {

                // Prepare demo data
                var data = [{ 'hc-key': 'ug-2595', value: 0 },
                    { 'hc-key': 'ug-7073', value: 1 },
                    { 'hc-key': 'ug-7074', value: 2 },
                    { 'hc-key': 'ug-7075', value: 3 },
                    { 'hc-key': 'ug-2785', value: 4 },
                    { 'hc-key': 'ug-2791', value: 5 },
                    { 'hc-key': 'ug-3385', value: 6 },
                    { 'hc-key': 'ug-3388', value: 7 },
                    { 'hc-key': 'ug-2786', value: 8 },
                    { 'hc-key': 'ug-7056', value: 9 },
                    { 'hc-key': 'ug-7084', value: 10 },
                    { 'hc-key': 'ug-7058', value: 11 },
                    { 'hc-key': 'ug-1678', value: 12 },
                    { 'hc-key': 'ug-1682', value: 13 },
                    { 'hc-key': 'ug-1683', value: 14 },
                    { 'hc-key': 'ug-1685', value: 15 },
                    { 'hc-key': 'ug-7072', value: 16 },
                    { 'hc-key': 'ug-2759', value: 17 },
                    { 'hc-key': 'ug-7051', value: 18 },
                    { 'hc-key': 'ug-2762', value: 19 },
                    { 'hc-key': 'ug-2767', value: 20 },
                    { 'hc-key': 'ug-2777', value: 21 },
                    { 'hc-key': 'ug-2778', value: 22 },
                    { 'hc-key': 'ug-2780', value: 23 },
                    { 'hc-key': 'ug-2781', value: 24 },
                    { 'hc-key': 'ug-2782', value: 25 },
                    { 'hc-key': 'ug-2783', value: 26 },
                    { 'hc-key': 'ug-2779', value: 27 },
                    { 'hc-key': 'ug-2784', value: 28 },
                    { 'hc-key': 'ug-3382', value: 29 },
                    { 'hc-key': 'ug-3384', value: 30 },
                    { 'hc-key': 'ug-3381', value: 31 },
                    { 'hc-key': 'ug-3383', value: 32 },
                    { 'hc-key': 'ug-3390', value: 33 },
                    { 'hc-key': 'ug-3386', value: 34 },
                    { 'hc-key': 'ug-3391', value: 35 },
                    { 'hc-key': 'ug-3392', value: 36 },
                    { 'hc-key': 'ug-3394', value: 37 },
                    { 'hc-key': 'ug-2750', value: 38 },
                    { 'hc-key': 'ug-7048', value: 39 },
                    { 'hc-key': 'ug-7080', value: 40 },
                    { 'hc-key': 'ug-7081', value: 41 },
                    { 'hc-key': 'ug-1684', value: 42 },
                    { 'hc-key': 'ug-7082', value: 43 },
                    { 'hc-key': 'ug-7068', value: 44 },
                    { 'hc-key': 'ug-7070', value: 45 },
                    { 'hc-key': 'ug-7049', value: 46 },
                    { 'hc-key': 'ug-2787', value: 47 },
                    { 'hc-key': 'ug-7055', value: 48 },
                    { 'hc-key': 'ug-2769', value: 49 },
                    { 'hc-key': 'ug-7052', value: 50 },
                    { 'hc-key': 'ug-2774', value: 51 },
                    { 'hc-key': 'ug-7059', value: 52 },
                    { 'hc-key': 'ug-7083', value: 53 },
                    { 'hc-key': 'ug-7057', value: 54 },
                    { 'hc-key': 'ug-2790', value: 55 },
                    { 'hc-key': 'ug-2776', value: 56 },
                    { 'hc-key': 'ug-7067', value: 57 },
                    { 'hc-key': 'ug-7065', value: 58 },
                    { 'hc-key': 'ug-7066', value: 59 },
                    { 'hc-key': 'ug-7069', value: 60 },
                    { 'hc-key': 'ug-7061', value: 61 },
                    { 'hc-key': 'ug-3389', value: 62 },
                    { 'hc-key': 'ug-7062', value: 63 },
                    { 'hc-key': 'ug-7063', value: 64 },
                    { 'hc-key': 'ug-7064', value: 65 },
                    { 'hc-key': 'ug-7086', value: 66 },
                    { 'hc-key': 'ug-2744', value: 67 },
                    { 'hc-key': 'ug-1679', value: 68 },
                    { 'hc-key': 'ug-1680', value: 69 },
                    { 'hc-key': 'ug-7054', value: 70 },
                    { 'hc-key': 'ug-1686', value: 71 },
                    { 'hc-key': 'ug-7078', value: 72 },
                    { 'hc-key': 'ug-1677', value: 73 },
                    { 'hc-key': 'ug-1688', value: 74 },
                    { 'hc-key': 'ug-1690', value: 75 },
                    { 'hc-key': 'ug-2745', value: 76 },
                    { 'hc-key': 'ug-2752', value: 77 },
                    { 'hc-key': 'ug-2754', value: 78 },
                    { 'hc-key': 'ug-1687', value: 79 },
                    { 'hc-key': 'ug-2757', value: 80 },
                    { 'hc-key': 'ug-7060', value: 81 },
                    { 'hc-key': 'ug-1689', value: 82 },
                    { 'hc-key': 'ug-2760', value: 83 },
                    { 'hc-key': 'ug-2761', value: 84 },
                    { 'hc-key': 'ug-2766', value: 85 },
                    { 'hc-key': 'ug-2765', value: 86 },
                    { 'hc-key': 'ug-2764', value: 87 },
                    { 'hc-key': 'ug-2749', value: 88 },
                    { 'hc-key': 'ug-2768', value: 89 },
                    { 'hc-key': 'ug-2763', value: 90 },
                    { 'hc-key': 'ug-2748', value: 91 },
                    { 'hc-key': 'ug-2771', value: 92 },
                    { 'hc-key': 'ug-2772', value: 93 },
                    { 'hc-key': 'ug-2775', value: 94 },
                    { 'hc-key': 'ug-2788', value: 95 },
                    { 'hc-key': 'ug-2789', value: 96 },
                    { 'hc-key': 'ug-3387', value: 97 },
                    { 'hc-key': 'ug-3393', value: 98 },
                    { 'hc-key': 'ug-7079', value: 99 },
                    { 'hc-key': 'ug-7076', value: 100 },
                    { 'hc-key': 'ug-2746', value: 101 },
                    { 'hc-key': 'ug-2747', value: 102 },
                    { 'hc-key': 'ug-2751', value: 103 },
                    { 'hc-key': 'ug-2758', value: 104 },
                    { 'hc-key': 'ug-2756', value: 105 },
                    { 'hc-key': 'ug-7053', value: 106 },
                    { 'hc-key': 'ug-2770', value: 107 },
                    { 'hc-key': 'ug-2773', value: 108 },
                    { 'hc-key': 'ug-1681', value: 109 },
                    { 'hc-key': 'ug-2753', value: 110 },
                    { 'hc-key': 'ug-2755', value: 111 }];

                    
                // Initiate the chart
                $('#container3').highcharts('Map', {
                    
                    title : {
                        text : 'students per district in Uganda'
                    },

                    subtitle : {
                        text : 'Source map: <a href="<?= base_url(); ?>js/ug-all.js">countries/ug/ug-all</a>'
                    },

                    mapNavigation: {
                        enabled: true,
                        buttonOptions: {
                            verticalAlign: 'bottom'
                        }
                    },

                    colorAxis: {
                        min: 0
                    },

                    series : [{
                        data : data,
                        mapData: Highcharts.maps['countries/ug/ug-all'],
                        joinBy: 'hc-key',
                        name: 'Random data',
                        states: {
                            hover: {
                                color: '#BADA55'
                            }
                        },
                        dataLabels: {
                            enabled: true,
                            format: '{point.name}'
                        }
                    }]
                });
            });
        </script>   
    
     <script src="<?= base_url(); ?>js/highmaps.js"></script>
 
	<script type="text/javascript" src="<?= base_url(); ?>js/highcharts.js"></script>

<script src="<?= base_url(); ?>js/ug-all.js"></script>
<script type="text/javascript"  src="<?= base_url(); ?>js/modules/exporting.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/highcharts-3d.js"></script>
 
</body>
</html>