<?php
    include_once "assets/db/DBDetails.php";
    include_once "globalVariables.php"; 
    $cookie_name = $GLOBALS['cookieName'];
    if (isset($_POST['login'])) {
        /* Establishing Connection with Server by passing 
        server_name, user_id and password as a parameter*/
        $con = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
        //Selecting Database
        mysqli_select_db($con,"$db_name")or die("cannot select DB"); 
        //Define $username and $password
        $typedUsername = $_POST['inputUserName'];
        $typedPassword = md5($_POST['inputPassword']);	
        //To protect MySQL injection for Security purpose
        $typedUsername = stripslashes($typedUsername);
        $typedUsername = mysqli_real_escape_string($con,$typedUsername);	
        //SQL query to fetch information of registerd users and finds user match.
        $toGetLogins = "select * from login ";
        $toGetLogins .= "where password='$typedPassword' AND username='$typedUsername'";
        $result = mysqli_query($con,$toGetLogins);
        $userDetails = mysqli_fetch_assoc($result);				
        //$noOfRows = mysqli_num_rows($result);
        if ($userDetails) {
            //Get Name of the logged in user
            //$nameOfUser = $userDetails['name'];
            // Initializing Session
            $_SESSION[$GLOBALS['sessionName']] = $typedUsername; 
            $_SESSION['active'] = "Active";
            //Create cookie
            if(isset($_POST['rememberMe']))
            {						
                $cookie_value = $typedUsername;
                //Create a cookie for expire after 3 days
                //setcookie($cookie_name, $cookie_value, time() + (86400 * 30 * 3), "/"); 
                setcookie($cookie_name, $cookie_value, time() + (60*5), "/");
            }
            // Redirecting To Other Page
            //header("Location : http://www.google.lk"); 
            echo "<script type='text/javascript'> window.parent.location='index.php';</script>";
        } else {
            //Display error message
            /*$displayString = "<div class='form-group has-error'>";
            $displayString .= "<div class='col-sm-offset-3 col-sm-9'>";
            $displayString .= "<label class='control-label'>";
            $displayString .= "<b>Login Failed!</b>";
            $displayString .= "Invalid Username or password";
            $displayString .= "</label>";
            $displayString .= "</div>";
            $displayString .= "</div>";

            $codeToDisplay = "$(' . $displayString . ').insertAfter( "#passwordField" )';

            echo "<script>";
            echo $codeToDisplay;
            echo '</script>';*/
            

            echo "<script>";
            echo "$( '<div class=\'form-group has-error\' >";
            echo "<div class=\'col-sm-offset-3 col-sm-9\'>";
            echo "<label class=\'control-label\'>";
            echo "<b>Login Failed!</b> Invalid Username or password </label>";
            echo "</div>";
            echo "</div>').insertAfter( '#passwordField' );";
            echo '</script>';
        }
        //Close Connection
        mysqli_close($con);
    }
?>

