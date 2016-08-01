var Index = function () {
    return {
        //main function
        init: function () {            
            displayEmployeePopup();
            displayAgeGroupPopup();
            displayDeptChurnPopup();
            displayFactorPopup();
            $("#Emp_ViewMore").click(function () {                
                $('#moreEmployeePopUp').bPopup({
                    easing: 'easeOutBack', //uses jQuery easing plugin
                    speed: 600,
                    transition: 'slideDown',
                    modalClose : false
                });
            });
            $("#AgeGroup_ViewMore").click(function () {
                $('#moreAgeRangePopUp').bPopup({
                    easing: 'easeOutBack', //uses jQuery easing plugin
                    speed: 600,
                    transition: 'slideDown',
                    modalClose : false
                });
            });
            $("#Dept_ViewMore").click(function () {                
                $('#moreADeptPopUp').bPopup({
                    easing: 'easeOutBack', //uses jQuery easing plugin
                    speed: 600,
                    transition: 'slideDown',
                    modalClose : false
                });
            });
            $("#Factor_ViewMore").click(function () {
                $('#moreFactorPopUp').bPopup({
                    easing: 'easeOutBack', //uses jQuery easing plugin
                    speed: 600,
                    transition: 'slideDown',
                    modalClose : false
                });
            });          
        },

       
        initCharts: function () {
            if (!jQuery.plot) {
                return;
            }

            var data = [];
            var totalPoints = 250;

            // random data generator for plot charts

            function getRandomData() {
                if (data.length > 0) data = data.slice(1);
                // do a random walk
                while (data.length < totalPoints) {
                    var prev = data.length > 0 ? data[data.length - 1] : 50;
                    var y = prev + Math.random() * 10 - 5;
                    if (y < 0) y = 0;
                    if (y > 100) y = 100;
                    data.push(y);
                }
                // zip the generated y values with the x values
                var res = [];
                for (var i = 0; i < data.length; ++i) res.push([i, data[i]]);
                return res;
            }
            
            /*function randValue() {
                return (Math.floor(Math.random() * (1 + 50 - 20))) + 10;
            }*/

            //First chart display
            $.ajax({
                type:     "POST",
                url:      "assets/controllers/chart_controllers/fillChartIndexPage1.php",
                data:     ({field:'department'}),
                dataType: "json"
            }).done(function(response) { 
                loadFirstComparisonGraph(response);
            }); 
            
            function loadFirstComparisonGraph(response){
                var predictData = response[0]['predict'];
                var trainData = response[0]['train'];
                //alert(predictData[0]['dept'] + trainData[0]['prob']);
                var futureTurnOver = [];
                var pastTurnOver = [];
                var xaxisLables = [];
                var j = 1;
                
                //first index fill with empty values
                futureTurnOver.push([0,0]);
                xaxisLables.push([0,'']);
                pastTurnOver.push([0,0]);
                for (var i = 0; i < predictData.length; i++) {                    
                    var predProb = predictData[i]['prob'] * 100;
                    parseInt(futureTurnOver.push([j,predProb]));
                    xaxisLables.push([j++,predictData[i]['dept']]);
                }
                var future = [];
                for(i = 0; i < futureTurnOver.length; i++){
                    future[i] = parseFloat(futureTurnOver[i][1]);    
                }
                
                j=1;
                for (var i = 0; i < trainData.length; i++) {
                    var trainProb = trainData[i]['prob'] * 100;
                    parseInt(pastTurnOver.push([j++,trainProb]));
                }   
                var past = [];
                for(i = 0; i < pastTurnOver.length; i++){
                    past[i] = parseFloat(pastTurnOver[i][1]);    
                }
                var xaxis = [];
                for(i = 0; i < xaxisLables.length; i++){
                    xaxis[i] = xaxisLables[i][1];    
                }
                //last index fill with empty values
                future.push([0]);
                xaxis.push(['']);
                past.push([0]);
                displayChart(future,past,xaxis);
            }
            //First Dropdown handler
            $("#churnComparisonField").change(function () {
                var field = this.value;
                if(field === 'Job Role')
                    field = 'job_role';
                else if(field === 'Age')
                    field = 'Age';
                else if(field === 'Salary')
                    field = 'Salary';
                else if(field === 'Tenure')
                    field = 'Tenure';
                
                $.ajax({
                    type:     "POST",
                    url:      "assets/controllers/chart_controllers/fillChartIndexPage1.php",
                    data:     ({field:field}),
                    dataType: "json"
                }).done(function(response) { 
                    loadFirstComparisonGraph(response);
                });
            });
            
            //Second chart display               
            $.ajax({
                type:     "POST",
                url:      "assets/controllers/chart_controllers/fillChartIndexPage2.php",
                data:     ({field:'department'}),
                dataType: "json"
            }).done(function(response) {
                var field = 'Department';
                loadComparisonGraph(response, field);
            }); 
            
            function loadComparisonGraph(response,field) {
                var maleData = response['maleDeptData'];
                var femaleData = response['femaleDeptData'];

                var maleTurnOver = [];
                var femaleTurnOver = [];
                var xaxisLables = [];

                var j = 1;
                
                if(maleData.length > femaleData.length)
                {
                    for (var i = 0; i < maleData.length; i++) {
                        xaxisLables.push([j++,maleData[i]['dept']]);
                    } 
                }
                else
                {
                    for (var i = 0; i < femaleData.length; i++) {
                        xaxisLables.push([j++,femaleData[i]['dept']]);
                    } 
                }
                //first index fill with empty values
                for (var i = 0; i < maleData.length; i++) {                    
                    var predProb = maleData[i]['probMale'];
                    parseInt(maleTurnOver.push([j,predProb]));
                    xaxisLables.push([j++,maleData[i]['dept']]);
                }
                var male = [];
                for(i = 0; i < maleTurnOver.length; i++){
                    male[i] = parseFloat(maleTurnOver[i][1]);    
                }
                
                j=1;
                for (var i = 0; i < femaleData.length; i++) {
                    var trainProb = femaleData[i]['probFemale'];
                    parseInt(femaleTurnOver.push([j++,trainProb]));
                }   
                
                var female = [];
                for(i = 0; i < femaleTurnOver.length; i++){
                    female[i] = parseFloat(femaleTurnOver[i][1]);    
                }
                var xaxis = [];
                for(i = 0; i < xaxisLables.length; i++){
                    xaxis[i] = xaxisLables[i][1];    
                }
                
                //last index fill with empty values

                xaxis.push(['']);
                displayComparisonChart(male,female,xaxis, field);
            }
            //Second Dropdown handler
            $("#comparisonField").change(function () {
                var field = this.value;
                if(field === 'Job Role')
                    field = 'job_role';
                else if(field === 'Age')
                    field = 'Age';
                else if(field === 'Salary')
                    field = 'Salary';
                else if(field === 'Reason')
                    field = 'Reason_To_Leave';
                else if(field === 'Tenure')
                    field = 'Tenure';
                
                $.ajax({
                    type:     "POST",
                    url:      "assets/controllers/chart_controllers/fillChartIndexPage2.php",
                    data:     ({field:field}),
                    dataType: "json"
                }).done(function(response) { 
                    loadComparisonGraph(response, field);
                });
            });
        }  
    };
}();

