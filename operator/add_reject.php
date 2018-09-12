<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include ('../config.php');
include 'header.php';
session_start();

$t = mysql_query("SELECT sector from tbl_users WHERE userId='".$_SESSION['username']."'") or die(mysql_error());
$s = mysql_fetch_array($t);

//$pic = mysql_query("SELECT name FROM tbl_users WHERE position='CS&Q Engineer' AND sector='".$s['sector']."'") or die(mysql_error());
$sector = mysql_query("SELECT sector FROM tbl_users WHERE position='CS&Q Engineer' AND sector='".$s['sector']."'") or die(mysql_error());

$shift = mysql_query("SELECT * FROM shift");

$material = mysql_query("SELECT material_name, material_description FROM tbl_material");
$tbltemp = mysql_query("SELECT * FROM tempreject_".$_SESSION['username']."");

$reason = mysql_query("SELECT * FROM tbl_deflist") or die(mysql_error());
//$reason = mysql_query("SELECT material_name, material_description FROM tbl_material");

$jumlahSum= mysql_query("SELECT sum(amount) as jumlah, sum(qty) as qty FROM  tempreject_".$_SESSION['username']."");
$tes=mysql_fetch_array($jumlahSum);

$thresholdAmount= mysql_query("SELECT * from tbl_threshold");
$thresholdQuery= mysql_fetch_array($thresholdAmount);

$thresholdQty= mysql_query("SELECT * FROM tbl_thresholdqty");
$thresholdQtyQuery= mysql_fetch_array($thresholdQty);

