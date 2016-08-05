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
        <link href="assets/css/index.css" rel="stylesheet" type="text/css"/>
        
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
                    <li class="start active">
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
                    <li>
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
                                <span data-translate="menu_dashboard">
                                    Dashboard
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
                                            <span data-translate="menu_dashboard">Dashboard</span>
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
                        <!-- BEGIN DASHBOARD STATS -->
                        <div class="row-fluid">
                            <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                                <div class="dashboard-stat blue">
                                    <div class="visual">
                                        <i class="icon-male"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number" id="empCount">   
                                            
                                        </div>
                                        <div class="desc" style="font-size: 15px">Present Employees</div>
                                        <!--<div class="desc">                           
                                            Employees
                                        </div>-->
                                    </div>
                                    <a class="more" href="#" id="Emp_ViewMore">
                                        <span data-translate="viewMore">View more</span>  
                                        <i class="m-icon-swapright m-icon-white"></i>
                                    </a>                 
                                </div>
                            </div>
                            <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                                <div class="dashboard-stat green">
                                    <div class="visual">
                                        <i class="icon-group"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number" id="ageRange">
                                            <?php 
                                                $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
                                                mysqli_select_db($con,"$db_name")or die("cannot select DB"); 

                                                //get distinct Doctor Details
                                                $sqlToGetMaxAvgRange = "Select b.ageRange as 'ageRange',b.avgChurn as 'maxProb'
                                                    From ( select concat(5 * round(age / 5), '-', 5 * round(age / 5) + 4) as `ageRange`, count(*) as `employeeCount`,avg(probability) as `avgChurn` 
                                                          from employeesit_predict 
                                                          group by 1 
                                                          order by age ) b 
                                                    where b.avgChurn = (Select max(d.avgChurn) as 'maxProb' 
                                                                        from ( select concat(5 * round(age / 5), '-', 5 * round(age / 5) + 4) as `ageRange`, count(*) as `employeeCount`,avg(probability) as `avgChurn` 
                                                                              from employeesit_predict 
                                                                              group by 1 
                                                                              order by age) d)"; 
                                                $result = mysqli_query($con,$sqlToGetMaxAvgRange);


                                                if ($row = mysqli_fetch_assoc($result)) {
                                                    $age = round($row['maxProb']*100);
                                                    $GLOBALS['ageRange'] = $row['ageRange'];
                                                }                                                 
                                                mysqli_close($con);
                                            ?>
                                        </div>
                                        <div class="desc" style="font-size: 15px"><?php echo $GLOBALS['ageRange']?></div>
                                        <!--<div class="desc">Age Range</div>-->
                                    </div>
                                    <a class="more" href="#" id="AgeGroup_ViewMore">
                                         <span data-translate="viewMoreAgeRange">View more | Age Range</span> 
                                         <i class="m-icon-swapright m-icon-white"></i>
                                    </a>                 
                                </div>
                            </div>
                            <div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
                                <div class="dashboard-stat purple">
                                    <div class="visual">
                                        <i class="icon-building"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number" id="deptPercent">
                                            <?php                                            
                                                $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
                                                mysqli_select_db($con,"$db_name")or die("cannot select DB"); 

                                                //get distinct Doctor Details
                                                $sqlToGetMaxDept = "select b.department as 'maxDept',b.avgProb as 'maxProb'
                                                    from (SELECT department,avg(probability) as 'avgProb' 
                                                          FROM `employeesit_predict` group by department) b
                                                    where b.avgProb=(select max(d.avgProb) as 'maxProb' 
                                                                     from (SELECT department,avg(probability) as 'avgProb' 
                                                                           FROM `employeesit_predict` 
                                                                           group by department) d)"; 
                                                $result = mysqli_query($con,$sqlToGetMaxDept);
                                                
                                                
                                                if ($row = mysqli_fetch_assoc($result)) {
                                                    $dept = round($row['maxProb']*100)."%";
                                                    $GLOBALS['department'] = $row['maxDept'];
                                                }                                                 
                                                mysqli_close($con);
                                            ?>
                                        </div>
                                        <div class="desc" style="font-size: 15px"><?php echo $GLOBALS['department']; ?></div>
                                        <!--<div class="desc">Department</div>-->
                                    </div>
                                    <a class="more" href="#" id="Dept_ViewMore">
                                         <span data-translate="viewMoreDept">View More | Department</span> 
                                         <i class="m-icon-swapright m-icon-white"></i>
                                    </a>                 
                                </div>
                            </div>
                            <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                                <div class="dashboard-stat yellow">
                                    <div class="visual">
                                        <i class="icon-info-sign"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number" id="reasonPercent">
                                            <?php                                            
                                                $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
                                                mysqli_select_db($con,"$db_name")or die("cannot select DB"); 

                                                //get distinct Doctor Details
                                                $sqlToGetMaxReason = "select d.Reason_To_Leave as 'maxReason',d.avgProb as 'maxProb'
                                                    from (SELECT Reason_To_Leave,avg(probability) as 'avgProb' 
                                                            FROM `employeesit_predict` 
                                                            group by Reason_To_Leave) d
                                                    where d.avgProb = (Select max(d.avgProb) as 'maxAvg'
                                                            from (SELECT Reason_To_Leave,avg(probability) as 'avgProb' 
                                                            FROM `employeesit_predict`
                                                            group by Reason_To_Leave) d)"; 
                                                $result = mysqli_query($con,$sqlToGetMaxReason);
                                                
                                                
                                                if ($row = mysqli_fetch_assoc($result)) {
                                                    $reason = round($row['maxProb']*100)."%";
                                                    $GLOBALS['maxReason'] = $row['maxReason'];
                                                }                                                 
                                                mysqli_close($con);
                                            ?>
                                        </div>
                                        <div class="desc" style="font-size: 15px"><?php echo $GLOBALS['maxReason']; ?></div>
                                        <!--<div class="desc">Factors</div>-->
                                    </div>
                                    <a class="more" href="#" id="Factor_ViewMore">
                                         <span data-translate="viewMoreFactors">View more | Factors</span> 
                                         <i class="m-icon-swapright m-icon-white"></i>
                                    </a>                 
                                </div>
                            </div>
                        </div>
                        <!-- END DASHBOARD STATS -->
                        <div class="clearfix"></div>
                        <div class="row-fluid">
                            <div class="span7">
                                <!-- BEGIN PORTLET -->
                                <div class="portlet" style="padding-top: 0px; padding-bottom: 0px">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <select id="churnComparisonField" class="form-control" style="margin-left: 5px; margin-top: 5px">
                                                <option>Department</option>
                                                <option>Job Role</option>
                                                <option>Age</option>
                                                <option>Salary</option>
                                                <option>Tenure</option>
                                            </select>
                                        </div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse"></a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                            <a href="javascript:;" class="reload"></a>
                                            <a href="javascript:;" class="remove"></a>
                                        </div>
                                        <!--<div class="tools">
                                            <div class="btn-group pull-right" data-toggle="buttons-radio">
                                                <a href="" class="btn mini">Past Churn Rate</a>
                                                <a href="" class="btn mini active">Future Churn Rage</a>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="portlet-body" style="padding-top: 0px">
                                        
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
                            
                            <div class="span5">
                            <!-- BEGIN STACK CHART CONTROLS PORTLET-->
                            <div class="portlet" style="padding-top: 0px; padding-bottom: 5px;">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <select id="comparisonField" class="form-control" style="margin-left: 5px; margin-top: 5px">
                                            <option>Department</option>
                                            <option>Job Role</option>
                                            <option>Age</option>
                                            <option>Salary</option>
                                            <option>Reason</option>
                                            <option>Tenure</option>
                                        </select>
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"></a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                        <a href="javascript:;" class="reload"></a>
                                        <a href="javascript:;" class="remove"></a>
                                    </div>
                                </div>
                                <div class="portlet-body" style="padding-top: 0px">
                                    <!--<form class="form-inline">
                                         <div class="form-group">
                                           <label for="exampleInputName2">Select a Field for Compare :</label>-- >
                                            <!--<select id="comparisonField" class="form-control">
                                                <option>Department</option>
                                                <option>Job Role</option>
                                            </select>
                                        </div>
                                    </form>-->


                                    <div id="chart_5" class="chart"></div>
                                </div>
                            </div>
                            <!-- END STACK CHART CONTROLS PORTLET-->
                            </div>
                        <!-- END PAGE CONTAINER--> 
                        </div>
        <!-- END PAGE -->
        </div>
                </div>
        <!-- END CONTAINER -->
        </div>
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
        <!-- Popups -->
        <!-- Employee Churn PopUp -->
        <div id="moreEmployeePopUp">
            <img src="assets/img/popup/closeicon.png" class="b-close"/>
            <div>
                <div class="row-fluid">
                    <div class="span12 popupHead">
                        <p>
                            <i class="icon-male"></i>
                            &nbsp;&nbsp;
                            <b>
                                <span data-translate="viewMoreEmployeeHead"> 
                                    More about present working Employees
                                </span>                                
                            </b>
                        </p>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 popupContent">
                        <div style="padding:10px;">
                            <table id="content" class="display nowrap tableContent" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>
                                            <span data-translate="employeeNameCol">
                                                Employee Name
                                            </span>
                                        </th>
                                        <th>
                                            <span data-translate="churnProbCol">
                                                Churn Probability(%)
                                            </span>
                                        </th>
                                        <th>
                                            <span data-translate="reasonToLeaveCol">
                                                Reason To Leave
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tfoot>

                                </tfoot>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 popupBottom">
                        <p>   
                            <span data-translate="empCount"> 
                                Employee Count : 
                            </span>
                            <b>
                                <span id="employeeCount"></span> 
                            </b>
                        </p>
                    </div>
                </div>    
            </div>
        </div>
        <!-- Employee Age Range PopUp -->
        <div id="moreAgeRangePopUp">
            <img src="assets/img/popup/closeicon.png" class="b-close"/>
            <div>
                <div class="row-fluid">
                    <div class="span12 popupHead">
                        <p>
                            <i class="icon-group"></i>
                            &nbsp;&nbsp;
                            <b>
                                <span data-translate="viewMoreAgeRangeHead"> 
                                    Churn Probability with Age Ranges
                                </span>                                
                            </b>
                        </p>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 popupContent">
                        <div style="padding:10px;">
                            <table id="content1" class="display nowrap tableContent" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>
                                            <span data-translate="ageRangeCol">
                                                Age Range
                                            </span>
                                        </th>
                                        <th>
                                            <span data-translate="churnProbCol">
                                                Churn Probability(%)
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tfoot>

                                </tfoot>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 popupBottom">
                        <p>                            
                            <span data-translate="churningAgeRange"> 
                                Highest Churning Age Range : 

                            </span> 
                            <b>
                                <?php echo $GLOBALS['ageRange'] ?> Age Range 
                            </b>
                        </p>
                    </div>
                </div>    
            </div>
        </div>
        <!-- Employee Department PopUp -->
        <div id="moreADeptPopUp">
            <img src="assets/img/popup/closeicon.png" class="b-close"/>
            <div>
                <div class="row-fluid">
                    <div class="span12 popupHead">
                        <p>
                            <i class="icon-building"></i>
                            &nbsp;&nbsp;
                            <b>
                                <span data-translate="viewMoreDepartmentHead"> 
                                    Churn Probability with Departments
                                </span>                                
                            </b>
                        </p>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 popupContent">
                        <div style="padding:10px;">
                            <table id="content2" class="display nowrap tableContent" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>
                                            <span data-translate="departmentCol">
                                                Department
                                            </span>
                                        </th>
                                        <th>
                                            <span data-translate="churnProbCol">
                                                Churn Probability(%)
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tfoot>

                                </tfoot>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 popupBottom">
                        <p>                            
                            <span data-translate="churningDept"> 
                                Highest Churning Department : 
                            </span> 
                            <b>
                                <?php echo $GLOBALS['department'] ?> Department
                            </b>
                        </p>
                    </div>
                </div>    
            </div>
        </div>
        <!-- Employee Churn Factor PopUp -->
        <div id="moreFactorPopUp">
            <img src="assets/img/popup/closeicon.png" class="b-close"/>
            <div>
                <div class="row-fluid">
                    <div class="span12 popupHead">
                        <p>
                            <i class="icon-info-sign"></i>
                            &nbsp;&nbsp;
                            <b>
                                <span data-translate="viewMoreReasonHead"> 
                                    Employee Churn with Reasons 
                                </span>                                
                            </b>
                        </p>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 popupContent">
                        <div style="padding:10px;">
                            <table id="content3" class="display nowrap tableContent" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>
                                            <span data-translate="churnFactCol">
                                                Churn Factor
                                            </span>
                                        </th>
                                        <th>
                                            <span data-translate="churnProbCol">
                                                Churn Probability(%)
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tfoot>

                                </tfoot>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 popupBottom">
                        <p>
                            <span data-translate="churningFactor"> 
                                Highest Churning Factor :
                            </span> 
                            <b>
                                <?php echo $GLOBALS['maxReason'] ?> Department
                            </b>
                        </p>
                    </div>
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
        <script src="assets/scripts/index.js" type="text/javascript"></script>
        <!-- POPUPS -->
        <script src="assets/scripts/popup/ModelMessage.js" type="text/javascript"></script>
        <script src="assets/scripts/popup/bootbox.js" type="text/javascript"></script>
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
                
            var percent_number_step = $.animateNumber.numberStepFactories.append('%')
            <?php                                            
                $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
                mysqli_select_db($con,"$db_name")or die("cannot select DB"); 

                //get distinct Doctor Details
                $sqlToGetEmployeeCount = "SELECT count(*) as 'count' FROM `employeesit_predict`"; 
                $result = mysqli_query($con,$sqlToGetEmployeeCount);
                if ($row = mysqli_fetch_assoc($result)) {
                    //echo $row['count'];
                    $empCount = $row['count'];
                }
                mysqli_close($con);
            ?>
            var empCount = '<?php echo $empCount; ?>';
            $('#empCount').animateNumber(
                    { 
                        number: empCount
                    },
                    2000
            );
    
            <?php       
                $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
                mysqli_select_db($con,"$db_name")or die("cannot select DB"); 

                //get distinct Doctor Details
                $sqlToGetMaxDept = "Select b.ageRange as 'ageRange',b.avgChurn as 'maxProb'
                    From ( select concat(5 * round(age / 5), '-', 5 * round(age / 5) + 4) as `ageRange`, count(*) as `employeeCount`,avg(probability) as `avgChurn` 
                          from employeesit_predict 
                          group by 1 
                          order by age ) b 
                    where b.avgChurn = (Select max(d.avgChurn) as 'maxProb' 
                                        from ( select concat(5 * round(age / 5), '-', 5 * round(age / 5) + 4) as `ageRange`, count(*) as `employeeCount`,avg(probability) as `avgChurn` 
                                              from employeesit_predict 
                                              group by 1 
                                              order by age) d)"; 
                $result = mysqli_query($con,$sqlToGetMaxDept);


                if ($row = mysqli_fetch_assoc($result)) {
                    $age = round($row['maxProb']*100);
                    //$GLOBALS['ageRange'] = $row['ageRange'];
                }                                                 
                mysqli_close($con);
            ?>
            var age = '<?php echo $age; ?>';
            $('#ageRange').animateNumber(
                { 
                    number: age,
                    numberStep: percent_number_step
                },
                2000
            );
               
            <?php                                            
                $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
                mysqli_select_db($con,"$db_name")or die("cannot select DB"); 

                //get distinct Doctor Details
                $sqlToGetMaxDept = "select b.department as 'maxDept',b.avgProb as 'maxProb'
                    from (SELECT department,avg(probability) as 'avgProb' 
                          FROM `employeesit_predict` group by department) b
                    where b.avgProb=(select max(d.avgProb) as 'maxProb' 
                                     from (SELECT department,avg(probability) as 'avgProb' 
                                           FROM `employeesit_predict` 
                                           group by department) d)"; 
                $result = mysqli_query($con,$sqlToGetMaxDept);


                if ($row = mysqli_fetch_assoc($result)) {
                    $dept = round($row['maxProb']*100)."%";
                    //$GLOBALS['department'] = $row['maxDept'];
                }                                                 
                mysqli_close($con);
            ?>
            var dept = '<?php echo $dept; ?>';
            $('#deptPercent').animateNumber(
                { 
                    number: dept,
                    numberStep: percent_number_step
                },
                2000
            );
    
            <?php                                            
                $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
                mysqli_select_db($con,"$db_name")or die("cannot select DB"); 

                //get distinct Doctor Details
                $sqlToGetMaxReason = "select d.Reason_To_Leave as 'maxReason',d.avgProb as 'maxProb'
                    from (SELECT Reason_To_Leave,avg(probability) as 'avgProb' 
                            FROM `employeesit_predict`
                            group by Reason_To_Leave) d
                    where d.avgProb = (Select max(d.avgProb) as 'maxAvg'
                            from (SELECT Reason_To_Leave,avg(probability) as 'avgProb' 
                            FROM `employeesit_predict`
                            group by Reason_To_Leave) d)"; 
                $result = mysqli_query($con,$sqlToGetMaxReason);


                if ($row = mysqli_fetch_assoc($result)) {
                    $reason = round($row['maxProb']*100)."%";
                    $GLOBALS['maxReason'] = $row['maxReason'];
                }                                                 
                mysqli_close($con);
            ?>
            var reason = '<?php echo $reason; ?>';
            $('#reasonPercent').animateNumber(
                { 
                    number: reason,
                    numberStep: percent_number_step
                },
                2000
            );
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>