<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Emp-Sense | FAQ</title>
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
                            <li class="active">
                                <a href="extra_faq.php" id="Faq" class="active">
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
                                    FAQ <small>general faq</small>
                                </h3>
                                <ul class="breadcrumb">
                                    <li>
                                        <i class="icon-home"></i>
                                        <a href="index.html">Home</a> 
                                        <i class="icon-angle-right"></i>
                                    </li>
                                    <li>
                                        <a href="#">Extra</a>
                                        <i class="icon-angle-right"></i>
                                    </li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                                <!-- END PAGE TITLE & BREADCRUMB-->
                            </div>
                        </div>
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN PAGE CONTENT-->
                        <div class="row-fluid">
                                <div class="span12">
                                    <div class="span3">
                                        <ul class="ver-inline-menu tabbable margin-bottom-10">
                                            <li class="active">
                                                <a href="#tab_1" data-toggle="tab">
                                                    <i class="icon-briefcase"></i> 
                                                    General Questions
                                                </a> 
                                                <span class="after"></span>                                    
                                            </li>
                                            <li><a href="#tab_2" data-toggle="tab"><i class="icon-group"></i> Membership</a></li>
                                            <li><a href="#tab_3" data-toggle="tab"><i class="icon-leaf"></i> Terms Of Service</a></li>
                                            <li><a href="#tab_1" data-toggle="tab"><i class="icon-info-sign"></i> License Terms</a></li>
                                            <li><a href="#tab_2" data-toggle="tab"><i class="icon-tint"></i> Payment Rules</a></li>
                                            <li><a href="#tab_3" data-toggle="tab"><i class="icon-plus"></i> Other Questions</a></li>
                                        </ul>
                                    </div>
                                    <div class="span9">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1">
                                                <div class="accordion in collapse" id="accordion1" style="height: auto;">
                                                    <div class="accordion-group">
                                                        <div class="accordion-heading">
                                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                                                            </a>
                                                        </div>
                                                        <div id="collapse_1" class="accordion-body collapse in">
                                                            <div class="accordion-inner">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_2">
                                                                Pariatur cliche reprehenderit enim eiusmod highr brunch ?
                                                                </a>
                                                            </div>
                                                            <div id="collapse_2" class="accordion-body collapse">
                                                                <div class="accordion-inner">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_3">
                                                                Food truck quinoa nesciunt laborum eiusmod nim eiusmod high life accusamus  ?
                                                                </a>
                                                            </div>
                                                            <div id="collapse_3" class="accordion-body collapse">
                                                                <div class="accordion-inner">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_4">
                                                                High life accusamus terry richardson ad ?
                                                                </a>
                                                            </div>
                                                            <div id="collapse_4" class="accordion-body collapse">
                                                                <div class="accordion-inner">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_5">
                                                                    Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ?
                                                                </a>
                                                            </div>
                                                            <div id="collapse_5" class="accordion-body collapse">
                                                                <div class="accordion-inner">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_6">
                                                                    Wolf moon officia aute non cupidatat skateboard dolor brunch ?
                                                                </a>
                                                            </div>
                                                            <div id="collapse_6" class="accordion-body collapse">
                                                                <div class="accordion-inner">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab_2">
                                                <div class="accordion in collapse" id="accordion2" style="height: auto;">
                                                    <div class="accordion-group">
                                                        <div class="accordion-heading">
                                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_1">
                                                                Cliche reprehenderit, enim eiusmod high life accusamus enim eiusmod ?
                                                            </a>
                                                        </div>
                                                        <div id="collapse_2_1" class="accordion-body collapse in">
                                                            <div class="accordion-inner">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_2">
                                                                    Pariatur cliche reprehenderit enim eiusmod high life non cupidatat skateboard dolor brunch ?
                                                                    </a>
                                                            </div>
                                                            <div id="collapse_2_2" class="accordion-body collapse">
                                                                    <div class="accordion-inner">
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_3">
                                                                    Food truck quinoa nesciunt laborum eiusmod ?
                                                                    </a>
                                                            </div>
                                                            <div id="collapse_2_3" class="accordion-body collapse">
                                                                    <div class="accordion-inner">
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_4">
                                                                    High life accusamus terry richardson ad squid enim eiusmod high ?
                                                                    </a>
                                                            </div>
                                                            <div id="collapse_2_4" class="accordion-body collapse">
                                                                    <div class="accordion-inner">
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_5">
                                                                    Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ?
                                                                    </a>
                                                            </div>
                                                            <div id="collapse_2_5" class="accordion-body collapse">
                                                                    <div class="accordion-inner">
                                                                            <p>
                                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                            </p>
                                                                            <p> 
                                                                                    moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor
                                                                            </p>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_6">
                                                                    Wolf moon officia aute non cupidatat skateboard dolor brunch ?
                                                                    </a>
                                                            </div>
                                                            <div id="collapse_2_6" class="accordion-body collapse">
                                                                    <div class="accordion-inner">
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_7">
                                                                    Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ?
                                                                    </a>
                                                            </div>
                                                            <div id="collapse_2_7" class="accordion-body collapse">
                                                                    <div class="accordion-inner">
                                                                            <p>
                                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                            </p>
                                                                            <p> 
                                                                                    moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor
                                                                            </p>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab_3">
                                                    <div class="accordion in collapse" id="accordion3" style="height: auto;">
                                                            <div class="accordion-group">
                                                                    <div class="accordion-heading">
                                                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_1">
                                                                            Cliche reprehenderit, enim eiusmod ?
                                                                            </a>
                                                                    </div>
                                                                    <div id="collapse_3_1" class="accordion-body collapse in">
                                                                            <div class="accordion-inner">
                                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="accordion-group">
                                                                    <div class="accordion-heading">
                                                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_2">
                                                                            Pariatur skateboard dolor brunch ?
                                                                            </a>
                                                                    </div>
                                                                    <div id="collapse_3_2" class="accordion-body collapse">
                                                                            <div class="accordion-inner">
                                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="accordion-group">
                                                                    <div class="accordion-heading">
                                                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_3">
                                                                            Food truck quinoa nesciunt laborum eiusmod ?
                                                                            </a>
                                                                    </div>
                                                                    <div id="collapse_3_3" class="accordion-body collapse">
                                                                            <div class="accordion-inner">
                                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="accordion-group">
                                                                    <div class="accordion-heading">
                                                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_4">
                                                                            High life accusamus terry richardson ad squid enim eiusmod high ?
                                                                            </a>
                                                                    </div>
                                                                    <div id="collapse_3_4" class="accordion-body collapse">
                                                                            <div class="accordion-inner">
                                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="accordion-group">
                                                                    <div class="accordion-heading">
                                                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_5">
                                                                            Reprehenderit enim eiusmod high  eiusmod ?
                                                                            </a>
                                                                    </div>
                                                                    <div id="collapse_3_5" class="accordion-body collapse">
                                                                            <div class="accordion-inner">
                                                                                    <p>
                                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                                    </p>
                                                                                    <p> 
                                                                                            moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor
                                                                                    </p>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="accordion-group">
                                                                    <div class="accordion-heading">
                                                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_6">
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                                                                            </a>
                                                                    </div>
                                                                    <div id="collapse_3_6" class="accordion-body collapse">
                                                                            <div class="accordion-inner">
                                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="accordion-group">
                                                                    <div class="accordion-heading">
                                                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_7">
                                                                            Reprehenderit enim eiusmod high life accusamus aborum eiusmod ?
                                                                            </a>
                                                                    </div>
                                                                    <div id="collapse_3_7" class="accordion-body collapse">
                                                                            <div class="accordion-inner">
                                                                                    <p>
                                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                                    </p>
                                                                                    <p> 
                                                                                            moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor
                                                                                    </p>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="accordion-group">
                                                                    <div class="accordion-heading">
                                                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_8">
                                                                            Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ?
                                                                            </a>
                                                                    </div>
                                                                    <div id="collapse_3_8" class="accordion-body collapse">
                                                                            <div class="accordion-inner">
                                                                                    <p>
                                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                                                                    </p>
                                                                                    <p> 
                                                                                            moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmodBrunch 3 wolf moon tempor
                                                                                    </p>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end span9-->                                   
                                </div>
                        </div>
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
        <script src="assets/scripts/languageDetect/languageDetector.js" type="text/javascript"></script>
        
        <!-- END CORE PLUGINS -->
        <script src="assets/scripts/app.js"></script>   
        <script>
            jQuery(document).ready(function() {    
               App.init(); // initlayout and core plugins		   
            });
        </script>
    </body>
    <!-- END BODY -->
</html>