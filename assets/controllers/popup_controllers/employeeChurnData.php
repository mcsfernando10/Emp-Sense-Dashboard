<?php
    include_once "../../db/DBDetails.php";

    $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysqli_select_db($con,"$db_name")or die("cannot select DB"); 

    //get distinct Doctor Details
    $sqlToGetEmployeeChurn = "SELECT Employee_Name,probability 
        FROM `employeesit_predict`
        Order by probability DESC"; 
    $result = mysqli_query($con,$sqlToGetEmployeeChurn);

    $return_arr = array(); 

    while ($row = mysqli_fetch_assoc($result)) {
        $row_array['empName'] = $row['Employee_Name'];
        $row_array['prob'] = $row['probability'];

        array_push($return_arr,$row_array);
    }

    echo json_encode($return_arr);

    mysqli_close($con);	
?> 

