<?php 
include "header.php";
include("../config.php");

$qrysec = mysql_query("SELECT sector FROM ")

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        NEW ACTION
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Action Item</a></li>
        <li class="active">New Action</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10 col-md-offset-1">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border box-solid bg-green">
              <h3 class="box-title">New Action Item</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" class="form-horizontal" action="insact.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="Sector" class="col-sm-2 control-label">Sector</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="sector" name="sector" placeholder="Insert Sector">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Date" class="col-sm-2 control-label">Date</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="date" id="date" placeholder="insert Date">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Part No" class="col-sm-2 control-label">Part No</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="part_no" id="part_no" placeholder="Insert Part NO">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Issue" class="col-sm-2 control-label">Issue</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" id="issue" name="issue"><?php echo $iss;?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Action" class="col-sm-2 control-label">Action</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" id="action" name="action"><?php echo $row->Action;?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="When" class="col-sm-2 control-label">When</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="when" id="when" placeholder="Insert When">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Status" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="status" id="status">
                        <option value="" selected>Status</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="PIC" class="col-sm-2 control-label">PIC</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="pic" id="pic">
                        <option value="" selected>SELECT PIC</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer text-center">
                <input type="submit" name="sa" id="sa" onmouseover="this.style.cursor='pointer'" class="btn btn-lg btn-success" value="SAVE">
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'footer.php'?>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
$(document).ready(function () {

$('#tgt').datepicker({
    format: 'yyyy-mm-dd'
});
});
</script>
<?php if ($_SESSION['msg']<>'') {?>
<script>
window.onload = function() {
swal({   title: "<?php echo $_SESSION['msg'];?>",   text: "Error..!",   timer: 1500,   showConfirmButton: false });
// window.location='edituser.php';
};
</script>
<?php $_SESSION['msg']=''; } ?>
</body>
</html>
