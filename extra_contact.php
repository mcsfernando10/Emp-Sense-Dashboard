<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> 
<html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Emp-Sense | Contact Us</title>
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
        <!-- END GLOBAL MANDATORY STYLES -->
        <link rel="shortcut icon" href="assets/img/favicon.ico" />
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="page-header-fixed">
        <!-- BEGIN HEADER -->   
        <?php include_once("header.php"); ?>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->   
        <div class="page-container row-fluid">
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
                            <span class="title">Dashboard</span>                                        
                        </a>
                    </li>				
                    <li>
                        <a href="#">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Visual Charts</span>
                            <span class="arrow "></span>
                            </a>
                        <ul class="sub-menu">
                            <li >
                                <a href="charts_analytical.php" id="AnalyticalDesigner">
                                    <i class="icon-cogs"></i>
                                    Analytical Designer
                                </a>
                            </li>
                            <li >
                                <a href="charts_predictive.php" id="PredictiveAnalytics">
                                    <i class="icon-lightbulb"></i>
                                    Predictive Analytics
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#">
                            <i class="icon-gift"></i> 
                            <span class="title">Extra</span>
                            <span class="arrow open"></span>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li >
                                <!--a href="extra_profile.php" id="UserProfile">
                                    <i class="icon-user"></i>
                                    User Profile</a-->
                            </li>
                            <li >
                                <a href="extra_lock.php">
                                    <i class="icon-lock"></i>
                                    Lock Screen</a>
                            </li>
                            <li >
                                <a href="extra_faq.php" id="Faq">
                                    <i class="icon-info"></i>
                                    FAQ</a>
                            </li>
                            <li>
                                <a href="extra_about.php" id="AboutUs">
                                    <i class="icon-group"></i>
                                    About Us</a>
                            </li>
                            <li class="active">
                                <a href="extra_contact.php" id="ContactUs">
                                    <i class="icon-envelope-alt"></i>
                                    Contact Us</a>
                            </li>						
                        </ul>
                    </li>				
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN PAGE -->
            <div class="page-content">
                <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                <div id="portlet-config" class="modal hide">
                    <div class="modal-header">
                        <button data-dismiss="modal" class="close" type="button"></button>
                        <h3>portlet Settings</h3>
                    </div>
                    <div class="modal-body">
                        <p>Here will be a configuration form</p>
                    </div>
                </div>
                <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
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
                                Contact Us <small>contact us page</small>
                            </h3>
                            <ul class="breadcrumb">
                                <li>
                                    <i class="icon-home"></i>
                                    <a href="index.php">Home</a> 
                                    <i class="icon-angle-right"></i>
                                </li>
                                <li>
                                    <a href="#">Pages</a>
                                    <i class="icon-angle-right"></i>
                                </li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                            <!-- END PAGE TITLE & BREADCRUMB-->
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN PAGE CONTENT-->
                    <div class="row-fluid">
                        <div class="span12">
                            <!-- Google Map -->
                            <div class="row-fluid">
                                <div id="map" class="gmaps margin-bottom-40" style="height:400px;"></div>
                            </div>
                            <div class="row-fluid margin-bottom-20">
                                <div class="span6">
                                    <div class="space20"></div>
                                    <h3 class="form-section">Contacts</h3>
                                    <!--p>Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p-->
                                    <div class="well">
                                        <h4>Address</h4>
                                        <address>
                                            <strong>Sri Lanka Institute of Information Technology</strong><br>
                                            New Kandy Rd, <br>
                                            Malabe 10115 <br>
                                            <abbr title="Phone">P:</abbr> 011-7544801
                                        </address>
                                        <address>
                                            <strong>Email</strong><br>
                                            <a href="mailto:#">empsense@gmail.com</a>
                                        </address>
                                        <ul class="social-icons margin-bottom-10">
                                            <li><a href="#" data-original-title="facebook" class="facebook"></a></li>
                                            <li><a href="#" data-original-title="github" class="github"></a></li>
                                            <li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
                                            <li><a href="#" data-original-title="linkedin" class="linkedin"></a></li>
                                            <li><a href="#" data-original-title="rss" class="rss"></a></li>
                                            <li><a href="#" data-original-title="skype" class="skype"></a></li>
                                            <li><a href="#" data-original-title="twitter" class="twitter"></a></li>
                                            <li><a href="#" data-original-title="youtube" class="youtube"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="span6">
                                    <div class="space20"></div>
                                    <!-- BEGIN FORM-->
                                    <form action="#" class="horizontal-form">
                                        <h3 class="form-section">Feedback Form</h3>
                                        <div class="control-group">
                                            <label class="control-label">Name</label>
                                            <div class="controls">
                                                <input type="text" class="m-wrap span12" />
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" >Email</label>
                                            <div class="controls">
                                                <input type="text" class="m-wrap span12" >
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" >Message</label>
                                            <div class="controls">
                                                <textarea class="m-wrap span12" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn blue"><i class="icon-ok"></i> Send</button>
                                        <button type="button" class="btn">Cancel</button>
                                    </form>
                                    <!-- END FORM-->  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTENT-->
                </div>
                <!-- END PAGE CONTAINER-->  
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
        <!-- BEGIN CORE PLUGINS -->   <script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
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
        <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
        <script src="assets/plugins/gmaps/gmaps.js" type="text/javascript"></script>
        <script src="assets/scripts/app.js"></script>    
        <script src="assets/scripts/contact-us.js"></script>  
        <script>
            jQuery(document).ready(function() {    
               App.init();
               ContactUs.init();
            });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>