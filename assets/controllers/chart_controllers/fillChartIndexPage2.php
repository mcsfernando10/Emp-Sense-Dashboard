<?php
    include_once "../../db/DBDetails.php";

    $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysqli_select_db($con,"$db_name")or die("cannot select DB"); 
    //echo "abc";
    $requestedField = $_POST['field'];
    
    if($requestedField == 'Age'){
        $sqlToGetDeptForMale = "Select b.ageRange as ".$requestedField.",b.avgChurn as 'avgProb'
                                From ( select concat(5 * round(age / 5), '-', 5 * round(age / 5) + 4) as `ageRange`,avg(probability) as `avgChurn`
                                      from employeesit_predict 
                                      where gender = 'male'
                                      group by 1 
                                      order by age) b";
        $deptMaleData = mysqli_query($con,$sqlToGetDeptForMale);
    }
   else if($requestedField == 'Salary'){
        $sqlToGetDeptForMale = "Select b.salRange as ".$requestedField.",b.avgChurn as 'avgProb'
                    From ( select concat(10000 * round(salary / 10000), '-', 10000 * round(salary / 10000) + 9000) as 'salRange', avg(probability) as 'avgChurn'
                            from employeesit_predict
                            where gender = 'male'
                            group by 1 
                            order by Salary) b";
        $deptMaleData = mysqli_query($con,$sqlToGetDeptForMale);
    }
    else if($requestedField == 'Tenure'){
        $sqlToGetDeptForMale = "Select b.tenRange as ".$requestedField.",b.avgChurn as 'avgProb'
                    From ( select concat(5 * round(Tenure / 5), '-', 5 * round(Tenure / 5) + 4) as 'tenRange', avg(probability) as 'avgChurn'
                            from employeesit_predict
                            where gender = 'male'
                            group by 1 
                            order by Tenure) b";
        $deptMaleData = mysqli_query($con,$sqlToGetDeptForMale);
    }
    else if($requestedField == 'Reason_To_Leave'){
        $sqlToGetDeptForMale = "SELECT ".$requestedField.",gender,avg(probability) as 'avgProb'
                                FROM employeesit_predict
                                where gender = 'male'
                                group by ".$requestedField.",gender
                                ORDER BY avg(probability) DESC"; 
        $deptMaleData = mysqli_query($con,$sqlToGetDeptForMale);
    }
    else{
        $sqlToGetDeptForMale = "SELECT ".$requestedField.",gender,avg(probability) as 'avgProb'
                                FROM `employeesit_predict`
                                where gender = 'male' and department <> ''
                                group by ".$requestedField.",gender
                                ORDER BY avg(probability) DESC"; 
        $deptMaleData = mysqli_query($con,$sqlToGetDeptForMale);
    }
    
    if($requestedField == 'Age'){
        $sqlToGetDeptForFemale = "Select b.ageRange as ".$requestedField.",b.avgChurn as 'avgProb'
                                From ( select concat(5 * round(age / 5), '-', 5 * round(age / 5) + 4) as `ageRange`,avg(probability) as `avgChurn`
                                      from employeesit_predict 
                                      where gender = 'female'
                                      group by 1 
                                      order by age) b";
        $deptFemaleData = mysqli_query($con,$sqlToGetDeptForFemale);
    }
    else if($requestedField == 'Salary'){
        $sqlToGetDeptForFemale = "Select b.salRange as ".$requestedField.",b.avgChurn as 'avgProb'
                    From ( select concat(10000 * round(salary / 10000), '-', 10000 * round(salary / 10000) + 9000) as 'salRange', avg(probability) as 'avgChurn'
                            from employeesit_predict
                            where gender = 'female'
                            group by 1 
                            order by Salary) b";
        $deptFemaleData = mysqli_query($con,$sqlToGetDeptForFemale);
    }
    else if($requestedField == 'Reason_To_Leave'){
        $sqlToGetDeptForFemale = "SELECT ".$requestedField.",gender,avg(probability) as 'avgProb'
                                FROM employeesit_predict
                                where gender = 'female'
                                group by ".$requestedField.",gender
                                ORDER BY avg(probability) DESC"; 
        $deptFemaleData = mysqli_query($con,$sqlToGetDeptForFemale);
    }
    else if($requestedField == 'Tenure'){
        $sqlToGetDeptForFemale = "Select b.tenRange as ".$requestedField.",b.avgChurn as 'avgProb'
                    From ( select concat(5 * round(Tenure / 5), '-', 5 * round(Tenure / 5) + 4) as 'tenRange', avg(probability) as 'avgChurn'
                            from employeesit_predict
                            where gender = 'female'
                            group by 1 
                            order by Tenure) b";
        $deptFemaleData = mysqli_query($con,$sqlToGetDeptForFemale);
    }
    else{
        $sqlToGetDeptForFemale = "SELECT ".$requestedField.",gender,avg(probability) as 'avgProb'
                                FROM `employeesit_predict`
                                where gender = 'female' and department <> ''
                                group by ".$requestedField.",gender
                                ORDER BY avg(probability) DESC"; 
        $deptFemaleData = mysqli_query($con,$sqlToGetDeptForFemale);
    }
    
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



