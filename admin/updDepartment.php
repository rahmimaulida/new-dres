<?php
    session_start();
    include('../config.php');
    $id = $_GET['id'];
    $qrysec = mysql_query("SELECT department FROM tbl_department GROUP BY department");

    if (isset($_POST['submit'])) {
    	$id=$_POST['id'];
        $department=$_POST['department'];

        $qry= "UPDATE tbl_department SET `department`='$department' WHERE id='$id'";
        $result = mysql_query($qry);
        if(!$result){
            die('Invalid query: ' . mysql_error());
        }
        header('location: departmentview.php');
    }

    $qry="SELECT * FROM tbl_department where id ='$id'";
    $result = mysql_query($qry);

    $b = mysql_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<form role="form" class="form-horizontal" action="updDepartment.php" method="post">
	<div class="modal-body">
    <input type="hidden" name="id" id="id" value="<?php echo $b['id']; ?>">
        <div class="form-group">
            <label for="Department" class="col-sm-2 control-label">Department</label>

            <div class="col-sm-10">
            <input type="text" class="form-control" name="department" id="department" placeholder="Insert Department" value="<?php echo $b['department']; ?>" required>
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
