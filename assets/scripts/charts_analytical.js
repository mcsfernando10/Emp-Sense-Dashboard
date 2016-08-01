var Charts = function () {

    return {
        init: function () {
            $("#tableBtn").click(function(){
                var prob = $("#probabilityField").val();;
                var group = $("#groupField").val();               
                
                jQuery('#content').dataTable().fnDestroy();
                displayTablePopup(prob,group);
                $('#tablePopUp').bPopup({
                    easing: 'easeOutBack', //uses jQuery easing plugin
                    speed: 600,
                    transition: 'slideDown',
                    modalClose : false
                });
            });
        },

        initCharts: function () {
            displayCharts();
            $("#groupField").change(function () {
                var group = this.value;
                var prob = $("#probabilityField").val();
                
                if(group === 'Department')
                    group = 'department';
                else if(group === 'Gender')
                    group = 'Gender';
                else if(group === 'Job Role')
                    group = 'Job_Role';
                getChartDataAjax(prob,group);
            });
            
            //First Dropdown handler
            $("#probabilityField").change(function () {
                var prob = this.value;
                var group = $("#groupField").val();
                
                if(group === 'Department')
                    group = 'department';
                else if(group === 'Gender')
                    group = 'Gender';
                else if(group === 'Job Role')
                    group = 'Job_Role';
                
                getChartDataAjax(prob,group);
            });             
        }
    };
}();

/* set highest value of chart title*/
function setHeighest(heighest){
    document.getElementById("highestFieldBar").innerHTML=heighest;
    document.getElementById("highestFieldPie").innerHTML=heighest;
    document.getElementById("highestFieldLine").innerHTML=heighest;
}

//Display initial charts
function displayCharts(){                
    var prob = 0.9;
    var group = 'department';
    getChartDataAjax(prob,group);  
} 
            
/* Display Charts */
function barHighChart(data,field,prob){
    var labels = [];
    var count = [];
    for(i = 0; i < data.length; i++){
        labels[i] = data[i].label;
        count[i] = parseInt(data[i].data);    
    }

    $('#bar_data').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: prob + ' vs ' + field //Dynamic
        },
        credits: {
             text: 'Emp-Sense'
        },
        xAxis: {
            categories: labels,
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Employee Count'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Employee Count',
            data: count
        }]
    });
}

function pieHighChart(data,field,prob){
    var dataSeries = [];
    for(i = 0; i < data.length; i++){
        dataSeries.push({name : data[i].label, y : parseInt(data[i].data)});
    }
    // Build the chart
    $('#pie_data').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: prob + ' vs ' + field //Dynamic
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>'
        },
        credits: {
             text: 'Emp-Sense'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Employee Count',
            colorByPoint: true,
            data: dataSeries
        }]
    });
}

function lineHighChart(data,field,prob){
    var labels = [];
    var count = [];
    for(i = 0; i < data.length; i++){
        labels[i] = data[i].label;
        count[i] = parseInt(data[i].data);    
    }

    $('#line_data').highcharts({
        title: {
            text: prob + ' vs ' + field, //Dynamic
            x: -20 //center
        },
        xAxis: {
            categories:labels
        },
        yAxis: {
            title: {
                text: 'Employee  Count'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        credits: {
             text: 'Emp-Sense'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Employee Count',
            data: count
        }]
    });
}  
            
/*Display Charts */

/*Get charts data through ajax */
function getChartDataAjax(prob,group){
    var data = [];
    var barData = [];
    var heighest;

    $.ajax({
        type:     "POST",
        url:      "assets/controllers/chart_controllers/Chart_Analytical.php",
        data:     ({
            prob: prob,
            group: group
        }),
        dataType: "json"
    }).done(function(response) { 
        var pieChartData = response['predict'];
        var barChartData = response['predict'];

        for (var i = 0; i < pieChartData.length; i++) {
            data[i] = {
                label: pieChartData[i]['dept'],
                data: pieChartData[i]['count']
            };
        }

        for (var i = 0; i < barChartData.length; i++) {
            barData[i] = [i+1,barChartData[i]['count']];
        }

        barHighChart(data,group,prob);
        pieHighChart(data,group,prob);
        lineHighChart(data,group,prob);
        heighest = response['maxDept'];
        
        if(group === 'Age')
            heighest = heighest + "(Years)";
        else if(group === 'Salary')
            heighest = "Rs. "+heighest ;
        else if(group === 'Tenure')
            heighest = heighest + "(Years)";
        else if(group === 'department')
            heighest = heighest + " Department";
        setHeighest(heighest);
    });
}

//Display Popup window in table button click
function displayTablePopup(prob,group){
    $("#popupHead").text(group + " Vs Employee Count (" + prob*100 + "% or above Churn Probability)");
    
    var groupColTitle = group;
    if(group === 'Job Role')
        group = 'Job_Role';    
    
    if(group === 'Age')
        groupColTitle = group + "(Years)";
    else if(group === 'Salary')
        groupColTitle = group + "(Rs)";
    else if(group === 'Tenure')
        groupColTitle = group + "(Years)";
    
    $.ajax({
        type:     "POST",
        url:      "assets/controllers/chart_controllers/Chart_Analytical.php",
        data:     ({
            prob: prob,
            group: group
        }),
        dataType: "json"
    }).done(function(response) {    
        var employeeChurnData = response['predict'];        
        var data = [];
        var empTotalCount = 0;
        for (var i = 0; i < employeeChurnData.length; i++) {
            var employeeCount = parseFloat(employeeChurnData[i]['count']);
            employeeCount = Number((employeeCount).toFixed(2));

            var groupValue = employeeChurnData[i]['dept'];
            var empCount = employeeCount;
            empTotalCount += empCount;
            data[i] = [groupValue,empCount];
        }       

        $('#content').DataTable( {
            data:data,
            dom: 'Bfrtip',
            "columns": [{ sTitle: groupColTitle},{ sTitle: "Employee Count"}],
            "order": [[ 1, "desc" ]],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
        $("#employeeCount").text(empTotalCount);
    });
} 
