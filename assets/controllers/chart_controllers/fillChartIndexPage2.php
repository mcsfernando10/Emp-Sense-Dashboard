<?php
    include_once "../../db/DBDetails.php";

    $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysqli_select_db($con,"$db_name")or die("cannot select DB"); 
    //echo "abc";
    $requestedField = $_POST['field'];
    
    $sqlToGetDeptForMale = "SELECT ".$requestedField.",gender,avg(probability) as 'avgProb'
                            FROM `employeesit_predict`
                            where gender = 'male'
                            group by ".$requestedField.",gender
                            ORDER BY avg(probability) DESC"; 
    $deptMaleData = mysqli_query($con,$sqlToGetDeptForMale);
    
    $sqlToGetDeptForFemale = "SELECT ".$requestedField.",gender,avg(probability) as 'avgProb'
                            FROM `employeesit_predict`
                            where gender = 'female'
                            group by ".$requestedField.",gender
                            ORDER BY avg(probability) DESC"; 
    $deptFemaleData = mysqli_query($con,$sqlToGetDeptForFemale);

    $deptMale_arr = array(); 
    $deptFemale_arr = array(); 

    while ($row = mysqli_fetch_assoc($deptMaleData)) {
        $row_array['dept'] = $row[$requestedField];
        $row_array['probMale'] = $row['avgProb'];
        array_push($deptMale_arr,$row_array);
    }
    while ($row = mysqli_fetch_assoc($deptFemaleData)) {
        $row_array['dept'] = $row[$requestedField];
        $row_array['probFemale'] = $row['avgProb'];
        array_push($deptFemale_arr,$row_array);
    }
    
    $predictedData = array('maleDeptData' => $deptMale_arr);
    $predictedData['femaleDeptData'] = $deptFemale_arr;
    echo json_encode($predictedData);
    
    mysqli_close($con);
?> 



