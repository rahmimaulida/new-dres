<?php 
include 'header.php'; 
include '../config.php';

$scrap = mysql_query("SELECT sum(amount) as total, line FROM tbl_prod_reject GROUP BY line ORDER BY total DESC");
while($res=mysql_fetch_array($scrap)){
  $line=$res['line'];
  $catg=$catg."'".$res['line']."',";
  $act=$act.round($res['total'],2).",";
}

$open = mysql_query("SELECT count(*) as total FROM tbl_prod_reject WHERE `Action` = 'OPEN'");
$close = mysql_query("SELECT count(*) as total FROM tbl_prod_reject WHERE `Action` = 'CLOSE'");
$aging = mysql_query("SELECT count(*) as total FROM tbl_prod_reject WHERE `Action` = 'Aging'");
$res1=mysql_fetch_assoc($open);
$res2=mysql_fetch_assoc($close);
$res3=mysql_fetch_assoc($aging);

$percentopen = ($res1['total'] * 100)/($res1['total']+$res2['total']+$res3['total']);
$percentclose = ($res2['total'] * 100)/($res1['total']+$res2['total']+$res3['total']);
$percentaging = ($res3['total'] * 100)/($res1['total']+$res2['total']+$res3['total']);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <input type="hidden" id="line" value="<?php echo $line?>">
          <div class="box box-solid box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-line-chart"></i> Scrap Daily Trends</h3>
            </div>
            <div class="box-body">
              <div id="scrap_daily" style="width: 98%"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box box-solid box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-bar-chart"></i> Scrap Summary</h3>
            </div>
            <div class="box-body" height="50%">
              <div id="scrap_summary" style="width: 98%"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box box-solid box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-line-chart"></i> Scrap Pareto</h3>
            </div>
            <div class="box-body">
              <div id="scrap_pareto" style="width: 98%"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box box-solid box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-pie-chart"></i> Summary of Action Tracker</h3>
            </div>
            <div class="box-body" height="50%">
              <div id="summary_at" style="width: 98%"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'footer.php'; ?>
</div>
<!-- ./wrapper -->

<div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
</div>

<!-- jQuery 3 -->
<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../assets/bower_components/raphael/raphael.min.js"></script>
<script src="../assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../assets/bower_components/moment/min/moment.min.js"></script>
<script src="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- HighCharts -->
<script src="../assets/bower_components/highcharts/highcharts.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<script src="../assets/bower_components/highcharts/modules/pareto.js"></script>
<script>
$(function () {
    $('#data').DataTable()
  })

$(function () {
    $('#scrap_daily').highcharts({
        chart: {
            height: 300
        },
        title: {
            text: "SCRAP DAILY TRENDS",
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: [<?php echo $catg;?>]
        },
        credits: {
          enabled: false
        },
        plotOptions: {
            series: {
                cursor: 'pointer',
                point: {
                    events: {
                        click: function () {
                            $.ajax({
                                url: 'showtable.php',
                                type: 'get',
                                data: {line: this.category},
                                success: function(response){ 
                                // Add response in Modal body
                                $('#ModalUpdate').html(response);

                                // Display Modal
                                $('#ModalUpdate').modal('show'); 
                                }
                            });
                        }
                            
                    }
                }
            }
        },
        yAxis: {
            title: {
                text: 'Amount'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '$ (CLICK FOR DETAILS)'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Amount',
            color: '#3DCD58',
            data: [<?php echo $act;?>]
        }]
    });
});

$(function () {
    $('#scrap_summary').highcharts({
        chart: {
            height: 300,
            type: 'column'
        },
        title: {
            text: "SCRAP SUMMARY",
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: [<?php echo $catg;?>]
        },
        credits: {
          enabled: false
        },
        plotOptions: {
            series: {
                cursor: 'pointer',
                point: {
                    events: {
                        click: function () {
							$.ajax({
                                url: 'showtable.php',
                                type: 'get',
                                data: {line: this.category},
                                success: function(response){ 
                                // Add response in Modal body
                                $('#ModalUpdate').html(response);

                                // Display Modal
                                $('#ModalUpdate').modal('show'); 
                                }
                            });
                        }
                    }
                }
            }
        },
        yAxis: {
            title: {
                text: 'Amount'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '$ (CLICK FOR DETAILS)'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Amount',
            color: '#3DCD58',
            data: [<?php echo $act;?>]
        }]
    });
});

$(function () {
    $('#scrap_pareto').highcharts({
        chart: {
            height: 300,
            type: 'column'
        },
        title: {
            text: "SCRAP PARETO",
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: [<?php echo $catg;?>]
        },
        credits: {
          enabled: false
        },
        plotOptions: {
            series: {
                cursor: 'pointer',
                point: {
                    events: {
                        click: function () {
							$.ajax({
                                url: 'showtable.php',
                                type: 'get',
                                data: {line: this.category},
                                success: function(response){ 
                                // Add response in Modal body
                                $('#ModalUpdate').html(response);

                                // Display Modal
                                $('#ModalUpdate').modal('show'); 
                                }
                            });
                        }
                    }
                }
            }
        },
        yAxis: [{
            title: {
                text: ''
            }
        }, {
            title: {
                text: ''
            },
            minPadding: 0,
            maxPadding: 0,
            max: 100,
            min: 0,
            opposite: true,
            labels: {
                format: "{value}%"
            }
        }],
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            type: 'pareto',
            name: 'Pareto',
            yAxis: 1,
            zIndex: 10,
            baseSeries: 1
        },{
            name: 'Amount',
            type: 'column',
            zIndex: 2,
            data: [<?php echo $act;?>]
        }]
    });
});

Highcharts.chart('summary_at', {
    chart: {
        height: 300,
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Action Pie Chart '
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    credits: {
      enabled: false
    },
    plotOptions: {
            series: {
                cursor: 'pointer',
                point: {
                    events: {
                        click: function () {
							$.ajax({
                                url: 'showtable.php',
                                type: 'get',
                                data: {line: this.category},
                                success: function(response){ 
                                // Add response in Modal body
                                $('#ModalUpdate').html(response);

                                // Display Modal
                                $('#ModalUpdate').modal('show'); 
                                }
                            });
                        }
                    }
                }
            }
        },
    series: [{
        name: 'Percentage',
        colorByPoint: true,
        data: [{
            name: 'CLOSE',
            color: '#21B064',
            y: <?php echo $percentclose; ?>,
            sliced: true
        }, {
            name: 'OPEN',
            color: '#CC3A36',
            y: <?php echo $percentopen; ?>
        },{
            name: 'AGING',
            color: '#9da1a0',
            y: <?php echo $percentaging; ?>
        }]
    }]
});

</script>
</body>
</html>
