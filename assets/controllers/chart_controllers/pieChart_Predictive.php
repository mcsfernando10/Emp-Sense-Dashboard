<?php
    include_once "../../db/DBDetails.php";

    $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysqli_select_db($con,"$db_name")or die("cannot select DB"); 
    
    $requestedField = 'department';
    
    $sqlToGetDeptWithPredict = "select department, avg(probability) as 'prob', count(employee_id) as 'empCount'
        from employeesit_predict
        where probability > 0.9
        group by department"; 
    $predictData = mysqli_query($con,$sqlToGetDeptWithPredict);
    
    $maxCountDept = "select f.Department as 'department'
        from (select department, avg(probability) as 'prob', count(employee_id) as 'empCount'
                from employeesit_predict
                where probability > 0.9
                group by department) f
        where f.empCount = (       
        select max(d.empCount)
        from (select count(employee_id) as 'empCount' 
        from employeesit_predict 
        where probability > 0.9
        group by department) d)";
    $maxEmpCountDept = mysqli_query($con,$maxCountDept);   

    $predict_arr = array(); 
    $maxDept;

    while ($row = mysqli_fetch_assoc($predictData)) {
        $row_array['dept'] = $row[$requestedField];
        $row_array['prob'] = $row['prob'];
        $row_array['count'] = $row['empCount'];
        array_push($predict_arr,$row_array);
    }
    
    if($row = mysqli_fetch_assoc($maxEmpCountDept)) {
        $maxDept = $row[$requestedField];
    }
    
    $predictedData = array('predict' => $predict_arr);
    $predictedData['maxDept'] = $maxDept;
    echo json_encode($predictedData);
    
    mysqli_close($con);
?> 



