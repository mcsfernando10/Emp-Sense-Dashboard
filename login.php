<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> 
<html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Emp-Sense | Login Page</title>
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
        <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL STYLES -->
        <link rel="shortcut icon" href="assets/img/favicon.ico" />

        <?php
            include_once "assets/controllers/globalVariables.php"; 
            $cookie_name = $GLOBALS['cookieName'];
            session_start();
            //check cookie is set or not
            if (isset($_COOKIE[$cookie_name])) { 
                //Create session variable
                $_SESSION['nameOfUser'] = $_COOKIE[$cookie_name];
                // if cookie is set load index.php page
                header("Location: index.php"); 				
            } else if (isset($_SESSION['nameOfUser'])) {
                //check session variable is created or not
                //if session variable is created load index.php page 
                echo "<script type='text/javascript'> window.parent.location='index.php';</script>";
            }
        ?>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="login">
        <!-- BEGIN LOGO -->
            <div class="logo">
                
            </div>
            <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content"> 
            <!-- BEGIN LOGO -->
            <div style="text-align: center">
                <img src="assets/img/logo_emp.png" alt="logo" />
            </div>
            <!-- END LOGO -->
            <!-- BEGIN LOGIN FORM -->
            <form class="form-vertical login-form" method="post">
                <h3 class="form-title">Login to your account</h3>
                <div class="alert alert-error hide">
                    <button class="close" data-dismiss="alert"></button>
                    <span>Enter any username and password.</span>
                </div>
                <div class="control-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="inputUserName"/>
                        </div>
                    </div>
                </div>
                <div class="control-group" id="passwordField">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-lock"></i>
                            <input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="inputPassword"/>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" value="1" name="rememberMe"/> Remember me
                    </label>
                    <button type="submit" class="btn blue pull-right" name="login">
                        Login <i class="m-icon-swapright m-icon-white"></i>
                    </button>            
                </div>
                <!--div class="forget-password">
                        <h4>Forgot your password ?</h4>
                        <p>
                                no worries, click <a href="javascript:;"  id="forget-password">here</a>
                                to reset your password.
                        </p>
                </div>
                <div class="create-account">
                        <p>
                                Don't have an account yet ?&nbsp; 
                                <a href="javascript:;" id="register-btn" >Create an account</a>
                        </p>
                </div-->
            </form>
            <!-- END LOGIN FORM -->     
        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright">
            2016 &copy; Emp - Sense. Admin Dashboard.
        </div>
        <!-- END COPYRIGHT -->
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
        <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>     
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/scripts/app.js" type="text/javascript"></script>
        <script src="assets/scripts/login.js" type="text/javascript"></script> 
        <!-- END PAGE LEVEL SCRIPTS --> 
        <script>
            jQuery(document).ready(function() {     
              App.init();
              Login.init();
            });
        </script>
        <!-- END JAVASCRIPTS -->
        <!--Login Script-->
        <?php
            include_once "assets/controllers/loginController.php";             
        ?>
        <!--Login Script-->
    </body>
    <!-- END BODY -->
</html>