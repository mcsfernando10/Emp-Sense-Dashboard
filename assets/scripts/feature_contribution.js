$(document).ready(function() {
    $.ajax({
        type:     "post",
        url:      "assets/controllers/featureContributionController.php",
        data:     $(this).serialize(),
        dataType: "json"
    }).done(function(response) {
        var employeeChurnData = response;        
        var data = [];
        for (var i = 0; i < employeeChurnData.length-1; i++) {
            data[i] = [
                employeeChurnData[i]['Employee_Name'],
                employeeChurnData[i]['Age'],
                employeeChurnData[i]['Gender'],
                employeeChurnData[i]['Marital_Status'],
                employeeChurnData[i]['Having_Degree'],
                employeeChurnData[i]['Job_Role'],
                employeeChurnData[i]['Department'],
                employeeChurnData[i]['WorkFrom'],
                employeeChurnData[i]['WorkTo'],
                employeeChurnData[i]['Tenure'],
                employeeChurnData[i]['Salary'],
                employeeChurnData[i]['Bonus'],
                employeeChurnData[i]['Claims'],
                employeeChurnData[i]['Worked_Project'],
                employeeChurnData[i]['No_of_Leaves'],
                employeeChurnData[i]['Distance'],
                employeeChurnData[i]['No_of_Parents'],
                employeeChurnData[i]['No_of_Children'],
                employeeChurnData[i]['No_of_Complaints'],
                employeeChurnData[i]['prob'],
                employeeChurnData[i]['reason']
            ];
        }       

        $('#content').DataTable( {
            data:data,
            dom: 'Bfrtip',
            "order": [[ 1, "desc" ]],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
        var empCount = employeeChurnData.length.toString();
        $("#employeeCount").text(empCount);
        var bias = employeeChurnData[employeeChurnData.length-1]['bias'].toString();
        $("#bias").text(bias);
    });
});


