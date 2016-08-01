<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
            <meta charset="utf-8" />
            <title>Emp-Sense | Analytical Designer</title>
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
            <link href="assets/css/charts_analytics.css" rel="stylesheet" type="text/css"/>
            <!-- END GLOBAL MANDATORY STYLES -->
            <link rel="shortcut icon" href="assets/img/favicon.ico" />
            <!-- Datatables -->
            <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
            <link href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css" rel="stylesheet">
            <!-- Datatables -->
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
                    <li class="active">
                        <a href="#">
                            <i class="icon-bar-chart"></i>
                            <span class="title">
                                <span class="title" data-translate="menu_visualCharts">
                                    Visual Charts
                                </span>                                    
                            </span>
                            <span class="arrow open"></span>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="active">
                                <a href="charts_analytical.php" id="AnalyticalDesigner">
                                    <i class="icon-cogs"></i>
                                    <span data-translate="menu_analytical">
                                        Analytical Designer
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="charts_predictive.php" id="PredictiveAnalytics">
                                    <i class="icon-lightbulb"></i>
                                    <span data-translate="menu_predictive">
                                        Predictive Analytics
                                    </span>
                                </a>
                            </li>
                        </ul>
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
                                    User Profile</a>
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
                                                    <h3 class="page-title" style="margin-top: 7px; margin-bottom: 5px">
                                                        Analytical Designer <small>visual charts & graphs</small>
                                                    </h3>
                                                    <ul class="breadcrumb" style="margin-bottom: 13px">
                                                        <li>
                                                            <i class="icon-home"></i>
                                                            <a href="index.php">Home</a> 
                                                            <i class="icon-angle-right"></i>
                                                        </li>
                                                        <li>
                                                            <a href="#">Visual Charts</a>
                                                            <i class="icon-angle-right"></i>
                                                        </li>
                                                        <li><a href="#">Analytical Designer</a></li>
                                                    </ul>
                                                    <!-- END PAGE TITLE & BREADCRUMB-->
                                            </div>
                                    </div>
                                    <!-- END PAGE HEADER-->
                                    <!-- BEGIN CHART PORTLETS-->
                                    <div id ="chartOrTableCon" align="center" style="margin-bottom: 0px;  padding-left: 10px; color: #1E90FF">
                                        <div class="row-fluid">
                                            <div class="span5" align="right">
                                                <form class="form-inline">
                                                    <div class="form-group">
                                                        <label for="probability" style="padding-right: 15px">Probability:</label>
                                                        <select id="probabilityField" class="form-control" name="probabField">
                                                            <option value="0.9">90%</option>
                                                            <option value="0.8">80%</option>
                                                            <option value="0.7">70%</option>
                                                            <option value="0.6">60%</option>
                                                            <option value="0.5">50%</option>
                                                            <option value="0.4">40%</option>
                                                            <option value="0.3">30%</option>
                                                            <option value="0.2">20%</option>
                                                            <option value="0.1">10%</option>
                                                        </select>
                                                    </div>
                                                </form>    
                                            </div>
                                            <div class="span5">
                                                <form class="form-inline">
                                                    <div class="form-group">
                                                        <label for="group_results" style="padding-right: 15px">Group Results:</label>
                                                        <select id="groupField" class="form-control">
                                                            <option>Department</option>
                                                            <option>Age</option>
                                                            <option>Gender</option>
                                                            <option>Factors</option>
                                                            <option>Salary</option>
                                                            <option>Tenure</option>
                                                            <option>Job Role</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="span1">
                                                <button id="tableBtn" class="btn" style="background-color: white; padding-left: 15px; padding-top: 5px">
                                                    <img src="assets/img/pages/table.png"/>
                                                </button>
                                            </div>
                                        </div>
                                        <!--<table>
                                            <tr>
                                                <td style="padding-left: 10px;">
                                                    Graph Type:
                                                    <button id="graphBtn" class="btn" style="background-color: white">
                                                        <img src="assets/img/pages/graph.png"/>
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="verticalLine">
                                                        <button id="tableBtn" class="btn" style="background-color: white">
                                                            <img src="assets/img/pages/table.png"/>
                                                        </button>
                                                    </div>
                                                </td>
                                                <td style="padding-left: 40px;">
                                                    Probability: 
                                                </td>
                                                <td>
                                                    <br/>
                                                    <form class="form-inline">
                                                        <div class="form-group">
                                                            <label for="probability"></label>
                                                            <select id="probabilityField" class="form-control" name="probabField">
                                                                <option>90%</option>
                                                                <option>80%</option>
                                                                <option>70%</option>
                                                                <option>60%</option>
                                                                <option>50%</option>
                                                                <option>40%</option>
                                                                <option>30%</option>
                                                                <option>20%</option>
                                                                <option>10%</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td style="padding-left: 40px; margin-right: 10px">
                                                    Group Results: 
                                                </td>
                                                <td>
                                                    <br/>
                                                    <form class="form-inline">
                                                        <div class="form-group">
                                                            <label for="probability"></label>
                                                            <select id="groupField" class="form-control">
                                                                <option>Department</option>
                                                                <option>Age</option>
                                                                <option>Gender</option>
                                                                <option>Factors</option>
                                                                <option>Salary</option>
                                                                <option>Tenure</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        </table>-->
                                    </div>
                                    <!-- BEGIN PIE CHART PORTLET-->
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <!-- BEGIN PORTLET -->
                                                <div class="portlet box blue">
                                                    <div class="portlet-title">
                                                        <div class="caption"><i class="icon-bar-chart"></i>Highest Count - 
                                                            <b id="highestFieldBar"></b>
                                                        </div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse"></a>
                                                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                                            <a href="javascript:;" class="reload"></a>
                                                            <a href="javascript:;" class="remove"></a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">

                                                        <!--<div id="site_activities_loading">
                                                            <img src="assets/img/loading.gif" alt="loading" />
                                                        </div>
                                                        <div id="site_activities_content" class="hide">
                                                            <div id="site_activities" class="chart"></div>
                                                        </div>-->
                                                        <div id="bar_data">
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- END PORTLET-->                            
                                        </div>
                                        <div class="span6">
                                            <div class="portlet box blue">
                                                <div class="portlet-title">
                                                    <div class="caption"><i class="icon-bar-chart"></i>Highest Count - 
                                                        <b id="highestFieldPie"></b>
                                                    </div>
                                                    <div class="tools">
                                                        <a href="javascript:;" class="collapse"></a>
                                                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                                            <a href="javascript:;" class="reload"></a>
                                                            <a href="javascript:;" class="remove"></a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div id="pie_data"></div>
                                                    <!--<div id="pie_chart_3" class="chart"></div>
                                                    <table class="chart">
                                                            <tr>
                                                                <td style="width:65%"><canvas id="pie_data"></canvas></td>
                                                                <td id="legendDiv" class="chart-legend" style="width:35%"></td>
                                                            </tr>
                                                    </table>-->
                                                </div>
                                            </div> 
                                        </div>
                                    </div>

                                    <!-- END PIE CHART PORTLET-->
                                    <!-- BEGIN CHART PORTLETS-->
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <!-- END STACK CHART CONTROLS PORTLET-->
                                            <!-- BEGIN INTERACTIVE CHART PORTLET-->
                                            <div class="portlet box red">
                                                <div class="portlet-title">
                                                    <div class="caption"><i class="icon-reorder"></i>Highest Count - 
                                                        <b id="highestFieldLine"></b>
                                                    </div>
                                                    <div class="tools">
                                                        <a href="javascript:;" class="collapse"></a>
                                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                                        <a href="javascript:;" class="reload"></a>
                                                        <a href="javascript:;" class="remove"></a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <!--<div id="chart_2" class="chart"></div>-->
                                                    <div id="line_data"></div>
                                                </div>
                                            <!-- END INTERACTIVE CHART PORTLET-->                 
                                        </div>
                                    </div>

                                </div>
                                <!-- BEGIN PAGE CONTAINER--> 
                            </div>
                            <!-- END PAGE -->
                    </div>
    <!--<div id="tablee-container" style="display:none">
        <table id="aaaa" class="display"></table>
    </div>-->
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
    <!-- Employee Churn PopUp -->
    <div id="tablePopUp">
        <img src="assets/img/popup/closeicon.png" class="b-close"/>
        <div>
            <div class="row-fluid">
                <div class="span12 popupHead">
                    <p>
                        <i class="icon-info-sign"></i>
                        &nbsp;&nbsp;
                        <b>
                            <span id="popupHead" data-translate="viewMoreEmployeeHead"> 
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
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                            </thead>
                            <tfoot>

                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>
                                        
                                    </td>
                                    <td></td>
                                </tr>
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
    <!-- END FOOTER -->
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->   
    <script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-2.2.3/dt-1.10.12/datatables.min.js"></script>
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
    
    <!-- POPUPS -->
    <script src="assets/scripts/popup/ModelMessage.js" type="text/javascript"></script>
    <script src="assets/scripts/popup/bootbox.js" type="text/javascript"></script>
    <script src="assets/scripts/popup/jquery.bpopup.min.js" type="text/javascript"></script>
    <!-- POPUPS -->
    
    <script src="assets/scripts/languageDetect/languageDetector.js" type="text/javascript"></script>
    
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/scripts/app.js"></script>
    <script src="assets/scripts/charts_analytical.js"></script>
    <!-- CHARTS -->
    <script src="assets/scripts/highcharts.js"></script>
    <script src="assets/scripts/exporting.js"></script>
    
    <script>
        jQuery(document).ready(function() {    
           App.init(); // initlayout and core plugins                   
           Charts.init();
           Charts.initCharts();
           Charts.initPieCharts();
        });
    </script>
    <script type="text/javascript">
        /*$("#tableBtn").click(function(){
                displayTablePopup();
            });
            var message ="";
            function displayTablePopup(){
                
                var table = document.createElement('table');
                var title = '<p  align=center style="background-color:#3BB9FF; padding: 10px; margin-right: 15px; color: white;">' +
                                '<i class="icon-male"></i>&nbsp;&nbsp;<b> More about present working Employees</b></p>';
                $.ajax({
                        type:     "post",
                        url:      "assets/controllers/popup_controllers/employeeChurnData.php",
                        data:     $(this).serialize(),
                        dataType: "json"
                    }).done(function(response) {
                        var employeeChurnData = response;
                        //message +='<div id="table-container" style="display:none">'
                        //message +='<table class="table table-hover">';
                        message +='<thead><tr><th bgcolor="#3BB9FF" style="padding-left:80px">Employee Name</th>' + 
                                '<th bgcolor="#3BB9FF">Churn Probability</th></tr></thead>'
                        for (var i = 0; i < employeeChurnData.length; i++) {
                            var churnProb = parseFloat(employeeChurnData[i]['prob']);
                            churnProb = Number((churnProb).toFixed(2));
                            if(churnProb >= 0.8){
                                var prob = churnProb * 100
                                message += '<tr class="error">';
                                message += '<td style="padding-left:80px">'+employeeChurnData[i]['empName']+'</td>';
                                message += '<td style="padding-left:55px">'+prob+'%'+'</td>';
                                message += '</tr>';
                            } else if(churnProb < 0.8 & churnProb >= 0.5){
                                var prob = churnProb * 100
                                message += '<tr class="warning">';
                                message += '<td style="padding-left:80px">'+employeeChurnData[i]['empName']+'</td>';
                                message += '<td style="padding-left:55px">'+prob+'%'+'</td>';
                                message += '</tr>';
                            } else{
                                var prob = churnProb * 100
                                message += '<tr class="info">';
                                message += '<td style="padding-left:80px">'+employeeChurnData[i]['empName']+'</td>';
                                message += '<td style="padding-left:55px">'+prob+'%'+'</td>';
                                message += '</tr>';
                            }
                        }
                        message += '<tr class="success">';
                        message += '<td style="padding-left:80px"><b> Employee Count </b></td>';
                        message += '<td style="padding-left:55px"><b>'+employeeChurnData.length+'</b></td>';
                        message += '</tr>';
                        //message +='</table>'
                        //alert(message);
                        
                        //table.id = 'aaaa';
                        //table.className= 'display';
                        //table.innerHTML = message;
                        var a = document.getElementById('aaaa');
                        a.innerHTML = message;
                        //alert(a.innerHTML);
                        //alert(div);
                        
                        //container.find('div').attr('id', 'aaaa');
            });
            var container = $('#tablee-container').clone();
            //document.getElementById('tablee-container').appendChild(table);
            container.find('table').attr('id', 'aaaa');
                
                var box = bootbox.dialog({
                  show: false,
                  message: "a",
                  title: title,
                  buttons: {
                    OK: {
                      label: "OK",
                      className: "btn-primary",
                      callback: function() {
                        console.log('OK Button');
                      }
                    },
                    cancel: {
                      label: "Cancel",
                      className: "btn-default"
                    }
                  }
                });

                box.on("shown.bs.modal", function() {
                   $('#aaaa').DataTable({
                        "processing": true,
                        "serverSide": true,
                        "ajax": {
                            "url": "assets/controllers/popup_controllers/employeeChurnData.php",
                            "type": "POST"
                        },
                        "columns": [
                            { "data": "empName" }
                        ]        
                   }); 
                });

                box.modal('show');     
        }*/
    </script>
</body>
    <!-- END BODY -->
</html>