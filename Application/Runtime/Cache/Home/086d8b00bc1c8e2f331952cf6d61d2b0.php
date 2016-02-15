<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>里程密-官方后台</title>

    <link href="/Public/newPublic/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/newPublic/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="/Public/newPublic/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/Public/newPublic/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/Public/newPublic/css/animate.css" rel="stylesheet">
    <link href="/Public/newPublic/css/style.css" rel="stylesheet">

</head>

<frameset rows="59,*" frameborder="no" border="0" framespacing="0">
    <frame src="newTop.html" noresize="noresize" frameborder="0" name="topFrame" marginwidth="0" marginheight="0" scrolling="no">
<frameset rows="*" cols="195,*" id="frame">
    <frame src="newLeft.html" name="leftFrame" noresize="noresize" marginwidth="0" marginheight="0" frameborder="0" scrolling="auto">
    <frame src="newRight.html" name="main" marginwidth="0" marginheight="0" frameborder="0" scrolling="yes">
</frameset>
<frame src="UntitledFrame-1" noresize="noresize" frameborder="0" name="bottomFrame" marginwidth="0" marginheight="0" scrolling="no">
<noframes>
    <body></body>
</noframes>
</frameset>


    <!-- Mainly scripts -->
    <script src="/Public/newPublic/js/jquery-2.1.1.js"></script>
    <script src="/Public/newPublic/js/bootstrap.min.js"></script>
    <script src="/Public/newPublic/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/Public/newPublic/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="/Public/newPublic/js/plugins/flot/jquery.flot.js"></script>
    <script src="/Public/newPublic/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/Public/newPublic/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/Public/newPublic/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/Public/newPublic/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="/Public/newPublic/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/Public/newPublic/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/Public/newPublic/js/inspinia.js"></script>
    <script src="/Public/newPublic/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/Public/newPublic/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="/Public/newPublic/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="/Public/newPublic/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="/Public/newPublic/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="/Public/newPublic/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="/Public/newPublic/js/plugins/toastr/toastr.min.js"></script>


    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

            }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#464f88"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#b5b8cf",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
            };

            var ctx = document.getElementById("doughnutChart").getContext("2d");
            var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

            var polarData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 140,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 200,
                    color: "#b5b8cf",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var polarOptions = {
                scaleShowLabelBackdrop: true,
                scaleBackdropColor: "rgba(255,255,255,0.75)",
                scaleBeginAtZero: true,
                scaleBackdropPaddingY: 1,
                scaleBackdropPaddingX: 1,
                scaleShowLine: true,
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
            };
            var ctx = document.getElementById("polarChart").getContext("2d");
            var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

        });
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script',' /Public/newPublic/js/analytics.js','ga');

        ga('create', 'UA-4625583-2', 'webapplayers.com');
        ga('send', 'pageview');

    </script>

</html>