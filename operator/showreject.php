<?php
    session_start();
    include('../config.php');
    $no_ticket = $_GET['id'];

    $check=MySQL_query("SELECT eng_status, mgr_status FROM tbl_approve WHERE no_ticket='$no_ticket'");
    $tes=mysql_fetch_array($check);
    $history = MySQL_query("SELECT * FROM tbl_history WHERE no_ticket='$no_ticket' ORDER BY `id_history` DESC");

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
<form role="form" class="form-horizontal" action="updAction.php" method="post">
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
                                    <th>Price</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $i = 0;
                                $result = MySQL_query("SELECT * FROM tbl_prod_reject WHERE no_ticket = '".$no_ticket."'");
                                while($res = mysql_fetch_array($result)){ ?>
                                  <?php
                                  $tresss=MySQL_query("SELECT * FROM tbl_thresholdqty WHERE id=1");
                                  $qty=mysql_fetch_array($tresss);

                                  $tressss=MySQL_query("SELECT * FROM tbl_threshold WHERE id_threshold=1");
                                  $amount=mysql_fetch_array($tressss);

                                  $queryy=mysql_query("SELECT SUM(qty) as total, SUM(amount) as amountt
                                  FROM tbl_prod_reject") or die(mysql_error());
                                  $b=mysql_fetch_array($queryy);
                                  ?>
                                  <?php if($b['total'] <= $qty['thresholdQty'] && $b['amountt'] <= $amount['threshold']){?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $res['material_name']; ?></td>
                                        <td><?php echo $res['material_description']; ?></td>
                                        <td><?php echo $res['sector']; ?></td>
                                        <td><?php echo $res['qty']; ?></td>
                                        <td>US$<?php echo number_format(($res['amount'] / $res['qty']),2,",","."); ?></td>
                                        <td>US$<?php echo number_format($res['amount'],2,",","."); ?></td>
                                    </tr>
                                    <?php } else { ?>
                                      <tr bgcolor="#ce2121">
                                          <td><?php echo $no++; ?></td>
                                          <td><?php echo $res['material_name']; ?></td>
                                          <td><?php echo $res['material_description']; ?></td>
                                          <td><?php echo $res['sector']; ?></td>
                                          <td><?php echo $res['qty']; ?></td>
                                          <td>US$<?php echo number_format(($res['amount'] / $res['qty']),2,",","."); ?></td>
                                          <td>US$<?php echo number_format($res['amount'],2,",","."); ?></td>
                                      </tr>
                                    <?php } ?>
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
            <div class="col-md-4">
                <div class="box box-success">
                    <div class="box-header with-border box-solid bg-green">
                        <h3 class="box-title">Picture</h3>
                    </div>

                    <?php
                    $sql=mysql_query("select gambar from tbl_approve where no_ticket= $no_ticket");
                    $tampilkan = mysql_fetch_array($sql);
                      ?>
                    <!-- /.box-header -->
                    <center>
                      <td><img src="../assets/img/<?php echo $tampilkan['gambar']?>" width="150px" height="120px"/></td>
                    </center>
                      <!--<img src="<?php// echo $tampilkan['']; ?>" width="150px" height="150px"/></center> -->
            </div>
        </div>
        </div>

        </section>
    </div>
    <div class="modal-footer">
        <?php /* if($tes['mgr_status'] == '' && $tes['eng_status'] == ''){  ?>
            <?php echo "<a class='btn btn-danger pull-left' data-toggle='modal' data-target='#del_confirm' data-href='delrej.php?id=".$res['no_ticket']."'><i class='fa fa-trash'></i> Delete Reject</a>"; ?>
        <?php }*/ ?>
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
</html>
