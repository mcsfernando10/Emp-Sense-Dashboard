<?php
    include_once "../../db/DBDetails.php";

    $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysqli_select_db($con,"$db_name")or die("cannot select DB"); 

    //get distinct Doctor Details
    $sqlToGetEmployeeChurn = "SELECT ep.Employee_Name as 'Employee_Name',ep.probability as 'probability', ep.Reason_To_Leave as 'Reason_To_Leave', ef.Max_Feature as 'Max_Feature' 
        FROM `employeesit_predict` ep,`employeesit_predict_feature_cont` ef
        WHERE probability < 0.97 and ep.Employee_ID=ef.Employee_ID
        Order by probability DESC"; 
    $result = mysqli_query($con,$sqlToGetEmployeeChurn);

    $return_arr = array(); 

    while ($row = mysqli_fetch_assoc($result)) {
        $row_array['empName'] = $row['Employee_Name'];
        $row_array['prob'] = $row['probability'];
        $row_array['reason'] = $row['Reason_To_Leave'];
        $row_array['max_feature'] = $row['Max_Feature'];
        array_push($return_arr,$row_array);
    }

    echo json_encode($return_arr);

    mysqli_close($con);	
?> 

