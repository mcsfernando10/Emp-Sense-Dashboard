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
        $loggedUserName = $_SESSION[$GLOBALS['sessionName']];        
        $typedPassword = md5($_POST['inputPassword']);	
        //To protect MySQL injection for Security purpose
        $loggedUserName = stripslashes($loggedUserName);
        $loggedUserName = mysqli_real_escape_string($con,$loggedUserName);	
        //SQL query to fetch information of registerd users and finds user match.
        $toGetLogins = "select * from login ";
        $toGetLogins .= "where password='$typedPassword' AND username='$loggedUserName'";
        $result = mysqli_query($con,$toGetLogins);
        $userDetails = mysqli_fetch_assoc($result);
        
        //$noOfRows = mysqli_num_rows($result);
        if ($userDetails) {
            //Get Name of the logged in user
            //$nameOfUser = $userDetails['name'];
            // Initializing Session 
            $_SESSION['active'] = "Active";
            echo "<script type='text/javascript'> window.parent.location='index.php';</script>";
        } else {
            echo "<b>Login Failed!</b> Invalid password";
            echo "<script>";
            echo "$( '<div class=\'input-append\' >";
            echo "<label class=\'control-label\'>";
            echo "<b>Login Failed!</b> Invalid password </label>";
            echo "</div>').insertAfter( '#passwordField' );";
            echo '</script>';
        }
        //Close Connection
        mysqli_close($con);
    }
?>

