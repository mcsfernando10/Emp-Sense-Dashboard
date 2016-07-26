var Index = function () {
    return {

        //main function
        init: function () {
            App.addResponsiveHandler(function () {
                jQuery('.vmaps').each(function () {
                    var map = jQuery(this);
                    map.width(map.parent().width());
                });
            });
            
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
                for (var i = 0; i < data.length; ++i) res.push([i, data[i]])
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
            
            
            if ($('#load_statistics').size() !== 0) {
                 //server load
                $('#load_statistics_loading').hide();
                $('#load_statistics_content').show();
        
                var updateInterval = 30;
                var plot_statistics = $.plot($("#load_statistics"), [getRandomData()], {
                series: {
                    shadowSize: 1
                },
                lines: {
                    show: true,
                    lineWidth: 0.2,
                    fill: true,
                    fillColor: {
                        colors: [{
                                opacity: 0.1
                            }, {
                                opacity: 1
                            }
                        ]
                    }
                },
                yaxis: {
                    min: 0,
                    max: 100,
                    tickFormatter: function (v) {
                        return v + "%";
                    }
                },
                xaxis: {
                    show: false
                },
                colors: ["#e14e3d"],
                grid: {
                    tickColor: "#a8a3a3",
                    borderWidth: 0
                }
                });
                
                function statisticsUpdate() {
                plot_statistics.setData([getRandomData()]);
                plot_statistics.draw();
                setTimeout(statisticsUpdate, updateInterval);
                
                }
                
                statisticsUpdate();

                $('#load_statistics').bind("mouseleave", function () {
                    $("#tooltip").remove();
                });
            }

            if ($('#site_activities').size() != 0) {
                //site activities
                var previousPoint2 = null;
                $('#site_activities_loading').hide();
                $('#site_activities_content').show();

                var activities = [
                    [1, 10],
                    [2, 9],
                    [3, 8],
                    [4, 6],
                    [5, 5],
                    [6, 3],
                    [7, 9],
                    [8, 10],
                    [9, 12],
                    [10, 14],
                    [11, 15],
                    [12, 13],
                    [13, 11],
                    [14, 10],
                    [15, 9],
                    [16, 8],
                    [17, 12],
                    [18, 14],
                    [19, 16],
                    [20, 19],
                    [21, 20],
                    [22, 20],
                    [23, 19],
                    [24, 17],
                    [25, 15],
                    [25, 14],
                    [26, 12],
                    [27, 10],
                    [28, 8],
                    [29, 10],
                    [30, 12],
                    [31, 10],
                    [32, 9],
                    [33, 8],
                    [34, 6],
                    [35, 5],
                    [36, 3],
                    [37, 9],
                    [38, 10],
                    [39, 12],
                    [40, 14],
                    [41, 15],
                    [42, 13],
                    [43, 11],
                    [44, 10],
                    [45, 9],
                    [46, 8],
                    [47, 12],
                    [48, 14],
                    [49, 16],
                    [50, 12],
                    [51, 10]
                ];

                var plot_activities = $.plot(
                    $("#site_activities"), [{
                        data: activities,
                        color: "rgba(107,207,123, 0.9)",
                        shadowSize: 0,
                        bars: {
                            show: true,
                            lineWidth: 0,
                            fill: true,
                            fillColor: {
                                colors: [{
                                        opacity: 1
                                    }, {
                                        opacity: 1
                                    }
                                ]
                            }
                        }
                    }
                ], {
                    series: {
                        bars: {
                            show: true,
                            barWidth: 0.9
                        }
                    },
                    grid: {
                        show: false,
                        hoverable: true,
                        clickable: false,
                        autoHighlight: true,
                        borderWidth: 0
                    },
                    yaxis: {
                        min: 0,
                        max: 20
                    }
                });

                $("#site_activities").bind("plothover", function (event, pos, item) {
                    $("#x").text(pos.x.toFixed(2));
                    $("#y").text(pos.y.toFixed(2));
                    if (item) {
                        if (previousPoint2 != item.dataIndex) {
                            previousPoint2 = item.dataIndex;
                            $("#tooltip").remove();
                            var x = item.datapoint[0].toFixed(2),
                                y = item.datapoint[1].toFixed(2);
                            showTooltip('24 Feb 2013', item.pageX, item.pageY, x);
                        }
                    }
                });

                $('#site_activities').bind("mouseleave", function () {
                    $("#tooltip").remove();
                });
            }            
        },

        
/*
        initChat: function () {

            var cont = $('#chats');
            var list = $('.chats', cont);
            var form = $('.chat-form', cont);
            var input = $('input', form);
            var btn = $('.btn', form);

            var handleClick = function (e) {
                e.preventDefault();
                
                var text = input.val();
                if (text.length == 0) {
                    return;
                }

                var time = new Date();
                var time_str = time.toString('MMM dd, yyyy hh:mm');
                var tpl = '';
                tpl += '<li class="out">';
                tpl += '<img class="avatar" alt="" src="assets/img/avatar1.jpg"/>';
                tpl += '<div class="message">';
                tpl += '<span class="arrow"></span>';
                tpl += '<a href="#" class="name">Bob Nilson</a>&nbsp;';
                tpl += '<span class="datetime">at ' + time_str + '</span>';
                tpl += '<span class="body">';
                tpl += text;
                tpl += '</span>';
                tpl += '</div>';
                tpl += '</li>';

                var msg = list.append(tpl);
                input.val("");
                $('.scroller', cont).slimScroll({
                    scrollTo: list.height()
                });
            }

            /*
            $('.scroller', cont).slimScroll({
                scrollTo: list.height()
            });
            

            $('body').on('click', '.message .name', function(e){
                e.preventDefault(); // prevent click event

                var name = $(this).text(); // get clicked user's full name
                input.val('@' +  name + ':'); // set it into the input field
                App.scrollTo(input); // scroll to input if needed
            });

            btn.click(handleClick);
            input.keypress(function (e) {
                if (e.which == 13) {
                    handleClick();
                    return false; //<---- Add this line
                }
            });
        },

        initDashboardDaterange: function () {

            $('#dashboard-report-range').daterangepicker({
                ranges: {
                    'Today': ['today', 'today'],
                    'Yesterday': ['yesterday', 'yesterday'],
                    'Last 7 Days': [Date.today().add({
                            days: -6
                        }), 'today'],
                    'Last 30 Days': [Date.today().add({
                            days: -29
                        }), 'today'],
                    'This Month': [Date.today().moveToFirstDayOfMonth(), Date.today().moveToLastDayOfMonth()],
                    'Last Month': [Date.today().moveToFirstDayOfMonth().add({
                            months: -1
                        }), Date.today().moveToFirstDayOfMonth().add({
                            days: -1
                        })]
                },
                opens: (App.isRTL() ? 'right' : 'left'),
                format: 'MM/dd/yyyy',
                separator: ' to ',
                startDate: Date.today().add({
                    days: -29
                }),
                endDate: Date.today(),
                minDate: '01/01/2012',
                maxDate: '12/31/2014',
                locale: {
                    applyLabel: 'Submit',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom Range',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                },
                showWeekNumbers: true,
                buttonClasses: ['btn-danger']
            },

            function (start, end) {
                App.blockUI(jQuery("#dashboard"));
                setTimeout(function () {
                    App.unblockUI(jQuery("#dashboard"));
                    $.gritter.add({
                        title: 'Dashboard',
                        text: 'Dashboard date range updated.'
                    });
                    App.scrollTo();
                }, 1000);
                $('#dashboard-report-range span').html(start.toString('MMMM d, yyyy') + ' - ' + end.toString('MMMM d, yyyy'));

            });

            $('#dashboard-report-range').show();

            $('#dashboard-report-range span').html(Date.today().add({
                days: -29
            }).toString('MMMM d, yyyy') + ' - ' + Date.today().toString('MMMM d, yyyy'));
        },

        initIntro: function () {
            if ($.cookie('intro_show')) {
                return;
            }

            $.cookie('intro_show', 1);

            setTimeout(function () {
                var unique_id = $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Meet Metronic!',
                    // (string | mandatory) the text inside the notification
                    text: 'Metronic is a brand new Responsive Admin Dashboard Template you have always been looking for!',
                    // (string | optional) the image to display on the left
                    image: './assets/img/avatar1.jpg',
                    // (bool | optional) if you want it to fade out on its own or just sit there
                    sticky: true,
                    // (int | optional) the time you want it to be alive for before fading out
                    time: '',
                    // (string | optional) the class name you want to apply to that specific message
                    class_name: 'my-sticky-class'
                });

                // You can have it return a unique id, this can be used to manually remove it later using
                setTimeout(function () {
                    $.gritter.remove(unique_id, {
                        fade: true,
                        speed: 'slow'
                    });
                }, 12000);
            }, 2000);

            setTimeout(function () {
                var unique_id = $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Buy Metronic!',
                    // (string | mandatory) the text inside the notification
                    text: 'Metronic comes with a huge collection of reusable and easy customizable UI components and plugins. Buy Metronic today!',
                    // (string | optional) the image to display on the left
                    image: './assets/img/avatar1.jpg',
                    // (bool | optional) if you want it to fade out on its own or just sit there
                    sticky: true,
                    // (int | optional) the time you want it to be alive for before fading out
                    time: '',
                    // (string | optional) the class name you want to apply to that specific message
                    class_name: 'my-sticky-class'
                });

                // You can have it return a unique id, this can be used to manually remove it later using
                setTimeout(function () {
                    $.gritter.remove(unique_id, {
                        fade: true,
                        speed: 'slow'
                    });
                }, 13000);
            }, 8000);

            setTimeout(function () {

                $('#styler').pulsate({
                    color: "#bb3319",
                    repeat: 10
                });

                $.extend($.gritter.options, {
                    position: 'top-left'
                });

                var unique_id = $.gritter.add({
                    position: 'top-left',
                    // (string | mandatory) the heading of the notification
                    title: 'Customize Metronic!',
                    // (string | mandatory) the text inside the notification
                    text: 'Metronic allows you to easily customize the theme colors and layout settings.',
                    // (string | optional) the image to display on the left
                    image1: './assets/img/avatar1.png',
                    // (bool | optional) if you want it to fade out on its own or just sit there
                    sticky: true,
                    // (int | optional) the time you want it to be alive for before fading out
                    time: '',
                    // (string | optional) the class name you want to apply to that specific message
                    class_name: 'my-sticky-class'
                });

                $.extend($.gritter.options, {
                    position: 'top-right'
                });

                // You can have it return a unique id, this can be used to manually remove it later using
                setTimeout(function () {
                    $.gritter.remove(unique_id, {
                        fade: true,
                        speed: 'slow'
                    });
                }, 15000);

            }, 23000);

            setTimeout(function () {

                $.extend($.gritter.options, {
                    position: 'top-left'
                });

                var unique_id = $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Notification',
                    // (string | mandatory) the text inside the notification
                    text: 'You have 3 new notifications.',
                    // (string | optional) the image to display on the left
                    image1: './assets/img/image1.jpg',
                    // (bool | optional) if you want it to fade out on its own or just sit there
                    sticky: true,
                    // (int | optional) the time you want it to be alive for before fading out
                    time: '',
                    // (string | optional) the class name you want to apply to that specific message
                    class_name: 'my-sticky-class'
                });

                setTimeout(function () {
                    $.gritter.remove(unique_id, {
                        fade: true,
                        speed: 'slow'
                    });
                }, 4000);

                $.extend($.gritter.options, {
                    position: 'top-right'
                });

                var number = $('#header_notification_bar .badge').text();
                number = parseInt(number);
                number = number + 3;
                $('#header_notification_bar .badge').text(number);
                $('#header_notification_bar').pulsate({
                    color: "#66bce6",
                    repeat: 5
                });

            }, 40000);

            setTimeout(function () {

                $.extend($.gritter.options, {
                    position: 'top-left'
                });

                var unique_id = $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Inbox',
                    // (string | mandatory) the text inside the notification
                    text: 'You have 2 new messages in your inbox.',
                    // (string | optional) the image to display on the left
                    image1: './assets/img/avatar1.jpg',
                    // (bool | optional) if you want it to fade out on its own or just sit there
                    sticky: true,
                    // (int | optional) the time you want it to be alive for before fading out
                    time: '',
                    // (string | optional) the class name you want to apply to that specific message
                    class_name: 'my-sticky-class'
                });

                $.extend($.gritter.options, {
                    position: 'top-right'
                });

                setTimeout(function () {
                    $.gritter.remove(unique_id, {
                        fade: true,
                        speed: 'slow'
                    });
                }, 4000);

                var number = $('#header_inbox_bar .badge').text();
                number = parseInt(number);
                number = number + 2;
                $('#header_inbox_bar .badge').text(number);
                $('#header_inbox_bar').pulsate({
                    color: "#dd5131",
                    repeat: 5
                });
            }, 60000);
        }    */    
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
        'background-color': '#fff',
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
                'copy', 'csv', 'excel', 'pdf', 'print'
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
        
        $("#highestFact").text("ABC");
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
                 text: 'Emp-Sense',
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
    
    /*var stack = 0,
        bars = true,
        lines = false,
        steps = false;

    function plotWithOptions() {
        $.plot($("#chart_5"), 
                [{
                    data: maleTurnOver,
                    label: "Male"
                }, {
                    data: femaleTurnOver,
                    label: "Female"
                }], {
                series: {
                    stack: stack,
                    lines: {
                        show: lines,
                        fill: true,
                        steps: steps
                    },
                    bars: {
                        show: bars,
                        barWidth: 0.3
                    }
                },
                xaxis: {
                    ticks: xaxisLables,
                    tickDecimals: 0
                }
            }
        );
    }

    $(".stackControls input").click(function (e) {
        e.preventDefault();
        stack = $(this).val() === "With stacking" ? true : null;
        plotWithOptions();
    });
    $(".graphControls input").click(function (e) {
        e.preventDefault();
        bars = $(this).val().indexOf("Bars") !== -1;
        lines = $(this).val().indexOf("Lines") !== -1;
        steps = $(this).val().indexOf("steps") !== -1;
        plotWithOptions();
    });

    plotWithOptions();*/
}