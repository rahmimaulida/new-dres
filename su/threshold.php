<?php
include("header.php");
include("../config.php");

$show = mysql_query("SELECT * FROM tbl_threshold");
$res = mysql_fetch_array($show);

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Threshold
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a class="active">Threshold</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="col-md-4">
        <!-- Default box -->
        <div class="box">
            <form role="form" class="form-horizontal" action="add_threshold.php" method="post">
                <div class="box-header with-border box-solid bg-green">
                    <h3 class="box-title">Threshold</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Threshold</label>
                        </div>
                        <div class="col-md-9">
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $res['id_threshold'];?>">
                            <input type="text" class="form-control" name="threshold" id="threshold" value="<?php echo $res['threshold']; ?>">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                    <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-edit"></i> Update Threshold</button>
                </div>
                <!-- /.box-footer-->
            </form>
        </div>
        <!-- /.box -->
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include("footer.php"); ?>

  <!-- jQuery 3 -->
<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>