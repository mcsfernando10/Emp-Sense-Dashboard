<?php
    include_once "../../db/DBDetails.php";

    $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysqli_select_db($con,"$db_name")or die("cannot select DB"); 
    
    $requestedField = $_POST['field'];
    
    if($requestedField == 'Age'){
        $sqlToGetDeptWithPredict = "Select b.ageRange as ".$requestedField.",b.avgChurn as 'avgProb' "
                . "From ( select concat(5 * round(age / 5), '-', 5 * round(age / 5) + 4) as 'ageRange',avg(probability) as 'avgChurn' " 
                        . "from employeesit_predict "
                        . "group by 1 "
                        . "order by age ) b"; 
        $predictData = mysqli_query($con,$sqlToGetDeptWithPredict);
    }
    else if($requestedField == 'Salary'){
        $sqlToGetDeptWithPredict = "Select b.salRange as ".$requestedField.",b.avgChurn as 'avgProb'
                    From ( select concat(10000 * round(salary / 10000), '-', 10000 * round(salary / 10000) + 9000) as 'salRange', avg(probability) as 'avgChurn'
                            from employeesit_predict
                            group by 1 
                            order by salary) b";
        $predictData = mysqli_query($con,$sqlToGetDeptWithPredict);
    }
    else if($requestedField == 'Tenure'){
        $sqlToGetDeptWithPredict = "Select b.tenRange as ".$requestedField.",b.avgChurn as 'avgProb'
                    From ( select concat(5 * round(Tenure / 5), '-', 5 * round(Tenure / 5) + 4) as 'tenRange', avg(probability) as 'avgChurn'
                            from employeesit_predict
                            group by 1 
                            order by Tenure) b";
        $predictData = mysqli_query($con,$sqlToGetDeptWithPredict);
    }
    else{
        $sqlToGetDeptWithPredict = "SELECT ".$requestedField.",avg(probability) as 'avgProb' "
                . "FROM `employeesit_predict` "
                . "group by ".$requestedField." "
                . "ORDER BY avg(probability) DESC"; 
        $predictData = mysqli_query($con,$sqlToGetDeptWithPredict);
    }
    
    if($requestedField == 'Age'){
        $sqlToGetDeptWithTrain = "Select b.ageRange as ".$requestedField.",b.avgChurn as 'avgProb' "
                . "From ( select concat(5 * round(age / 5), '-', 5 * round(age / 5) + 4) as 'ageRange',avg(probability) as 'avgChurn' " 
                        . "from employeesit_train "
                        . "group by 1 "
                        . "order by age ) b"; 
        $trainData = mysqli_query($con,$sqlToGetDeptWithTrain);
    }
    else if($requestedField == 'Salary'){
        $sqlToGetDeptWithTrain = "Select b.salRange as ".$requestedField.",b.avgChurn as 'avgProb'
                    From ( select concat(10000 * round(salary / 10000), '-', 10000 * round(salary / 10000) + 9000) as 'salRange', avg(probability) as 'avgChurn'
                            from employeesit_train
                            group by 1 
                            order by salary) b";
        $trainData = mysqli_query($con,$sqlToGetDeptWithTrain);
    }
    else if($requestedField == 'Tenure'){
        $sqlToGetDeptWithTrain = "Select b.tenRange as ".$requestedField.",b.avgChurn as 'avgProb'
                    From ( select concat(5 * round(Tenure / 5), '-', 5 * round(Tenure / 5) + 4) as 'tenRange', avg(probability) as 'avgChurn'
                            from employeesit_train
                            group by 1 
                            order by Tenure) b";
        $trainData = mysqli_query($con,$sqlToGetDeptWithTrain);
    }
    else {
        $sqlToGetDeptWithTrain = "SELECT ".$requestedField.",avg(probability) as 'avgProb' "
            . "FROM `employeesit_train` "
            . "group by ".$requestedField." "
            . "ORDER BY avg(probability) DESC"; 
        $trainData = mysqli_query($con,$sqlToGetDeptWithTrain);
   }
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