function displayChart(futureTurnOver,pastTurnOver, xaxisLables){
    if ($('#site_statistics').size() !== 0) {

        $('#site_statistics_loading').hide();
        $('#site_statistics_content').show();
        $('#site_statistics').highcharts({
            title: {
                text: 'Churn Comparison with Past and Future', //Dynamic
                x: -20 //center
            },
            xAxis: {
                categories:xaxisLables
            },
            yAxis: {
                title: {
                    text: 'Average Churn Rate'
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
                name: 'Future Turn Over',
                data: futureTurnOver,
                color: '#d12610'
            },{
                name: 'Past Turn Over',
                data: pastTurnOver
            }]
        });        
    }
}

function showTooltip(title, x, y, contents) {
    $('<div id="tooltip" class="chart-tooltip"><div class="date">' + contents + '<\/div><div class="label label-success">CTR: ' + x / 10 + '%<\/div><div class="label label-important">Imp: ' + x * 12 + '<\/div><\/div>').css({
        position: 'absolute',
        display: 'none',
        top: y - 100,
        width: 75,
        left: x - 40,
        border: '0px solid #ccc',
        padding: '2px 6px',
        'background-color': '#fff'
    }).appendTo("body").fadeIn(200);
}

function displayEmployeePopup(){
    $.ajax({
        type:     "post",
        url:      "assets/controllers/popup_controllers/employeeChurnData.php",
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
            data[i] = [empName,prob];
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
}

function displayAgeGroupPopup(){
    $.ajax({
        type:     "post",
        url:      "assets/controllers/popup_controllers/employeeChurnAgeData.php",
        data:     $(this).serialize(),
        dataType: "json"
    }).done(function(response) {
        var employeeChurnData = response;  
        var data = [];
        for (var i = 0; i < employeeChurnData.length; i++) {
            var churnProb = parseFloat(employeeChurnData[i]['prob']);
            churnProb = Number((churnProb).toFixed(2));
            
            var ageRange = employeeChurnData[i]['ageRange'];
            var prob = churnProb * 100;
            data[i] = [ageRange,prob];
        }       

        $('#content1').DataTable( {
            data:data,
            dom: 'Bfrtip',
            "order": [[ 1, "desc" ]],
            buttons: [
                'copy', 'csv', 'excel', 
                {
                    extend: 'pdfHtml5',
                    title: 'Emp-Sense Age Range vs Churn Probability'
                }, 
                'print'
            ]
        } );        
    });
}

function displayDeptChurnPopup(){
    $.ajax({
        type:     "post",
        url:      "assets/controllers/popup_controllers/employeeChurnDeptData.php",
        data:     $(this).serialize(),
        dataType: "json"
    }).done(function(response) {        
        var employeeChurnData = response;  
        var data = [];
        for (var i = 0; i < employeeChurnData.length; i++) {
            var churnProb = parseFloat(employeeChurnData[i]['prob']);
            churnProb = Number((churnProb).toFixed(2));
            
            var empDept = employeeChurnData[i]['dept'];
            var prob = churnProb * 100;
            data[i] = [empDept,prob];
        }       

        $('#content2').DataTable( {
            data:data,
            dom: 'Bfrtip',
            "order": [[ 1, "desc" ]],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );        
    });
}

function displayFactorPopup(){
    $.ajax({
        type:     "post",
        url:      "assets/controllers/popup_controllers/employeeChurnFactorData.php",
        data:     $(this).serialize(),
        dataType: "json"
    }).done(function(response) {        
        var employeeChurnData = response;  
        var data = [];
        for (var i = 0; i < employeeChurnData.length; i++) {
            var churnProb = parseFloat(employeeChurnData[i]['prob']);
            churnProb = Number((churnProb).toFixed(2));
            
            var reason = employeeChurnData[i]['reason'];
            var prob = churnProb * 100;
            data[i] = [reason,prob];
        }       

        $('#content3').DataTable( {
            data:data,
            dom: 'Bfrtip',
            "order": [[ 1, "desc" ]],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    });
}

function displayComparisonChart(maleTurnOver,femaleTurnOver,xaxisLables, field) {
    
    $('#chart_5').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Probability vs ' + field
        },
        credits: {
            text: 'Emp-Sense'
        },
        xAxis: {
            categories: xaxisLables,
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Average Probability'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
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
            name: 'Male Turn Over',
            data: maleTurnOver,
            color: '#50D050'
        },{
            name: 'Female Turn Over',
            data: femaleTurnOver
        }]
    });   
}