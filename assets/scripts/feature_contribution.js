$(document).ready(function() {
    $.ajax({
        type:     "post",
        url:      "assets/controllers/featureContributionController.php",
        data:     $(this).serialize(),
        dataType: "json"
    }).done(function(response) {
        var employeeChurnData = response;        
        var data = [];
        for (var i = 0; i < employeeChurnData.length; i++) {
            var churnProb = parseFloat(employeeChurnData[i]['prob']);
            churnProb = Number((churnProb).toFixed(2));

            var empName = employeeChurnData[i]['empName'];
            
            var prob = churnProb * 100;
            var reason = employeeChurnData[i]['reason'];
            data[i] = [empName,prob,reason];
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
    });
});


