<?php
    session_start();
    include('../config.php');
    $no_ticket = $_GET['id'];

    $history = MySQL_query("SELECT * FROM tbl_history WHERE no_ticket='$no_ticket' ORDER BY `id_history` DESC");
    $check = mysql_query("SELECT mgr_status FROM tbl_approve WHERE no_ticket='$no_ticket'");
    $try = mysql_fetch_array($check);

    $com = mysql_query("SELECT eng_com FROM tbl_approve WHERE no_ticket='$no_ticket'");
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
<form class="form-horizontal" action="approve.php" method="post">
	<div class="modal-body">
        <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-success">
                    <div class="box-header with-border box-solid bg-green">
                        <h3 class="box-title">Ticket No.<?php echo $no_ticket; ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="data" class="hover table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Material</th>
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
                            $i = 0;
                            $result = MySQL_query("SELECT * FROM tbl_prod_reject WHERE no_ticket = '".$no_ticket."'");
                            while($res = mysql_fetch_array($result)){ ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $res['material_name']; ?></td>
                                        <td><?php echo $res['sector']; ?></td>
                                        <td><?php echo $res['qty']; ?></td>
                                        <td>US$<?php echo number_format(($res['amount'] / $res['qty']),2,",","."); ?></td>
                                        <td>US$<?php echo number_format($res['amount'],2,",","."); ?></td>
                                        <td>
                                        <?php if($try['mgr_status'] == '' || $try['mgr_status'] == 'Reject'){  ?>
                                                <a class="btn btn-warning" href="#" data-target="#ModalUpdate" data-whatever="<?php echo $res['id_reject']; ?>" data-toggle="modal"><i class="fa fa-edit"></i></a>
                                                <?php echo "<a class='btn btn-danger' data-toggle='modal' data-target='#del_confirm' data-href='delitem.php?id=".$res['id_reject']."&ticket=".$res['no_ticket']."&mat=".$res['material_name']."'><i class='fa fa-trash'></i></a>"; ?>
                                            <?php }else{ echo "Not Available"; } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (right) -->
            <div class="col-md-4">
                <div class="box box-success">
                    <div class="box-header with-border box-solid bg-green">
                        <h3 class="box-title">History</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body with-border">
                        <ul class="list-group">
                        <?php while($his=mysql_fetch_array($history)){ ?>
                            <li class="list-group-item"><?php echo $his['information']; ?></li>
                        <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-success">
                    <div class="box-header with-border box-solid bg-green">
                        <h3 class="box-title">Approve Flow</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="data" class="hover table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Line Inspector</th>
                                    <th>LI Date</th>
                                    <th>Engineer</th>
                                    <th>Eng Date</th>
                                    <th>Eng Comment</th>
                                    <th>Eng Status</th>
                                    <th>Manager</th>
                                    <th>Mgr Date</th>
                                    <th>Mgr Comment</th>
                                    <th>Mgr Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = MySQL_query("SELECT * FROM tbl_approve WHERE no_ticket = '".$no_ticket."'");
                            while($res = mysql_fetch_array($result)){ ?>
                                    <tr class="text-center">
                                        <td><?php echo $res['li_name']; ?></td>
                                        <td><?php echo $res['li_date']; ?></td>
                                        <td><?php echo $res['eng_name']; ?></td>
                                        <td><?php echo $res['eng_date']; ?></td>
                                        <td><?php echo $res['eng_com']; ?></td>
                                        <td><?php echo $res['eng_status']; ?></td>
                                        <td><?php echo $res['mgr_name']; ?></td>
                                        <td><?php echo $res['mgr_date']; ?></td>
                                        <td><?php echo $res['mgr_com']; ?></td>
                                        <td><?php echo $res['mgr_status']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- general form elements -->
                <div class="box box-success">
                    <div class="box-header with-border box-solid bg-green">
                        <h3 class="box-title">Comment</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="col-md-12">
                            <input type="hidden" name="ticket" id="ticket" value="<?php echo $no_ticket; ?>">
                            <textarea class="form-control" minlength="11" rows="4" name="comment" id="comment" required <?php if($try['mgr_status'] == 'Approved'){echo 'readonly';}?>><?php echo $tes['eng_com']; ?></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
        </section>
    </div>
    <div class="modal-footer">
        <?php if($try['mgr_status'] != 'Approved'){?>
            <button type="submit" class="btn btn-success" name="approve"><i class="fa fa-thumbs-up"></i> Approve</button>
            <button type="submit" class="btn btn-danger" name="reject"><i class="fa fa-thumbs-down"></i> Reject</button>
        <?php } ?>
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
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
</script>


<script>
$(document).ready(function() {
    <?php if($tes['eng_com'] == ''){?>
        $('button[type="submit"]').attr('disabled' , true);
    <?php }else if($tes['eng_com'] != ''){?>
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
