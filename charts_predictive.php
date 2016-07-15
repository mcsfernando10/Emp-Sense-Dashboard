<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Emp-Sense | Predictive Designer</title>
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
                            <span class="title">Dashboard</span>					
                        </a>
                    </li>				
                    <li class="active">
                        <a href="#">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Visual Charts</span>
                            <span class="arrow open"></span>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="charts_analytical.php" id="AnalyticalDesigner">
                                    <i class="icon-cogs"></i>
                                    Analytical Designer</a>
                            </li>
                            <li class="active">
                                <a href="charts_predictive.php" id="PredictiveAnalytics">
                                <i class="icon-lightbulb"></i>
                                Predictive Analytics</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href="#">
                            <i class="icon-gift"></i> 
                            <span class="title">Extra</span>
                            <span class="arrow "></span>
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
                            <li >
                                <a href="extra_about.php" id="AboutUs">
                                    <i class="icon-group"></i>
                                    About Us</a>
                            </li>
                            <li >
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
                                Visual Charts <small>visual charts & graphs</small>
                            </h3>
                            <ul class="breadcrumb">
                                <li>
                                    <i class="icon-home"></i>
                                    <a href="index.php">Home</a> 
                                    <i class="icon-angle-right"></i>
                                </li>
                                <li>
                                    <a href="#">Visual Charts</a>
                                    <i class="icon-angle-right"></i>
                                </li>
                                <li><a href="#">Predictive Designer</a></li>
                            </ul>
                            <!-- END PAGE TITLE & BREADCRUMB-->
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN PIE CHART PORTLET-->
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Churn - Job Role</div>
                                    <div class="tools">
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <h4>Highest Churning Job Role - <b>Job Role1</b></h4>
                                    <div id="pie_chart_6" class="chart"></div>
                                </div>
                            </div>                            
                        </div>
                        <div class="span6">
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Churn - Department</div>
                                    <div class="tools">
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <h4>Highest Churning Department - <b>Department1</b></h4>
                                    <div id="pie_chart_3" class="chart"></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Graph11</div>
                                    <div class="tools">
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <h4>The pie can be made interactive with hover and click events.</h4>
                                    <div id="interactive" class="chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="span6">
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Graph10</div>
                                    <div class="tools">
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <h4>A donut hole can be added.</h4>
                                    <div id="donut" class="chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PIE CHART PORTLET-->
                    <!-- BEGIN CHART PORTLETS-->
                    <div class="row-fluid">
                        <div class="span12">
                            <!-- BEGIN BASIC CHART PORTLET-->
                            <div class="portlet box yellow">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Basic Chart</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"></a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                        <a href="javascript:;" class="remove"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="chart_1" class="chart"></div>
                                </div>
                            </div>
                            <!-- END BASIC CHART PORTLET-->                 
                            <!-- BEGIN TRACKING CURVES PORTLET-->
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Tracking Curves</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"></a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                        <a href="javascript:;" class="remove"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="chart_3" class="chart"></div>
                                </div>
                            </div>
                            <!-- END TRACKING CURVES PORTLET-->
                            <!-- BEGIN DYNAMIC CHART PORTLET-->
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Dynamic Chart</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"></a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                        <a href="javascript:;" class="remove"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="chart_4" class="chart"></div>
                                </div>
                            </div>
                            <!-- END DYNAMIC CHART PORTLET-->
                            <!-- BEGIN STACK CHART CONTROLS PORTLET-->
                            <div class="portlet box yellow">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Stack Chart Controls</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"></a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                        <a href="javascript:;" class="remove"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="chart_5" style="height:350px;"></div>
                                    <div class="btn-toolbar">
                                        <div class="btn-group stackControls">
                                            <input type="button" class="btn blue" value="With stacking" />
                                            <input type="button" class="btn red" value="Without stacking" />
                                        </div>
                                        <div class="space5"></div>
                                        <div class="btn-group graphControls">
                                            <input type="button" class="btn" value="Bars" />
                                            <input type="button" class="btn" value="Lines" />
                                            <input type="button" class="btn" value="Lines with steps" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END STACK CHART CONTROLS PORTLET-->
                            <!-- BEGIN INTERACTIVE CHART PORTLET-->
                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Interactive Chart</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"></a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                        <a href="javascript:;" class="remove"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="chart_2" class="chart"></div>
                                </div>
                            </div>
                            <!-- END INTERACTIVE CHART PORTLET-->                 
                        </div>
                    </div>
                    <!-- END CHART PORTLETS-->
                    <!-- BEGIN PIE CHART PORTLET-->
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="portlet box yellow">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Default</div>
                                    <div class="tools">
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <h4>Default Pie with Legend.</h4>
                                    <div id="pie_chart" class="chart"></div>
                                </div>
                            </div>
                            <div class="portlet box purple">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Graph1</div>
                                    <div class="tools">
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <h4>Default Pie without Legend</h4>
                                    <div id="pie_chart_1" class="chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="span6">
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Graph2</div>
                                    <div class="tools">
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <h4>Added a semi-transparent background to the labels and a custom labelFormatter function.</h4>
                                    <div id="pie_chart_2" class="chart"></div>
                                </div>
                            </div>
                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Graph3</div>
                                    <div class="tools">
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <h4>Slightly more transparent label backgrounds and adjusted the radius values to place them within the pie.</h4>
                                    <div id="pie_chart_3" class="chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PIE CHART PORTLET-->
                    <!-- BEGIN PIE CHART PORTLET-->
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="portlet box yellow">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Graph4</div>
                                    <div class="tools">
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <h4>Semi-transparent, black-colored label background.</h4>
                                    <div id="pie_chart_4" class="chart"></div>
                                </div>
                            </div>
                            <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption"><i class="icon-reorder"></i>Graph5</div>
                                        <div class="tools">
                                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                            <a href="javascript:;" class="reload"></a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <h4>Semi-transparent, black-colored label background placed at pie edge.</h4>
                                        <div id="pie_chart_5" class="chart"></div>
                                    </div>
                            </div>
                        </div>
                        <div class="span6">
                                <div class="portlet box blue">
                                    <div class="portlet-title">
                                        <div class="caption"><i class="icon-reorder"></i>Graph6</div>
                                        <div class="tools">
                                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                            <a href="javascript:;" class="reload"></a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <h4>Added a semi-transparent background to the labels and a custom labelFormatter function.</h4>
                                        <div id="pie_chart_6" class="chart"></div>
                                    </div>
                                </div>
                                <div class="portlet box red">
                                    <div class="portlet-title">
                                        <div class="caption"><i class="icon-reorder"></i>Graph7</div>
                                        <div class="tools">
                                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                            <a href="javascript:;" class="reload"></a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <h4>Labels can be hidden if the slice is less than a given percentage of the pie (10% in this case).</h4>
                                        <div id="pie_chart_7" class="chart"></div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!-- END PIE CHART PORTLET-->
                    <!-- BEGIN PIE CHART PORTLET-->
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="portlet box yellow">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Graph8</div>
                                    <div class="tools">
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <h4>The radius can also be set to a specific size (even larger than the container itself).</h4>
                                    <div id="pie_chart_8" class="chart"></div>
                                </div>
                            </div>
                                <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption"><i class="icon-reorder"></i>Graph9</div>
                                        <div class="tools">
                                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                            <a href="javascript:;" class="reload"></a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <h4>The pie can be tilted at an angle.</h4>
                                        <div id="pie_chart_9" class="chart"></div>
                                    </div>
                                </div>
                        </div>
                        <div class="span6">
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Graph10</div>
                                    <div class="tools">
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <h4>A donut hole can be added.</h4>
                                    <div id="donut" class="chart"></div>
                                </div>
                            </div>
                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>Graph11</div>
                                    <div class="tools">
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <h4>The pie can be made interactive with hover and click events.</h4>
                                    <div id="interactive" class="chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PIE CHART PORTLET-->
                    <!-- END PAGE CONTENT-->
                </div>
                <!-- BEGIN PAGE CONTAINER--> 
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
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.pie.js"></script>
    <script src="assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="assets/plugins/flot/jquery.flot.crosshair.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/scripts/app.js"></script>
    <script src="assets/scripts/charts.js"></script>      
    <script>
        jQuery(document).ready(function() {    
           App.init(); // initlayout and core plugins                   
           Charts.init();
           Charts.initCharts();
           Charts.initPieCharts();
        });
    </script>	
</body>
<!-- END BODY -->
</html>