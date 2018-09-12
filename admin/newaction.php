<?php
include "header.php";
include("../config.php");

$qrysec = mysql_query("SELECT sector FROM tbl_masterdata GROUP BY sector");

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
                    <select class="form-control" name="sector" id="sector" required>
                        <option value="" disabled selected>SELECT SECTOR</option>
                      <?php while($res=mysql_fetch_array($qrysec)){ ?>
                        <option value="<?php echo $res['sector']; ?>"><?php echo $res['sector']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Date" class="col-sm-2 control-label">Date</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="date" id="date" placeholder="insert Date" value="<?php echo date('Y-m-d'); ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Part No" class="col-sm-2 control-label">Part No</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="part_no" id="part_no" placeholder="Insert Part NO" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Issue" class="col-sm-2 control-label">Issue</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" id="issue" name="issue" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Action" class="col-sm-2 control-label">Action</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" id="action" name="action" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="When" class="col-sm-2 control-label">When</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="when" id="when" placeholder="Insert When" value="<?php echo date('Y-m-d'); ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Status" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="status" id="status" required>
                        <option value="" selected disabled>-- select an option --</option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Aging">Aging</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="PIC" class="col-sm-2 control-label">PIC</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="pic" id="pic" required>
                        <option value="" selected>SELECT PIC</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer text-center">
                <button type="submit" name="submit" id="submit" class="btn btn-lg btn-success"><i class="fa fa-save"></i> Save</button>
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
<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="../assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<script>
$(document).ready(function () {
  $('#date,#when').datepicker({
      format: 'yyyy-mm-dd'
  });
});

$(function() {
    $("#sector").change(function(){
        var grp = $(this).val();
// alert(grp);
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "getpic.php",
            data: "data="+grp,
            success: function(msg){
                if(msg == ''){
                        $("select#pic").html('<option disabled selected value> -- select an option -- </option>');
                        
                }else{ //alert(msg);
                          $("select#pic").html(msg);
                }


                }
            });
      });
  });

</script>
</body>
</html>
