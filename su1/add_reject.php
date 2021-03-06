<?php 
include ('../config.php');
include 'header.php';

$t = mysql_query("SELECT sector from tbl_users WHERE userId='".$_SESSION['username']."'") or die(mysql_error());
$s = mysql_fetch_array($t);

$pic = mysql_query("SELECT name FROM tbl_users WHERE position='CS&Q Engineer' AND sector='".$s['sector']."'") or die(mysql_error());
$material = mysql_query("SELECT material_name, material_description FROM tbl_material");
$tbltemp = mysql_query("SELECT * FROM tempreject_".$_SESSION['username']."");
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
                  <label>PIC</label>
                  <select class="form-control selectpicker" data-live-search="true" name="pic" id="pic" required>
                    <option disabled selected>Select PIC...</option>
                    <?php while($res=mysql_fetch_array($pic)){?>
                      <option value="<?php echo $res['name']; ?>"><?php echo $res['name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Sector</label>
                  <select class="form-control selectpicker" data-live-search="true" name="sector" id="sector" required>
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
                  <label>Qty</label>
                  <input type="number" class="form-control" name="qty" id="qty" required>
                </div>
                <div class="form-group">
                  <label>Issue</label>
                  <input type="text" class="form-control" name="issue" id="issue" required>
                </div>
              </div>

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
              <table id="table" class="table table-stripes">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No Material</th>
                    <th>Sector</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>Action</th>
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
                    <td><?php echo $res['sector']; ?></td>
                    <td><?php echo $res['qty']; ?></td>
                    <td>US$<?php echo number_format(($res['amount'] / $res['qty']),2,",","."); ?></td>
                    <td>US$<?php echo number_format($res['amount'],2,",","."); ?></td>
                    <td><button class="btn btn-danger del-data" id="<?php echo $res['id_reject']; ?>"><i class="fa fa-trash"></i></button></td>
                  </tr>
                  <?php }}else {?>
                  <tr>
                    <td class="text-center" colspan="7">DATA NOT FOUND</td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <?php if($numtbl > 0){ ?>
              <div class="text-center">
                <form action="save_reject.php" method="post">
                  <button type="submit" name="submit" class="btn btn-lg btn-success"><i class="fa fa-save"></i> Save</button>
                </form>
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
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
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
        var qty = $('#qty').val();
        var issue =  $('#issue').val();
        if(pic == '' || material == '' || qty == '' || issue == '' || sector == '' || line == ''){
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

</script>
</body>
</html>
