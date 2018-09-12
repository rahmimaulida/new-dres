<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include ('../config.php');
include 'header.php';

$t = mysql_query("SELECT sector, position from tbl_users WHERE userId='".$_SESSION['username']."'") or die(mysql_error());
$s = mysql_fetch_array($t);

$alternate = mysql_query("SELECT * FROM tbl_users WHERE position='".$s['position']."' AND sector='".$s['sector']."'") or die(mysql_error());
$material = mysql_query("SELECT material_name, material_description FROM tbl_material");
$tbltemp = mysql_query("SELECT * FROM tempreject_".$_SESSION['username']."");

$jumlahSum= mysql_query("SELECT sum(amount) as jumlah, sum(qty) as qty FROM  tempreject_".$_SESSION['username']."");
$tes=mysql_fetch_array($jumlahSum);

$thresholdAmount= mysql_query("SELECT * from tbl_threshold");
$thresholdQuery= mysql_fetch_array($thresholdAmount);

$thresholdQty= mysql_query("SELECT * FROM tbl_thresholdqty");
$thresholdQtyQuery= mysql_fetch_array($thresholdQty);

$numtbl = 0;
if($tbltemp){
  $numtbl = mysql_num_rows($tbltemp);
}

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Delegate Approval Form
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Product Reject</a></li>
        <li class="active">Add Reject</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header box-solid bg-green with-border">
              <h3 class="box-title">Input The Delegation Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form-horizontal" method="post" class="update-delegate">
              <div class="box-body">
                <div class="form-group">
                  <label>Alternate Name</label>
                  <select class="form-control" name="alternate_name" id="alternate_name" required>
                    <option disabled selected>Select One...</option>
                    <?php while($res=mysql_fetch_array($alternate)){?>
                      <option value="<?php echo $res['name']; ?>"><?php echo $res['name'].' - '.$res['position'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Reason</label>
                  <input type="text" class="form-control" name="reason" id="reason" required>
                </div>
              </div>

              <div class="box-footer text-center">
                <button type="button" class="btn btn-primary" id="insdelegate"><i class="fa fa-paper-plane"></i> Process</button>
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
  <?php include 'footer.php'; ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../assets/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
<script src="../assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<script type=”text/javascript” src=”../webcam/webcam.min.js”></script>

<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>

<script type="text/javascript">

  $(function () {
    $('.selectpicker').selectpicker();
    $('#table').DataTable({
      "bLengthChange": false
    })
  })

  $(document).ready(function(){
		$("#insdelegate").click(function(){
        var data = $('.update-delegate').serialize();
        var alternate_name = $('#alternate_name').val();
        var reason =  $('#reason').val();
        if(alternate_name == '' || reason == ''){
        }
        else {
          $.ajax({
            type: 'POST',
            url: "insdelegate.php",
            data: data,
            success: function() {
              $('.show-data').load("tbldelegate.php");
            }
          });
        }
		  });
	});


  $(function() {
    $("#pic").change(function(){
        var grp = $(this).val();
// alert(grp);
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "get_sector.php",
            data: "data="+grp,
            success: function(msg){
                if(msg == ''){
                        $("select#sector").html('<option disabled selected value=""> -- select an option -- </option>');

                }else{ //alert(msg);
                          $("select#sector").html(msg).selectpicker('refresh');
                }
            }
        });
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "get_line.php",
            data: "data="+grp,
            success: function(msg){
                if(msg == ''){
                        $("select#line").html('<option disabled selected value> -- select an option -- </option>');

                }else{ //alert(msg);
                          $("select#line").html(msg).selectpicker('refresh');
                }
            }
        });
      });
  });

  $(function() {
    $("#delegate_name").change(function(){
        var tf = $(this).val();
  // alert(grp);
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "get_alt_id.php",
            data: "data="+tf,
            success: function(msg){
                if(msg == ''){
                        $("select#id_name").html('<option disabled selected value=""> -- select an option -- </option>');

                }else{ //alert(msg);
                          $("select#id_name").html(msg).selectpicker('refresh');
                }
            }
        });
      });
  });


</script>

<script language="JavaScript">
		Webcam.set({
			width: 320,
			height: 240,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		Webcam.attach( '#my_camera' );
	</script>

  <script language="JavaScript">
    function take_snapshot() {
      // take snapshot and get image data
      Webcam.snap( function(data_uri) {
        // display results in page
        document.getElementById('results').innerHTML =
          '<img src="'+data_uri+'" id="gambar"/>';
          Webcam.upload(data_uri, 'upload.php', function (code, text) {

                alert(data_uri);
        });
      });
      Webcam.reset();
    }
  </script>

	<!-- A button for taking snaps -->

	<!-- Code to handle taking the snapshot and displaying it locally -->

</body>
</html>
