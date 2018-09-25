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
                            <table id="data" class="hover table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Material</th>
                                    <th>Material Description</th>
                                    <th>Sector</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Amount</th>
                                    <th>Picture</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tresss=MySQL_query("SELECT * FROM tbl_thresholdqty WHERE id=1");
                                $qty=mysql_fetch_array($tresss);

                                $tressss=MySQL_query("SELECT * FROM tbl_threshold WHERE id_threshold=1");
                                $amount=mysql_fetch_array($tressss);

                                $no = 1;
                                $result = MySQL_query("SELECT * FROM tbl_prod_reject WHERE no_ticket = '".$no_ticket."'");
                                while($res = mysql_fetch_array($result)){ ?>
                                  <?php


                                  /*echo $qty['thresholdQty'];
                                  echo $amount['threshold'];
                                /*  $queryy=mysql_query("SELECT SUM(qty) as total, SUM(amount) as amountt
                                  FROM tbl_prod_reject") or die(mysql_error());
                                  $b=mysql_fetch_array($queryy); */
                                  ?>
                                  <?php if($res['qty'] > $qty['thresholdQty']){?>
                                    <tr bgcolor="#ce2121" style="color: white;">
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $res['material_name']; ?></td>
                                        <td><?php echo $res['material_description']; ?></td>
                                        <td><?php echo $res['sector']; ?></td>
                                        <td><?php echo $res['qty']; ?></td>
                                        <td>US$<?php echo number_format(($res['amount'] / $res['qty']),2,",","."); ?></td>
                                        <td>US$<?php echo number_format($res['amount'],2,",","."); ?></td>
                                        <td><img src="../assets/img/<?php echo $res['gambar']; ?>" width="96px" height="72px"/></td>
                                    </tr>
                                    <?php } else { ?>
                                        <tr>
                                          <td><?php echo $no++; ?></td>
                                          <td><?php echo $res['material_name']; ?></td>
                                          <td><?php echo $res['material_description']; ?></td>
                                          <td><?php echo $res['sector']; ?></td>
                                          <td><?php echo $res['qty']; ?></td>
                                          <td>US$<?php echo number_format(($res['amount'] / $res['qty']),2,",","."); ?></td>
                                          <td>US$<?php echo number_format($res['amount'],2,",","."); ?></td>
                                          <td>
                                            <a class="button" href="#" data-target="#ModalDetailGambar" data-whatever="<?php echo $res['id_reject']; ?>" data-toggle="modal">
                                            <img src="../assets/img/<?php echo $res['gambar']; ?>" width="96px" height="72px"/>
                                            </a>
                                            </td>
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
        </div>

        </section>
    </div>
    <div class="modal-footer">
        <?php /* if($tes['mgr_status'] == '' && $tes['eng_status'] == ''){  ?>
            <?php echo "<a class='btn btn-danger pull-left' data-toggle='modal' data-target='#del_confirm' data-href='delrej.php?id=".$res['no_ticket']."'><i class='fa fa-trash'></i> Delete Reject</a>"; ?>
        <?php }*/ ?>
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
    </div>

    <!--Modal for uploading photo-->
    

    <!--
    <div class="modal" id="ModalDetailGambar" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header box-solid bg-green">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="memberModalLabel">Picture of Reject Material</h4>
                </div>
                <div class="dash">
                 <!-- Content goes in here -->
               <!--
                </div>
            </div>
        </div>
    </div>
  -->
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

  $('#ModalDetailGambar').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;

            $.ajax({
                type: "GET",
                url: "showGambar.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.dash').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });
    })

</script>
</html>
