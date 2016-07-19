<?php
    include_once "../../db/DBDetails.php";

    $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysqli_select_db($con,"$db_name")or die("cannot select DB"); 

    //get distinct Doctor Details
    $sqlToGetEmployeeChurn = "SELECT department,avg(probability) as 'avgProb' 
        FROM `employeesit_predict` 
        group by department 
        ORDER BY avg(probability) DESC"; 
    $result = mysqli_query($con,$sqlToGetEmployeeChurn);

    $return_arr = array(); 

    while ($row = mysqli_fetch_assoc($result)) {
        $row_array['dept'] = $row['department'];
        $row_array['prob'] = $row['avgProb'];

        array_push($return_arr,$row_array);
    }

    echo json_encode($return_arr);

    mysqli_close($con);	
?> 

