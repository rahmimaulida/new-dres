<?php
    session_start();
    include('../config.php'); 
    $id = $_GET['id'];
    $qrysec = mysql_query("SELECT sector FROM tbl_masterdata GROUP BY sector");

    if (isset($_POST['submit'])) {
    	$id=$_POST['id'];
        $sector=$_POST['sector'];
        $date=$_POST['date'];
        $part_no=$_POST['part_no'];
        $issue=$_POST['issue'];
        $action=$_POST['action'];
        $when=$_POST['when'];
        $status=$_POST['status'];
        $pic=$_POST['pic'];

        $qry= "UPDATE tbl_action SET `sector`='$sector', `date`='$date', `part_no`='$part_no', `issue`='$issue', `action`='$action', `when`='$when', `status`='$status', `pic`='$pic' WHERE id_action='$id'";
        $result = mysql_query($qry);
        if(!$result){
            die('Invalid query: ' . mysql_error());
        }
        header('location: viewaction.php');
    }

    $qry="SELECT * FROM tbl_action where id_action ='$id'";
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
<form role="form" class="form-horizontal" action="updAction.php" method="post">
	<div class="modal-body">
        <div class="form-group">
            <label for="Sector" class="col-sm-2 control-label">Sector</label>
            <div class="col-sm-10">
            <input type="hidden" name="id" id="id" value="<?php echo $b['id_action']; ?>">
            <select class="form-control" name="sector" id="sector" required>
                <?php while($res=mysql_fetch_array($qrysec)){ ?>
                <option value="<?php echo $res['sector']; ?>" <?php if($res['sector'] == $b['sector']){ echo "selected";} ?>><?php echo $res['sector']; ?></option>
                <?php } ?>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label for="Date" class="col-sm-2 control-label">Date</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="date" id="date" placeholder="insert Date" value="<?php echo $b['date'] ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Part No" class="col-sm-2 control-label">Part No</label>

            <div class="col-sm-10">
            <input type="text" class="form-control" name="part_no" id="part_no" placeholder="Insert Part NO" value="<?php echo $b['part_no'];?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Issue" class="col-sm-2 control-label">Issue</label>

            <div class="col-sm-10">
            <textarea class="form-control" id="issue" name="issue" required><?php echo $b['issue'];?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="Action" class="col-sm-2 control-label">Action</label>

            <div class="col-sm-10">
            <textarea class="form-control" id="action" name="action" required><?php echo $b['action'];?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="When" class="col-sm-2 control-label">When</label>

            <div class="col-sm-10">
            <input type="text" class="form-control" name="when" id="when" placeholder="Insert When" value="<?php echo $b['when']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Status" class="col-sm-2 control-label">Status</label>

            <div class="col-sm-10">
            <select class="form-control" name="status" id="status" required>
                <option value="" selected disabled>-- select an option --</option>
                <option value="Open" <?php if($b['status'] == 'Open'){ echo "selected"; }?>>Open</option>
                <option value="Close" <?php if($b['status'] == 'Close'){ echo "selected"; }?>>Close</option>
                <option value="Aging" <?php if($b['status'] == 'Aging'){ echo "selected"; }?>>Aging</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label for="PIC" class="col-sm-2 control-label">PIC</label>

            <div class="col-sm-10">
            <select class="form-control" name="pic" id="pic" required>
                <option value="<?php echo $b['pic'];?>" selected><?php echo $b['pic'];?></option>
            </select>
            </div>
        </div>
    </div>

    <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Update</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
    </div>
	</form>
</body>
<script>
$(function() {
    $("#sector").change(function(){
        var grp = $(this).val();
// alert(grp);
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "getpic.php",
            data: "data="+grp,
            success: function(msg){
                if(msg == ''){
                        $("select#pic").html('<option disabled selected value> -- select an option -- </option>');
                        
                }else{ //alert(msg);
                          $("select#pic").html(msg);                                                       
                }

                                                                    
                }
            });                    
      });  
  });

</script>
</html>