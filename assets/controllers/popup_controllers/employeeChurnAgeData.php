<?php
    include_once "../../db/DBDetails.php";

    $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysqli_select_db($con,"$db_name")or die("cannot select DB"); 

    //get distinct Doctor Details
    $sqlToGetEmployeeAgeChurn = "select
        concat(5 * round(age / 5), '-', 5 * round(age / 5) + 4) as `ageRange`,
        count(*) as `employeeCount`,avg(probability) as `avgChurn`
      from employeesit_predict
      group by 1
      order by age"; 
    $result = mysqli_query($con,$sqlToGetEmployeeAgeChurn);

    $return_arr = array(); 

    while ($row = mysqli_fetch_assoc($result)) {
        $row_array['ageRange'] = $row['ageRange'];
        $row_array['prob'] = $row['avgChurn'];

        array_push($return_arr,$row_array);
    }

    echo json_encode($return_arr);

    mysqli_close($con);	
?> 

