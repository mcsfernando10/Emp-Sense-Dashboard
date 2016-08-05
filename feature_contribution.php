<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Emp-Sense | Admin Dashboard</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="assets/plugins/bootstrap/css/bootstrap.custom.css" rel="stylesheet" type="text/css"/>        
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->          
        <link href="assets/css/feature_contribution.css" rel="stylesheet" type="text/css"/>
        
        <!-- Datatables -->
        <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css" rel="stylesheet">
        <!-- Datatables -->        
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        
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
                    <li>
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
                    <li class="start active">
                        <a href="feature_contribution.php" id="FeatureContribution">
                            <i class="icon-tags"></i> 
                            <span class="title" data-translate="menu_feature_con">
                                Feature Contribution
                            </span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li >
                        <a href="#">
                            <i class="icon-gift"></i> 
                            <span class="title" data-translate="menu_extra">Extra</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <!--li >
                                <a href="extra_profile.php" id="UserProfile">
                                    <i class="icon-user"></i>
                                    Feature Contribution
                                </a>
                            </li-->
                            <li>
                                <a href="extra_lock.php">
                                    <i class="icon-lock"></i>
                                    <span data-translate="menu_lockScreen">Lock Screen</span>
                                </a>
                            </li>
                            <li >
                                <a href="extra_faq.php" id="Faq">
                                    <i class="icon-info"></i>
                                    <span data-translate="menu_faq">FAQ</span>
                                </a>
                            </li>
                            <li >
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
                            <h4 class="page-title">
                                <span data-translate="menu_feature_con">
                                    Feature Contribution
                                </span> 
                                <small>
                                    <span data-translate="semiHead">
                                        statistics and more
                                    </span>
                                </small>
                            </h4>
                            <ul class="breadcrumb" style="margin-bottom: 7px">
                                    <li>
                                        <i class="icon-home"></i>
                                        <a href="index.php">
                                            <span data-translate="home">Home</span>
                                        </a> 
                                        <i class="icon-angle-right"></i>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span data-translate="menu_feature_con">
                                                Feature Contribution
                                            </span>
                                        </a>
                                    </li>
                                    <li class="pull-right no-text-shadow">
                                        <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
                                            <i class="icon-calendar"></i>
                                            <span></span>
                                            <i class="icon-angle-down"></i>
                                        </div>
                                    </li>
                            </ul>
                            <!-- END PAGE TITLE & BREADCRUMB-->
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <div id="dashboard">
                        
                    </div>
                </div>
            <!-- END CONTAINER -->
            </div>
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
        </div>        
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->   
        <script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
        <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
         
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        
        <!-- BEGIN PAGE LEVEL PLUGINS -->         
        <script src="assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        
        <!-- BEGIN PAGE LEVEL SCRIPTS -->       
        <script src="assets/scripts/app.js" type="text/javascript"></script>
        <script src="assets/scripts/feature_contribution.js" type="text/javascript"></script>
        <!-- POPUPS -->
        <script src="assets/scripts/popup/jquery.bpopup.min.js" type="text/javascript"></script>
        <!-- POPUPS -->
        
        <!-- NUMBER ANIMATE -->
        <script src="assets/scripts/jquery.animateNumber.min.js" type="text/javascript"></script>
        <!-- NUMBER ANIMATE -->
        
        <!-- Include jQuery Popup Overlay -->
        <!--script src="https://cdn.rawgit.com/vast-engineering/jquery-popup-overlay/1.7.13/jquery.popupoverlay.js"></script-->
        
        <!-- LANGUAGE -->
        <script src="assets/scripts/languageDetect/languageDetector.js" type="text/javascript"></script>
        <!-- LANGUAGE -->
        
        <!-- CHARTS -->
        <script src="assets/scripts/highcharts.js"></script>
        <script src="assets/scripts/exporting.js"></script>
        <!-- CHARTS -->
        
        <!-- DataTables -->
        <script src="assets/scripts/dataTables/jquery.dataTables.min.js"></script>
	<script src="assets/scripts/dataTables/dataTables.buttons.min.js"></script>
	<script src="assets/scripts/dataTables/buttons.flash.min.js"></script>
	<script src="assets/scripts/dataTables/jszip.min.js"></script>
	<script src="assets/scripts/dataTables/pdfmake.min.js"></script>
	<script src="assets/scripts/dataTables/vfs_fonts.js"></script>
	<script src="assets/scripts/dataTables/buttons.html5.min.js"></script>
	<script src="assets/scripts/dataTables/buttons.print.min.js"></script>
        <!-- DataTables -->
        
        <!-- END PAGE LEVEL SCRIPTS -->         
        
        <script type="text/javascript">
            jQuery(document).ready(function() {    
               App.init(); // initlayout and core plugins
               Index.init();
               //Index.initJQVMAP(); // init index page's custom scripts
               //Index.initCalendar(); // init index page's custom scripts
               Index.initCharts(); // init index page's custom scripts
               //Index.initChat();
               //Index.initMiniCharts();
               //Index.initIntro();
               //Tasks.initDashboardWidget();
            });
        </script>
                
            
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>

