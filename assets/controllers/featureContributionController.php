<?php
    include_once "../db/DBDetails.php";

    $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysqli_select_db($con,"$db_name")or die("cannot select DB"); 

    //get distinct Doctor Details
    $sqlToGetEmployeeChurn = "SELECT * 
        FROM `employeesit_predict_feature_cont`
        where Prediction_Probability<97"; 
    $result = mysqli_query($con,$sqlToGetEmployeeChurn);
    
    $return_arr = array(); 

    while ($row = mysqli_fetch_assoc($result)) {        
        $row_array['Employee_Name'] = $row['Employee_Name'];        
        $row_array['Age'] = $row['Age'];
        $row_array['Gender'] = $row['Gender'];
        $row_array['Marital_Status'] = $row['Marital_Status'];
        $row_array['Having_Degree'] = $row['Having_Degree'];
        $row_array['Job_Role'] = $row['Job_Role'];
        $row_array['Department'] = $row['Department'];
        $row_array['WorkFrom'] = $row['WorkFrom'];
        $row_array['WorkTo'] = $row['WorkTo'];
        $row_array['Tenure'] = $row['Tenure'];
        $row_array['Salary'] = $row['Salary'];
        $row_array['Bonus'] = $row['Bonus'];
        $row_array['Claims'] = $row['Claims'];
        $row_array['Worked_Project'] = $row['Worked_Project'];
        $row_array['No_of_Leaves'] = $row['No_of_Leaves'];
        $row_array['Distance'] = $row['Distance'];
        $row_array['No_of_Parents'] = $row['No_of_Parents'];
        $row_array['No_of_Children'] = $row['No_of_Children'];
        $row_array['No_of_Complaints'] = $row['No_of_Complaints'];        
        $row_array['prob'] = $row['Prediction_Probability'];
        $row_array['reason'] = $row['Max_Feature'];
        array_push($return_arr,$row_array);
    }
    
    $sqlToGetBias = "SELECT Bias 
        FROM `employeesit_predict_feature_cont`"; 
    $result = mysqli_query($con,$sqlToGetBias);
    
    $count = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        if($count==0){
            $row_array1['bias'] = $row['Bias'];
            array_push($return_arr,$row_array1);
        }
        $count++;
    }
    
    echo json_encode($return_arr);

    mysqli_close($con);	
?> 


