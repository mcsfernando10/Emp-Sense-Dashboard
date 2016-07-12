<?php
    include_once "DBDetails.php";

    $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysqli_select_db($con,"$db_name")or die("cannot select DB"); 

    //get distinct Doctor Details
    $sqlToGetDistinctDocName = "SELECT Job_Role FROM `employeesit_raw_train`"; 
    $result = mysqli_query($con,$sqlToGetDistinctDocName);

    $return_arr = array(); 

    while ($row = mysqli_fetch_assoc($result)) {
        $row_array['jobRole'] = $row['Job_Role'];

        array_push($return_arr,$row_array);
    }

    echo json_encode($return_arr);

    mysqli_close($con);	
?> 

