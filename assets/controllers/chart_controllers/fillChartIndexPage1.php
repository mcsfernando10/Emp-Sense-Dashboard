<?php
    include_once "../../db/DBDetails.php";

    $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysqli_select_db($con,"$db_name")or die("cannot select DB"); 
    
    $requestedField = $_POST['field'];
    
    $sqlToGetDeptWithPredict = "SELECT ".$requestedField.",avg(probability) as 'avgProb' "
            . "FROM `employeesit_predict` "
            . "group by ".$requestedField." "
            . "ORDER BY avg(probability) DESC"; 
    $predictData = mysqli_query($con,$sqlToGetDeptWithPredict);
    
    $sqlToGetDeptWithTrain = "SELECT ".$requestedField.",avg(probability) as 'avgProb' "
            . "FROM `employeesit_train` "
            . "group by ".$requestedField." "
            . "ORDER BY avg(probability) DESC"; 
    $trainData = mysqli_query($con,$sqlToGetDeptWithTrain);

    $predict_arr = array(); 
    $train_arr = array(); 

    while ($row = mysqli_fetch_assoc($predictData)) {
        $row_array['dept'] = $row[$requestedField];
        $row_array['prob'] = $row['avgProb'];
        array_push($predict_arr,$row_array);
    }
    while ($row = mysqli_fetch_assoc($trainData)) {
        $row_array['dept'] = $row[$requestedField];
        $row_array['prob'] = $row['avgProb'];
        array_push($train_arr,$row_array);
    }
    
    $predictedData = array('predict' => $predict_arr);
    $predictedData['train'] = $train_arr;
    $singleArray = array();
    array_push($singleArray,$predictedData);
    echo json_encode($singleArray);
    
    mysqli_close($con);
?> 