$takeId= mysql_query("SELECT * FROM tbl_thresholdqty");
$eksId= mysql_fetch_array($takeId);

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
        Add Product Reject
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
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header box-solid bg-green with-border">
              <h3 class="box-title">Input Reject Item</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form-horizontal" method="post" class="form-add">
              <div class="box-body">
                <div class="form-group">
                  <label for="Date of Reject">Date of Reject</label>
                    <input type="text" class="form-control" name="when" id="when" placeholder="Insert When" value="<?php echo date('Y-m-d'); ?>" required>
                </div>
                <div class="form-group">
                  <label>Shift</label>
                  <select class="form-control selectpicker" name="shift" id="shift" required>
                    <option disabled selected>Select Shift...</option>
                    <?php while($shiftRES=mysql_fetch_array($shift)){?>
                      <option value="<?php echo $shiftRES['id_shift']; ?>"><?php echo $shiftRES['shift']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Sector</label>
                  <select class="form-control selectpicker" data-live-search="true" name="sector" id="sector" required>
                    <option disabled selected>Select Sector...</option>
                    <?php $res=mysql_fetch_array($sector);?>
                      <option value="<?php echo $res['sector']; ?>"><?php echo $res['sector']; ?></option>
                  </select>
                </div>
                <div class="form-group">
                  <label>PIC</label>
                  <select class="form-control selectpicker" data-live-search="true" name="pic" id="pic" required>
                  </select>
                </div>
                <div class="form-group">
                  <label>Line</label>
                  <select class="form-control selectpicker" data-live-search="true" name="line" id="line" required>
                  </select>
                </div>
                <div class="form-group">
                  <label>Material</label>
                  <select class="form-control selectpicker" name="material_name" id="material_name" required data-live-search="true">
                    <option disabled selected>Select Material...</option>
                    <?php while($res=mysql_fetch_array($material)){?>
                      <option value="<?php echo $res['material_name']; ?>"><?php echo $res['material_name'].' - '.$res['material_description']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Material Description</label>
                  <select class="form-control selectpicker" data-live-search="true" name="material_description" id="material_description" required>
                  </select>
                </div>
                <div class="form-group">
                  <label>thresholdqty</label>
                  <input type="text" class="form-control" name="thresholdqty" id="thresholdqty" value="<?php echo $thresholdQtyQuery['thresholdQty']; ?>" required>
                </div>
                <div class="form-group">
                  <label>thresholdAmount</label>
                  <input type="text" class="form-control" name="thresholdAmount" id="thresholdAmount" value="<?php echo $thresholdQuery['threshold']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Qty</label>
                  <input type="number" class="form-control" name="qty" id="qty" min=1 oninput="validity.valid||(value='');" required>
                </div>
                <div class="form-group">
                  <label>Reason Code</label>
                  <select class="form-control selectpicker" name="issue" id="issue" required data-live-search="true">
                    <option disabled selected>Select Reason Code...</option>
                    <?php while($ress=mysql_fetch_array($reason)){?>
                      <option value="<?php echo $ress['id_defcode']; ?>"><?php echo $ress['id_defcode'].' - '.$ress['defcode']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Reason Description</label>
                  <select class="form-control selectpicker" data-live-search="true" name="defcode" id="defcode" required>
                  </select>
                </div>

              </div>
              <?php

              $tresss=MySQL_query("SELECT * FROM tbl_thresholdqty WHERE id=1");
              $qty=mysql_fetch_array($tresss);

              $tressss=MySQL_query("SELECT * FROM tbl_threshold WHERE id_threshold=1");
              $amount=mysql_fetch_array($tressss);
              ?>
              <div class="box-footer text-center">
                <button type="button" class="btn btn-primary" id="instemp"><i class="fa fa-paper-plane"></i> Insert Data</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- left column -->
        <div class="col-md-8">
          <div class="box box-success">
            <div class="box-header box-solid bg-green with-border">
              <h3 class="box-title">Reject List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body show-data">
              <div class="table-responsive">
              <table id="table" class="table table-stripes">
                <thead>
                  <input type="hidden" name="jumlah" id="jumlah" value="<?php echo $tes['jumlah']; ?>">
                  <input type="hidden" name="jumlahQty" id="jumlahQty" value="<?php echo $tes['qty']; ?>">
                  <tr>
                    <th>No</th>
                    <th>No Material</th>
                    <th>Material Description</th>
                    <th>Sector</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>Action</th>
                    <th hidden>pic</th>
                    <th>Picture</th>
                    <th hidden>pictureValue</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $no = 1;

                  if($numtbl > 0){
                  while($res=mysql_fetch_array($tbltemp)){
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $res['material_name']; ?></td>
                    <td><?php echo $res['material_description']; ?></td>
                    <td><?php echo $res['sector']; ?></td>
                    <td><?php echo $res['qty']; ?></td>
                    <td>US$<?php echo number_format(($res['amount'] / $res['qty']),2,",","."); ?></td>
                    <td>US$<?php echo number_format($res['amount'],2,",","."); ?></td>
                    <td><button class="btn btn-danger del-data" id="<?php echo $res['id_reject']; ?>"><i class="fa fa-trash"></i></button></td>
                    <td hidden><input type="text" value="<?php echo $res['pic']; ?>" name="picName" id="picName"></td>
                    <td>

                      <br>
                        <center><div id="my_camera<?php echo $no; ?>"></div>
                          <br>
                        <div id="results<?php echo $no; ?>"></div></center>
                        <br>
                      <script type="text/javascript" src="../webcam/webcam.min.js"></script>
                      <script language="JavaScript">
                        Webcam.set({
                          width: 96,
                          height: 72,
                          image_format: 'jpeg',
                          jpeg_quality: 90
                        });
                        Webcam.attach( '#my_camera<?php echo $no; ?>' );
                      </script>
                    <div class="text-center">
                      <!-- First, include the Webcam.js JavaScript Library -->
                      <form>
                        <input type=button id="" value="Snapshot" onClick="take_snapshot('results<?php echo $no; ?>', '<?php echo $res['id_reject'];?>')" class="btn btn-lg btn-warning btn-sm">
                      </form>
                      <script language="JavaScript">
                        function take_snapshot(results_photo, id) {
                          // take snapshot and get image data
                          Webcam.snap( function(data_uri) {
                            // display results in page

                            Webcam.upload( data_uri, 'saveimage.php?id='+id, function(code, text) {
                            document.getElementById(results_photo).innerHTML =
                              '<img src="'+data_uri+'"/>';
                          } );
                        } );
                      }
                      </script>
                        </td>
                        <?php
                        $tresss=MySQL_query("SELECT * FROM tbl_thresholdqty WHERE id=1");
                        $qty=mysql_fetch_array($tresss);

                        $tressss=MySQL_query("SELECT * FROM tbl_threshold WHERE id_threshold=1");
                        $amount=mysql_fetch_array($tressss);
                        ?>

                        <td hidden><input type="text" value="0" name="pictureValue" id="pictureValue"<?php echo $res['qty']; ?></td>
                  </tr>
                <?php }} else {?>
                  <tr>
                    <td class="text-center" colspan="7">DATA NOT FOUND</td>
                  </tr>
                  <?php }
                  ?>
                  </tbody>
              </table>
            </div>
              <?php if($numtbl > 0 ){?>
                <!--<br>
                  <center><div id="my_camera"></div>
                    <br>
                  <div id="results"></div></center>
                  <br>
                <script type="text/javascript" src="../webcam/webcam.min.js"></script>
                <script language="JavaScript">
                  Webcam.set({
                    width: 320,
                    height: 240,
                    image_format: 'jpeg',
                    jpeg_quality: 90
                  });
                  Webcam.attach( '#my_camera' );
                </script>
              <div class="text-center">

                <!-- First, include the Webcam.js JavaScript Library -->

              <!--  <form>
                  <input type=button value="Take Snapshot" onClick="take_snapshot()" class="btn btn-lg btn-warning btn-sm">
                </form>

            <br>
            <br>
          -->
          <br>
          <br>
          <center>
            <form action="save_reject.php" method="post">

              <button type="submit" name="submit" class="btn btn-lg btn-success"><i class="fa fa-save"></i> Save</button>
                </form>
              </center>

              </div>
              <?php } ?>
            </div>
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
<script>
$(document).ready(function () {
  $('#when').datepicker({
      format: 'yyyy-mm-dd'
  });
});

</script>

<script type="text/javascript">

  $(function () {
    $('.selectpicker').selectpicker();
    $('#table').DataTable({
      "bLengthChange": false
    })
  })

  $(document).ready(function()
    {
        $(".del-data").click(function()
        {
            var del_id = $(this).attr('id');
            $.ajax({
                type:'POST',
                url:'deltemp.php',
                data:'id_reject='+del_id,
                success: function(data)
                {
                  $('.show-data').load("tbltemp.php");
                }
            });
        });
    });

  $(document).ready(function(){
		$("#instemp").click(function(){
        var data = $('.form-add').serialize();
        var pic = $('#pic').val();
        var sector = $('#sector').val();
        var line =  $('#line').val();
        var material = $('#material_name').val();
        var material_description = $('#material_description').val();
        var qty = $('#qty').val();
        var issue =  $('#issue').val();
        var when =  $('#when').val();
        var shift = $('#shift').val();
        if(shift == '' || pic == '' || material == '' || material_description == '' || qty == '' || issue == '' || sector == '' || line == '' || when == ''){
        }
        else {
          $.ajax({
            type: 'POST',
            url: "instemp.php",
            data: data,
            success: function() {
              $('.show-data').load("tbltemp.php");
            }
          });
        }
		  });
	});


  $(document).ready(function() {

      <?php if($tes['jumlah'] > $thresholdQuery['threshold']){?>
          $('object[type="application/x-shockwave-flash"]').attr('required' , true);
          $('button[type="submit"]').attr('disabled' , true);
      <?php }else if($tes['qty'] > $thresholdQtyQuery['thresholdQty']){?>
          $('object[type="application/x-shockwave-flash"]').attr('required' , true);
          $('button[type="submit"]').attr('disabled' , true);
      <?php } ?>

  });


  $(function() {
    $("#sector").change(function(){
        var grp = $(this).val();
// alert(grp);
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "get_sector.php",
            data: "data="+grp,
            success: function(msg){
                if(msg == ''){
                        $("select#pic").html('<option disabled selected value=""> -- select an option -- </option>');

                }else{ //alert(msg);
                          $("select#pic").html(msg).selectpicker('refresh');
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
    $("#material_name").change(function(){
        var tf = $(this).val();
  // alert(grp);
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "get_mat_desc.php",
            data: "data="+tf,
            success: function(msg){
                if(msg == ''){
                        $("select#material_description").html('<option disabled selected value=""> -- select an option -- </option>');

                }else{ //alert(msg);
                          $("select#material_description").html(msg).selectpicker('refresh');
                }
            }
        });
      });
  });

  $(function() {
    $("#issue").change(function(){
        var tf = $(this).val();
  // alert(grp);
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "get_reason.php",
            data: "data="+tf,
            success: function(msg){
                if(msg == ''){
                        $("select#defcode").html('<option disabled selected value=""> -- select an option -- </option>');

                }else{ //alert(msg);
                          $("select#defcode").html(msg).selectpicker('refresh');
                }
            }
        });
      });
  });



</script>
<!--
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
