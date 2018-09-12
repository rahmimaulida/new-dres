<?php
    session_start();
    include('../config.php');
    $no_ticket = $_GET['id'];

    $history = MySQL_query("SELECT * FROM tbl_history WHERE no_ticket='$no_ticket' ORDER BY id_history DESC");

    $com = mysql_query("SELECT * FROM tbl_approve WHERE no_ticket='$no_ticket'");
    $tes = mysql_fetch_array($com);
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
                        <div class="col-md-8">
                            <input type="hidden" name="ticket" id="ticket" value="<?php echo $no_ticket; ?>">
                            <input type="hidden" name="reject" id="reject" value="Reject">
                            <textarea class="form-control" rows="4" name="comment" minlength="10" id="comment" required><?php echo $tes['mgr_com']; ?></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="approve"><i class="fa fa-save"></i> Submit</button>
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

  $(document).ready(function() {

    <?php if($tes['mgr_com'] == ''){?>
        $('button[type="submit"]').attr('disabled' , true);
    <?php }else if($tes['mgr_com'] != ''){?>
        $('button[type="submit"]').attr('disabled' , true);
    <?php } ?>

$('textarea').on('keyup',function()
{
    var textarea_val = $("#comment").val();

    var minLength = $("#comment").attr( 'minlength' );

    if(textarea_val != '' && textarea_val.length >= minLength)
    {
        $('button[type="submit"]').attr('disabled' , false);
    }
    else
    {
        $('button[type="submit"]').attr('disabled' , true);
    }
});

});
</script>
</html>
