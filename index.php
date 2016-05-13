<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
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
				<li class="start active">
                                    <a href="index.php" id="Dashboard">
					<i class="icon-dashboard"></i> 
					<span class="title">Dashboard</span>
                                        <span class="selected"></span>
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
							Analytical Designer</a>
						</li>
						<li >
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
                                                    <a href="extra_profile.php" id="UserProfile">
							<i class="icon-user"></i>
							User Profile</a>
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
                                    Dashboard <small>statistics and more</small>
                            </h3>
                            <ul class="breadcrumb">
                                    <li>
                                            <i class="icon-home"></i>
                                            <a href="index.php">Home</a> 
                                            <i class="icon-angle-right"></i>
                                    </li>
                                    <li><a href="#">Dashboard</a></li>
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
                <!-- BEGIN DASHBOARD STATS -->
                <div class="row-fluid">
                    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                        <div class="dashboard-stat blue">
                            <div class="visual">
                                    <i class="icon-male"></i>
                            </div>
                            <div class="details">
                                    <div class="number">
                                            1349
                                    </div>
                                    <div class="desc">                           
                                            Employees
                                    </div>
                            </div>
                            <a class="more" href="#" id="Emp_ViewMore">
                            View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>                 
                        </div>
                    </div>
                    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                        <div class="dashboard-stat green">
                            <div class="visual">
                                    <i class="icon-warning-sign"></i>
                            </div>
                            <div class="details">
                                    <div class="number">45%</div>
                                    <div class="desc">Churn Rate</div>
                            </div>
                            <a class="more" href="#">
                            View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>                 
                        </div>
                    </div>
                    <div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
                        <div class="dashboard-stat purple">
                            <div class="visual">
                                    <i class="icon-building"></i>
                            </div>
                            <div class="details">
                                    <div class="number">89%</div>
                                    <div class="desc">Departments</div>
                            </div>
                            <a class="more" href="#">
                            View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>                 
                        </div>
                    </div>
                    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                        <div class="dashboard-stat yellow">
                            <div class="visual">
                                    <i class="icon-info-sign"></i>
                            </div>
                            <div class="details">
                                    <div class="number">60%</div>
                                    <div class="desc">Factors</div>
                            </div>
                            <a class="more" href="#">
                            View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>                 
                        </div>
                    </div>
                </div>
                <!-- END DASHBOARD STATS -->
                <div class="clearfix"></div>
                <div class="row-fluid">
                    <div class="span6">
                        <!-- BEGIN PORTLET -->
                        <div class="portlet solid bordered light-grey">
                            <div class="portlet-title">
                                <div class="caption"><i class="icon-bar-chart"></i>Site Visits</div>
                                <div class="tools">
                                    <div class="btn-group pull-right" data-toggle="buttons-radio">
                                            <a href="" class="btn mini">Users</a>
                                            <a href="" class="btn mini active">Feedbacks</a>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="site_statistics_loading">
                                    <img src="assets/img/loading.gif" alt="loading" />
                                </div>
                                <div id="site_statistics_content" class="hide">
                                    <div id="site_statistics" class="chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET -->
                    </div>
                    <div class="span6">
                        <!-- BEGIN PORTLET -->
                        <div class="portlet solid light-grey bordered">
                            <div class="portlet-title">
                                <div class="caption"><i class="icon-bullhorn"></i>Activities</div>
                                <div class="tools">
                                    <div class="btn-group pull-right" data-toggle="buttons-radio">
                                        <a href="#" id="test" class="btn blue mini active">Users</a>
                                        <a href="" class="btn blue mini">Orders</a>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="site_activities_loading">
                                    <img src="assets/img/loading.gif" alt="loading" />
                                </div>
                                <div id="site_activities_content" class="hide">
                                    <div id="site_activities" style="height:100px;"></div>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET-->
                        <!-- BEGIN PORTLET-->
                        <div class="portlet solid bordered light-grey">
                            <div class="portlet-title">
                                <div class="caption"><i class="icon-signal"></i>Server Load</div>
                                <div class="tools">
                                    <div class="btn-group pull-right" data-toggle="buttons-radio">
                                        <a href="" class="btn red mini active">
                                        <span class="hidden-phone">Database</span>
                                        <span class="visible-phone">DB</span></a>
                                        <a href="" class="btn red mini">Web</a>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="load_statistics_loading">
                                    <img src="assets/img/loading.gif" alt="loading" />
                                </div>
                                <div id="load_statistics_content" class="hide">
                                    <div id="load_statistics" style="height:108px;"></div>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET-->
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row-fluid">
                    <div class="span6">
                        <div class="portlet box purple">
                            <div class="portlet-title">
                                <div class="caption"><i class="icon-calendar"></i>General Stats</div>
                                <div class="actions">
                                    <a href="javascript:;" class="btn yellow easy-pie-chart-reload"><i class="icon-repeat"></i> Reload</a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row-fluid">
                                    <div class="span4">
                                        <div class="easy-pie-chart">
                                            <div class="number transactions"  data-percent="55"><span>+55</span>%</div>
                                            <a class="title" href="#">Transactions <i class="m-icon-swapright"></i></a>
                                        </div>
                                    </div>
                                    <div class="margin-bottom-10 visible-phone"></div>
                                    <div class="span4">
                                        <div class="easy-pie-chart">
                                            <div class="number visits"  data-percent="85"><span>+85</span>%</div>
                                            <a class="title" href="#">New Visits <i class="m-icon-swapright"></i></a>
                                        </div>
                                    </div>
                                    <div class="margin-bottom-10 visible-phone"></div>
                                    <div class="span4">
                                        <div class="easy-pie-chart">
                                            <div class="number bounce"  data-percent="46"><span>-46</span>%</div>
                                            <a class="title" href="#">Bounce <i class="m-icon-swapright"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption"><i class="icon-calendar"></i>Server Stats</div>
                                <div class="tools">
                                    <a href="" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="" class="reload"></a>
                                    <a href="" class="remove"></a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row-fluid">
                                    <div class="span4">
                                        <div class="sparkline-chart">
                                            <div class="number" id="sparkline_bar"></div>
                                            <a class="title" href="#">Network <i class="m-icon-swapright"></i></a>
                                        </div>
                                    </div>
                                    <div class="margin-bottom-10 visible-phone"></div>
                                    <div class="span4">
                                        <div class="sparkline-chart">
                                            <div class="number" id="sparkline_bar2"></div>
                                            <a class="title" href="#">CPU Load <i class="m-icon-swapright"></i></a>
                                        </div>
                                    </div>
                                    <div class="margin-bottom-10 visible-phone"></div>
                                    <div class="span4">
                                        <div class="sparkline-chart">
                                            <div class="number" id="sparkline_line"></div>
                                            <a class="title" href="#">Load Rate <i class="m-icon-swapright"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
	<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
	<script src="assets/plugins/gmaps/gmaps.js" type="text/javascript"></script>
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
	<script type="text/javascript">
            /*$(document).ready(function(){
				 $("#Rightcontent").load("dashboard.html");
				 $('.page-sidebar-menu').on('click', 'li', function() {
					$('.page-sidebar-menu li.active').removeClass('active');
					$(this).addClass('active');
				 });
                 $("#Dashboard").click(function(){
                     $("#Rightcontent").load("dashboard.html");
                     $('.page-sidebar-menu li.active').removeClass('active');
                     $(this).addClass('active');
                     $(this).add('span').class('selected');
                 });
                 
                 $("#AnalyticalDesigner").click(function(){
                     $("#Rightcontent").load("charts.html");
                     $(this).add('span').class('selected');
                 });
                 
                 $("#PredictiveAnalytics").click(function(){
                     $("#Rightcontent").load("charts.html");
                 });
				 $("#UserProfile").click(function(){
                     $("#Rightcontent").load("extra_profile.html");
                 });
				 $("#Faq").click(function(){
                     $("#Rightcontent").load("extra_faq.html");
                 });
				 $("#AboutUs").click(function(){
                     $("#Rightcontent").load("extra_about.html");
                 });
				 $("#ContactUs").click(function(){
                     $("#Rightcontent").load("extra_contact.html");
                 });
            });*/
        </script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>