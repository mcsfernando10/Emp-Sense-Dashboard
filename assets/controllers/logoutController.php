<?php
    session_start();
    //clear session
    session_destroy();
    echo "<script type='text/javascript'> window.parent.location='../../login.php';</script>"; // Redirecting To Home Page
?>
