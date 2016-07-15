<?php
    include_once "../../db/DBDetails.php";

    $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysqli_select_db($con,"$db_name")or die("cannot select DB"); 

    //get distinct Doctor Details
    /*$sqlToGetDeptWithPredict = "SELECT Job_Role FROM `employeesit_raw_train`"; 
    $result = mysqli_query($con,$sqlToGetDeptWithPredict);

    $return_arr = array(); 

    while ($row = mysqli_fetch_assoc($result)) {
        $row_array['jobRole'] = $row['Job_Role'];

        array_push($return_arr,$row_array);
    }

    echo json_encode($return_arr);

    mysqli_close($con);	*/
    
    $sqlToGetDeptWithPredict = "SELECT department,avg(probability) as 'avgProb' "
            . "FROM `employeesit_predict` "
            . "group by department "
            . "ORDER BY avg(probability) DESC"; 
    $predictData = mysqli_query($con,$sqlToGetDeptWithPredict);
    
    $sqlToGetDeptWithTrain = "SELECT department,avg(probability) as 'avgProb' "
            . "FROM `employeesit_train` "
            . "group by department "
            . "ORDER BY avg(probability) DESC"; 
    $trainData = mysqli_query($con,$sqlToGetDeptWithTrain);

    $predict_arr = array(); 
    $train_arr = array(); 

    while ($row = mysqli_fetch_assoc($predictData)) {
        $row_array['dept'] = $row['department'];
        $row_array['prob'] = $row['avgProb'];
        array_push($predict_arr,$row_array);
    }
    while ($row = mysqli_fetch_assoc($trainData)) {
        $row_array['dept'] = $row['department'];
        $row_array['prob'] = $row['avgProb'];
        array_push($train_arr,$row_array);
    }
    
    $predictedData = array('predict' => $predict_arr);
    $predictedData['train'] = $train_arr;

    echo json_encode($predictedData);
    //echo json_encode($trainData);
    
    mysqli_close($con);
?> 

