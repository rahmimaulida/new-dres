<?php
    session_start();
    include('../config.php'); 
    $id = $_GET['id'];
 
    if (isset($_POST['submit'])) {
        $id=$_POST['id'];
        $qty=$_POST['qty'];
        $ticket=$_POST['no_ticket'];
        $material=$_POST['material'];
        $date = date("Y-m-d h:i:s");

        $qryqty=mysql_query("SELECT qty FROM tbl_prod_reject where id_reject ='$id'");
        $before=mysql_fetch_array($qryqty);

        $info = $_SESSION['name']." Has Change Value Material ".$material." From ".$before['qty']." To ".$qty." At ".$date;

        $mat = mysql_query("SELECT price from tbl_material WHERE material_name = '".$material."'");
        $item = mysql_fetch_array($mat);
        $amount = $item['price'] * $qty;

        $qry= "UPDATE tbl_prod_reject SET qty='$qty', amount='$amount' WHERE id_reject='$id'";
        $history = mysql_query("INSERT INTO tbl_history VALUES('','".$ticket."','".$info."','".$date."','Update')");
        $result = mysql_query($qry);
        if(!$result){
            die('Invalid query: ' . mysql_error());
        }
        header('location: product_reject.php');
    }

    $qry="SELECT * FROM tbl_prod_reject where id_reject ='$id'";
    $result = mysql_query($qry);

    $b = mysql_fetch_array($result);
 
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
<form role="form" class="form-horizontal" action="edit_item.php" method="post">
              <div class="modal-body">
                <div class="form-group">
                    <label for="material_name" class="col-sm-2 control-label">Qty</label>

                    <div class="col-sm-10">
                      <input type="hidden" name="id" value="<?php echo $b['id_reject']; ?>">
                      <input type="hidden" name="material" value="<?php echo $b['material_name']; ?>">
                      <input type="hidden" name="no_ticket" value="<?php echo $b['no_ticket'];?>">
                      <input type="text" class="form-control" name="qty" id="qty" placeholder="Update Qty" value="<?php echo $b['qty']; ?>" required>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                      <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-edit"></i> Update</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
              </div>
            </form>
</body>
</html>
<script>