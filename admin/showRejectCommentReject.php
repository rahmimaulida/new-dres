<?php
    session_start();
    include('../config.php');
    $no_ticket = $_GET['id'];

    $check=MySQL_query("SELECT eng_status, mgr_status, spv_status, finance_mgrStatus FROM tbl_approve WHERE no_ticket='$no_ticket'");
    $statusEng=mysql_fetch_array($check);

    $t = mysql_query("SELECT sector, position from tbl_users WHERE userId='".$_SESSION['username']."'") or die(mysql_error());
    $s = mysql_fetch_array($t);
    $alternate = mysql_query("SELECT * FROM tbl_users WHERE position='Supervisor (Support Function)' OR position='CS&Q Engineer' AND sector='".$s['sector']."'") or die(mysql_error());

    $history = MySQL_query("SELECT * FROM tbl_history WHERE no_ticket='$no_ticket' ORDER BY id_history DESC");

    $com = mysql_query("SELECT * FROM tbl_approve WHERE no_ticket='$no_ticket'");
    $tes = mysql_fetch_array($com);

    $thresholdAmount= mysql_query("SELECT * from tbl_threshold");
    $thresholdQuery= mysql_fetch_array($thresholdAmount);

    $thresholdQty= mysql_query("SELECT * FROM tbl_thresholdqty");
    $thresholdQtyQuery= mysql_fetch_array($thresholdQty);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Bootstrap modal</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form class="form-horizontal" action="reject.php" method="post">
	<div class="modal-body">
        <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- general form elements -->
                <div class="box box-success">
                    <div class="box-header with-border box-solid bg-green">
                        <h3 class="box-title">Comment</h3>
                    </div>
                    <!-- /.box-header -->


                    <div class="box-body">
                        <div class="col-md-10">
                          <div class="form-group">
                            <input type="hidden" name="ticket" id="ticket" value="<?php echo $no_ticket; ?>">
                            <input type="hidden" name="reject" id="reject" value="Reject">
                            <textarea class="form-control" rows="4" name="comment" minlength=15 id="comment" required <?php if($tes['mgr_status'] == 'Approved' || $tes['eng_status'] == '' || $tes['spv_status'] == ''){echo 'readonly';}?>><?php echo $tes['mgr_com']; ?></textarea>
                          </div>
                        <div class="form-group">
                          <label>Back To : </label>
                          <select class="form-control" name="backTo" id="backTo" required>
                            <option disabled selected>Select One...</option>
                            <?php while($res=mysql_fetch_array($alternate)){?>
                              <option value="<?php echo $res['position']; ?>"><?php echo $res['name'].' - '.$res['position'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="box-footer text-center">
                    <button type="submit" class="btn btn-success" name="approve"><i class="fa fa-save"></i> Submit</button>
                  </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
        </section>
    </div>

	</form>
</body>

<style>
    .list-group{
        max-height: 300px;
        margin-bottom: 10px;
        overflow:scroll;
        -webkit-overflow-scrolling: touch;
    }
</style>
<script>

    $(function () {
    $('#data').DataTable({
      "bLengthChange": false,
      "pageLength": 5
    })
  })


$(function() {
  $("#backTo").change(function(){
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
<script type="text/javascript">
$(function () {
  $('.selectpicker').selectpicker();
  $('#table').DataTable({
    "bLengthChange": false
  })
})
</script>
</html>
