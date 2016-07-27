<?php
    include_once "../../db/DBDetails.php";

    $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysqli_select_db($con,"$db_name")or die("cannot select DB"); 
    
    $requestedField = 'department';
    $requestedField_prob = $_POST['prob'];
    $requestedField_group = $_POST['group'];
    
    $sqlToGetFieldWithPredict = "select ".$requestedField_group.", avg(probability) as 'prob', count(employee_id) as 'empCount'
        from employeesit_train
        where probability > ".$requestedField_prob."
        group by ".$requestedField_group; 
    $predictData = mysqli_query($con,$sqlToGetFieldWithPredict);
    
    $maxCountField = "select f.".$requestedField_group." as 'department'
        from (select ".$requestedField_group.", avg(probability) as 'prob', count(employee_id) as 'empCount'
                from employeesit_train
                where probability > ".$requestedField_prob."
                group by ".$requestedField_group.") f
        where f.empCount = (       
        select max(d.empCount)
        from (select count(employee_id) as 'empCount' 
        from employeesit_train 
        where probability > ".$requestedField_prob."
        group by ".$requestedField_group.") d)";
    $maxEmpCountField = mysqli_query($con,$maxCountField);   

    $predict_arr = array(); 
    $maxDept = "";

    while ($row = mysqli_fetch_assoc($predictData)) {
        $row_array['dept'] = $row[$requestedField_group];
        $row_array['prob'] = $row['prob'];
        $row_array['count'] = $row['empCount'];
        array_push($predict_arr,$row_array);
    }
    
    if($row = mysqli_fetch_assoc($maxEmpCountField)) {
        $maxDept = $row[$requestedField];
    }
    
    $predictedData = array('predict' => $predict_arr);
    $predictedData['maxDept'] = $maxDept;
    $predictedData['p'] = $requestedField_prob;
    echo json_encode($predictedData);
    
    mysqli_close($con); 
?> 



