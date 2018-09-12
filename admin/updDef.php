<?php
    session_start();
    include('../config.php'); 
    $id = $_GET['id'];
 
    if (isset($_POST['submit'])) {
    	$id=$_POST['id'];
        $defcode=$_POST['defcode'];

        $qry= "UPDATE tbl_deflist SET defcode='$defcode' WHERE id_defcode='$id'";
        $result = mysql_query($qry);
        if(!$result){
            die('Invalid query: ' . mysql_error());
        }
        header('location: deflist.php');
    }

    $qry=mysql_query("SELECT * FROM tbl_deflist where id_defcode ='$id'");

    $b = mysql_fetch_array($qry);
 
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
<form role="form" class="form-horizontal" action="updDef.php" method="post">
	<div class="modal-body">
    <div class="form-group">
            <label for="Password" class="col-sm-2 control-label">Defect Name</label>

            <div class="col-sm-10">
            <input type="hidden" name="id" id="id" value="<?php echo $b['id_defcode'];?>" required>
            <input type="text" class="form-control" name="defcode" id="defcode" placeholder="Insert Defect Code" value="<?php echo $b['defcode'];?>" required>
            </div>
        </div>
    </div>

    <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Update</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
    </div>
	</form>
</body>
</html>