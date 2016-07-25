<?php
    include_once "globalVariables.php";
    session_start();    
    //Can't directly load afterlogin page from URL(need validate session variable)
    //echo "<script>alert('".$_SESSION['active']."'1)</script>"; 
    if(!isset($_SESSION[$GLOBALS['sessionName']])) {
        // Redirecting To Login Page
        echo "<script type='text/javascript'> window.parent.location='login.php';</script>"; 
        session_destroy();
    } else {        
        if(!isset($_SESSION['active'])) {
            //Redirecting To Login Page            
            echo "<script type='text/javascript'> window.parent.location='login.php';</script>"; 
            session_destroy();
        } else if(strcmp($_SESSION['active'],"Lock")==0){            
            echo "<script type='text/javascript'> window.parent.location='extra_lock.php';</script>";
        }         
    }
    /*if(!isset($_SESSION['language'])){
        $_SESSION['language'] = "English";
    }*/
?>

