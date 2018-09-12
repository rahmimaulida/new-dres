<?php
    session_start();
    include('../config.php');
    $line = $_GET['line'];

    $qry="SELECT * FROM tbl_prod_reject where line ='$line'";
    $result = mysql_query($qry);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Bootstrap modal</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header box-solid bg-green">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="memberModalLabel">EDIT USER</h4>
        </div>
        <div class="dash">
            <form role="form" class="form-horizontal" action="updUsers.php" method="post">
                <div class="modal-body">
                    <div class="box box-success">
                        <div class="box-header with-border box-solid bg-green">
                            <h3 class="box-title">Line <?php echo $line; ?></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="data" class="hover table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Ticket</th>
                                        <th>Material Name</th>
                                        <th>Qty</th>
                                        <th>Amount</th>
                                        <th>PIC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                while($res = mysql_fetch_array($result)){ ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $res['no_ticket'];?></td>
                                            <td><?php echo $res['material_name']; ?></td>
                                            <td><?php echo $res['qty']; ?></td>
                                            <td>US$<?php echo number_format($res['amount'],2,",","."); ?></td>
                                            <td><?php echo $res['pic']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <!-- /.box -->
                <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
<script>
$(function() {
    $("#position").change(function(){
        var grp = $(this).val();
// alert(grp);
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "getlevel.php",
            data: "data="+grp,
            success: function(msg){
                if(msg == ''){
                        $("#level").val('');

                }else{ //alert(msg);
                          $("#level").val(msg);
                }


                }
            });
      });
  });
</script>
