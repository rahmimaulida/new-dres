<?php
    session_start();
    include('../config.php');
    $no_ticket = $_GET['id'];

    $history = MySQL_query("SELECT * FROM tbl_history WHERE no_ticket='$no_ticket' ORDER BY id_history DESC");

    $com = mysql_query("SELECT * FROM tbl_approve WHERE no_ticket='$no_ticket'");
    $tes = mysql_fetch_array($com);
  //  $tes = mysql_fetch_array($com);
    //$com1 = mysql_query("SELECT mgr_com FROM tbl_approve WHERE no_ticket='$no_ticket'")
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
                                    <th>Material Description</th>
                                    <th>Sector</th>
                                    <th>Qty</th>
                                    <th>Reason</th>
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
                                        <td><?php echo $res['material_name'];?></td>
                                        <td><?php echo $res['material_description'];?></td>
                                        <td><?php echo $res['sector']; ?></td>
                                        <td><?php echo $res['qty']; ?></td>
                                        <td><?php echo $res['issue']; ?></td>
                                        <td>US$<?php echo number_format(($res['amount'] / $res['qty']),2,",","."); ?></td>
                                        <td>US$<?php echo number_format($res['amount'],2,",","."); ?></td>
                                        <td>
                                            <a class="btn btn-warning" href="#" data-target="#ModalUpdate" data-whatever="<?php echo $res['id_reject']; ?>" data-toggle="modal"><i class="fa fa-edit"></i></a>
                                            <?php echo "<a class='btn btn-danger' data-toggle='modal' data-target='#del_confirm' data-href='delitem.php?id=".$res['id_reject']."&ticket=".$res['no_ticket']."&mat=".$res['material_name']."'><i class='fa fa-trash'></i></a>"; ?>
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
                      <div class="table-responsive">
                          <table id="data" class="hover table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th>Date</th>
                                  <th>Name</th>
                                  <th>Comment</th>
                              </tr>
                          </thead>
                          <tbody>
                            <li class="list-group-item">
                        <?php
                        $com = mysql_query("SELECT * FROM tbl_approve WHERE no_ticket='$no_ticket'");
                        while($tes=mysql_fetch_array($com)){ ?>
                              <tr>
                                  <td><?php echo $tes['mgr_date']; ?></td>
                                  <td><?php echo $tes['mgr_name']; ?></td>
                                  <td><?php echo $tes['mgr_com']; ?></td>
                                </tr>
                        <?php } ?>
                        </li>
                      </tbody>
                    </table>
                    </div>
                </div>
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
