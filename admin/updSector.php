<?php
    session_start();
    include('../config.php');
    $id = $_GET['id'];
    $qrysec = mysql_query("SELECT sector FROM tbl_masterdata GROUP BY sector");

    if (isset($_POST['submit'])) {
    	$id=$_POST['id'];
        $sector=$_POST['sector'];

        $qry= "UPDATE tbl_sector SET `sector`='$sector' WHERE id='$id'";
        $result = mysql_query($qry);
        if(!$result){
            die('Invalid query: ' . mysql_error());
        }
        header('location: sectorview.php');
    }

    $qry="SELECT * FROM tbl_sector where id ='$id'";
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
<form role="form" class="form-horizontal" action="updSector.php" method="post">
	<div class="modal-body">
    <input type="hidden" name="id" id="id" value="<?php echo $b['id']; ?>">
        <div class="form-group">
            <label for="Sector" class="col-sm-2 control-label">Sector</label>

            <div class="col-sm-10">
            <input type="text" class="form-control" name="sector" id="sector" placeholder="Insert Sector" value="<?php echo $b['sector']; ?>" required>
            </div>
        </div>
    </div>

    <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Update</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
    </div>
	</form>
</body
</html>
