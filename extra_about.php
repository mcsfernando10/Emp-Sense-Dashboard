<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Emp-Sense | Admin Dashboard</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->        
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/pages/about-us.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
        <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES --> 
        <link href="assets/css/pages/tasks.css" rel="stylesheet" type="text/css" media="screen"/>
        <!-- END PAGE LEVEL STYLES -->
        <link rel="shortcut icon" href="assets/img/favicon.ico" />
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="page-header-fixed">
        <?php include_once("header.php"); ?>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar nav-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->        
                <ul class="page-sidebar-menu">
                    <li>
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <div class="sidebar-toggler hidden-phone"></div>
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    </li>
                    <li>
                        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                        <form class="sidebar-search">
                            <div class="input-box">
                                <a href="javascript:;" class="remove"></a>
                                <input type="text" placeholder="Search..." />
                                <input type="button" class="submit" value=" " />
                            </div>
                        </form>
                        <!-- END RESPONSIVE QUICK SEARCH FORM -->
                    </li>
                    <li class="start">
                        <a href="index.php" id="Dashboard">
                            <i class="icon-dashboard"></i> 
                            <span class="title" data-translate="menu_dashboard">
                                Dashboard
                            </span>
                            <span class="selected"></span>
                        </a>
                    </li>				
                    <li>
                        <a href="#">
                            <i class="icon-bar-chart"></i>
                            <span class="title" data-translate="menu_visualCharts">
                                Visual Charts
                            </span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="charts_analytical.php" id="AnalyticalDesigner">
                                    <i class="icon-cogs"></i>
                                    <span data-translate="menu_analytical">
                                        Analytical Designer
                                    </span>
                                </a>
                            </li>
                            <li >
                                <a href="charts_predictive.php" id="PredictiveAnalytics">
                                    <i class="icon-lightbulb"></i>
                                    <span data-translate="menu_predictive">
                                        Predictive Analytics
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>                
                    <li class="active">
                        <a href="#">
                            <i class="icon-gift"></i> 
                            <span class="title" data-translate="menu_extra">Extra</span>
                            <span class="arrow open"></span>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <!--li >
                                <a href="extra_profile.php" id="UserProfile">
                                    <i class="icon-user"></i>
                                    User Profile</a>
                            </li-->
                            <li>
                                <a href="extra_lock.php">
                                    <i class="icon-lock"></i>
                                    <span data-translate="menu_lockScreen">Lock Screen</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra_faq.php" id="Faq" class="active">
                                    <i class="icon-info"></i>
                                    <span data-translate="menu_faq">FAQ</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="extra_about.php" id="AboutUs">
                                    <i class="icon-group"></i>
                                    <span data-translate="menu_about_us">About Us</span>
                                </a>
                            </li>
                            <li >
                                <a href="extra_contact.php" id="ContactUs">
                                    <i class="icon-envelope-alt"></i>
                                    <span data-translate="menu_contact_us">Contact Us</span>
                                </a>
                            </li>						
                        </ul>
                    </li>				
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN PAGE -->
            <div class="page-content">
                <!-- BEGIN CONTAINER -->   
                <div class="page-container row-fluid">		
                    <!-- BEGIN PAGE CONTAINER-->
                    <div class="container-fluid">
                        <!-- BEGIN PAGE HEADER-->
                        <div class="row-fluid">
                            <div class="span12">
                                <!-- BEGIN STYLE CUSTOMIZER -->
                                <div class="color-panel hidden-phone">
                                    <div class="color-mode-icons icon-color"></div>
                                    <div class="color-mode-icons icon-color-close"></div>
                                    <div class="color-mode">
                                        <p>THEME COLOR</p>
                                        <ul class="inline">
                                            <li class="color-black current color-default" data-style="default"></li>
                                            <li class="color-blue" data-style="blue"></li>
                                            <li class="color-brown" data-style="brown"></li>
                                            <li class="color-purple" data-style="purple"></li>
                                            <li class="color-grey" data-style="grey"></li>
                                            <li class="color-white color-light" data-style="light"></li>
                                        </ul>
                                        <label>
                                            <span>Layout</span>
                                            <select class="layout-option m-wrap small">
                                                <option value="fluid" selected>Fluid</option>
                                                <option value="boxed">Boxed</option>
                                            </select>
                                        </label>
                                        <label>
                                            <span>Header</span>
                                            <select class="header-option m-wrap small">
                                                <option value="fixed" selected>Fixed</option>
                                                <option value="default">Default</option>
                                            </select>
                                        </label>
                                        <label>
                                            <span>Sidebar</span>
                                            <select class="sidebar-option m-wrap small">
                                                <option value="fixed">Fixed</option>
                                                <option value="default" selected>Default</option>
                                            </select>
                                        </label>
                                        <label>
                                            <span>Footer</span>
                                            <select class="footer-option m-wrap small">
                                                <option value="fixed">Fixed</option>
                                                <option value="default" selected>Default</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <!-- END BEGIN STYLE CUSTOMIZER --> 
                                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                                <h3 class="page-title">
                                        About Us <small>about us page</small>
                                </h3>
                                <ul class="breadcrumb">
                                    <li>
                                        <i class="icon-home"></i>
                                        <a href="index.html">Home</a> 
                                        <i class="icon-angle-right"></i>
                                    </li>
                                    <li>
                                        <a href="#">Pages</a>
                                        <i class="icon-angle-right"></i>
                                    </li>
                                    <li><a href="#">About Us</a></li>
                                </ul>
                                <!-- END PAGE TITLE & BREADCRUMB-->
                            </div>
                        </div>
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN PAGE CONTENT-->
                        <!--div class="row-fluid margin-bottom-30">
                                <div class="span6">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                        <ul class="unstyled margin-top-10 margin-bottom-10">
                                                <li><i class="icon-ok"></i> Nam liber tempor cum soluta</li>
                                                <li><i class="icon-ok"></i> Mirum est notare quam</li>
                                                <li><i class="icon-ok"></i> Lorem ipsum dolor sit amet</li>
                                                <li><i class="icon-ok"></i> Mirum est notare quam</li>
                                        </ul>
                                        <!-- Blockquotes -->
                                        <!--blockquote class="hero">
                                                <p>Lorem ipsum dolor sit amet, consectetuer sed diam nonummy nibh euismod tincidunt. </p>
                                                <small>Bob Nilson</small>
                                        </blockquote>
                                </div>
                                <div class="span6">
                                        <iframe src="http://player.vimeo.com/video/22439234" style="width:100%; height:327px;border:0" allowfullscreen></iframe> 
                                </div>
                        </div>
                        <!--/row-fluid-->   
                        <!-- Meer Our Team -->
                        <div class="headline">
                                <h3>Meet Our Team</h3>
                        </div>
                        <ul class="thumbnails">
                                <li class="span3">
                                    <div class="meet-our-team">
                                        <h4>Dr. Rohan Samarasinghe   <small>Supervisor</small></h4>
                                        <img src="assets/img/pages/doctor_rohan.png" alt="" />
                                        <div class="team-info">
                                            <ul class="social-icons pull-left">
                                                <p></p>
                                                <li><a href="#" data-original-title="facebook" class="facebook"></a></li>
                                                <li><a href="#" data-original-title="linkedin" class="linkedin"></a></li>
                                                <li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
                                                <li><a href="#" data-original-title="skype" class="skype"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="span2">
                                    <div class="meet-our-team">
                                        <h4>Darrel Rayen   <small>Developer</small></h4>
                                        <img src="assets/img/pages/darrel.jpg" alt="" />
                                        <div class="team-info">
                                            <ul class="social-icons pull-left">
                                                <p></p>
                                                <li><a target="_blank" href="https://www.facebook.com/darrel.rayen?fref=ts" data-original-title="facebook" class="facebook"></a></li>
                                                <li><a target="_blank" href="#" data-original-title="linkedin" class="linkedin"></a></li>
                                                <li><a target="_blank" href="https://plus.google.com/u/0/111219632461734297829/posts" data-original-title="Goole Plus" class="googleplus"></a></li>
                                                <li><a href="skype:anthonydarry?chat" data-original-title="skype" class="skype"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="span2">
                                    <div class="meet-our-team">
                                        <h4>Chinthaka Suren   <small>Developer</small></h4>
                                        <img src="assets/img/pages/chinthaka.jpg" alt="" />
                                        <div class="team-info">
                                            <ul class="social-icons pull-left">
                                                <p></p>
                                                <li><a target="_blank" href="https://www.facebook.com/chinthaka.suren?fref=ts" data-original-title="facebook" class="facebook"></a></li>
                                                <li><a target="_blank" href="#" data-original-title="linkedin" class="linkedin"></a></li>
                                                <li><a target="_blank" href="https://plus.google.com/u/0/102698231877384744047/posts" data-original-title="Goole Plus" class="googleplus"></a></li>
                                                <li><a href="skype:mcsfernando10?chat" data-original-title="skype" class="skype"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="span2">
                                    <div class="meet-our-team">
                                        <h4>Nirmal Madasekera   <small>Developer</small></h4>
                                        <img src="assets/img/pages/nirmal.jpg" alt="" />
                                        <div class="team-info">
                                            <ul class="social-icons pull-left">
                                                <p></p>
                                                <li><a target="_blank" href="https://www.facebook.com/adenjoes4345?fref=ts" data-original-title="facebook" class="facebook"></a></li>
                                                <li><a target="_blank" href="#" data-original-title="linkedin" class="linkedin"></a></li>
                                                <li><a target="_blank" href="https://plus.google.com/u/0/110004944356593682782/posts" data-original-title="Goole Plus" class="googleplus"></a></li>
                                                <li><a href="skype:nirmal.madasekera?chat" data-original-title="skype" class="skype"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="span2">
                                    <div class="meet-our-team">
                                        <h4>Lakini Sithara   <small>Developer</small></h4>
                                        <img src="assets/img/pages/lakini.jpg" alt="" />
                                        <div class="team-info">
                                            <ul class="social-icons pull-left">
                                                <p></p>
                                                <li><a target="_blank" href="https://www.facebook.com/lakini.senanayaka?fref=ts" data-original-title="facebook" class="facebook"></a></li>
                                                <li><a target="_blank" href="#" data-original-title="linkedin" class="linkedin"></a></li>
                                                <li><a target="_blank" href="https://plus.google.com/u/0/110809094733488533934/posts" data-original-title="Goole Plus" class="googleplus"></a></li>
                                                <li><a href="skype:lakiniss1992?chat" data-original-title="skype" class="skype"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                        </ul>
                        <!--/thumbnails-->
                        <!-- //End Meer Our Team -->        
                        <!-- END PAGE CONTENT-->
                    </div>
                    <!-- END PAGE CONTAINER-->		  
                </div>
                <!-- END CONTAINER -->
            </div>
            <!-- END PAGE -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="footer">
            <div class="footer-inner">
                2016 &copy; Emp - Sense by Sri Lanka Institute of Information Technology.
            </div>
            <div class="footer-tools">
                <span class="go-top">
                <i class="icon-angle-up"></i>
                </span>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->   
        <script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
        <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
        <!--[if lt IE 9]>
        <script src="assets/plugins/excanvas.min.js"></script>
        <script src="assets/plugins/respond.min.js"></script>  
        <![endif]-->   
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
        <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
        <script src="assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
        <script src="assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
        <script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/scripts/app.js" type="text/javascript"></script>
        <script src="assets/scripts/index.js" type="text/javascript"></script>
        <script src="assets/scripts/tasks.js" type="text/javascript"></script>    
        <script src="assets/scripts/languageDetect/languageDetector.js" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
        <script src="assets/plugins/gmaps/gmaps.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
        <!-- END PAGE LEVEL SCRIPTS -->  
        <script>
                jQuery(document).ready(function() {    
                   App.init(); // initlayout and core plugins
                   Index.init();
                   Index.initJQVMAP(); // init index page's custom scripts
                   Index.initCalendar(); // init index page's custom scripts
                   Index.initCharts(); // init index page's custom scripts
                   Index.initChat();
                   Index.initMiniCharts();
                   Index.initIntro();
                   Tasks.initDashboardWidget();
                });
        </script>
    </body>
    <!-- END BODY -->
</html>