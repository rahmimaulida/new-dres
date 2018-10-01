<?php
    session_start();
    include('../config.php');
    $userid = $_GET['id'];
    $qryplant = mysql_query("SELECT * FROM tbl_masterdata GROUP BY plant");

    if (isset($_POST['submit'])) {
    	$userid=$_POST['userId'];
        $email=$_POST['email'];
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $position=$_POST['position'];
        $plant=$_POST['plant'];
        $sector=$_POST['sector'];
        $line=$_POST['line'];

        $qrylevel = mysql_query("SELECT level FROM tbl_roles WHERE position = '$position'");
        $result = mysql_fetch_array($qrylevel);

        $level = $result['level'];

        $qry= "UPDATE tbl_users SET email='$email', name='$name', mobile='$mobile', level='$level', position='$position', plant='$plant', sector='$sector', line='$line' WHERE userId='$userid'";
        $result = mysql_query($qry);
        if(!$result){
            die('Invalid query: ' . mysql_error());
        }
        header('location: userview.php');
    }

    $qry="SELECT * FROM tbl_users where userId ='$userid'";
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
<form role="form" class="form-horizontal" action="updUsers.php" method="post">
	<div class="modal-body">
    <div class="form-group">
            <label for="Password" class="col-sm-2 control-label">User ID</label>

            <div class="col-sm-10">
            <input type="text" class="form-control" name="userId" id="userId" placeholder="Insert User ID" value="<?php echo $b['userId'];?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="email" id="email" placeholder="Insert Email" value="<?php echo $b['email'];?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Name" class="col-sm-2 control-label">Name</label>

            <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="name" placeholder="Insert Name" value="<?php echo $b['name'];?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Mobile" class="col-sm-2 control-label">Mobile</label>

            <div class="col-sm-10">
            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Insert Name" value="<?php echo $b['mobile'];?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Position" class="col-sm-2 control-label">Position</label>

            <div class="col-sm-10">
                <select class="form-control" name="position" id="position" required>
                    <option disabled> -- select an option -- </option>
                    <option value="Line Inspector" <?php if($b['position'] == "Line Inspector"){ echo "selected";}?>>Line Inspector</option>
                    <option value="<?php echo "CS&Q Engineer";?>" <?php if($b['position'] == "CS&Q Engineer"){ echo "selected";}?>>CS&Q Engineer</option>
                    <option value="<?php echo "CS&Q Manager";?>" <?php if($b['position'] == "CS&Q Manager"){ echo "selected";}?>>CS&Q Manager</option>
                    <option value="Supervisor (Support Function)" <?php if($b['position'] == "Supervisor (Support Function)"){ echo "selected";}?>>Supervisor (Support Function)</option>
                    <option value="Finance Manager (Support Function)" <?php if($b['position'] == "Finance Manager (Support Function)"){ echo "selected";}?>>Finance Manager (Support Function)</option>
                    <option value="Plant Director" <?php if($b['position'] == "Plant Director"){ echo "selected";}?>>Plant Director</option>
                    <option value="<?php echo "CS&Q Cluster Leader";?>" <?php if($b['position'] == "CS&Q Cluster Leader"){ echo "selected";}?>>CS&Q Cluster Leader</option>
                    <option value="<?php echo "VP";?>" <?php if($b['position'] == "VP"){ echo "selected";}?>>VP</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="Name" class="col-sm-2 control-label">Plant</label>

            <div class="col-sm-10">
                <select class="form-control" name="plant" id="plant">
                    <?php while($d=mysql_fetch_array($qryplant)){?>
                        <option value="<?php echo $d['plant']; ?>" <?php if($d['plant'] == $b['plant']){ echo "selected"; }?>><?php echo $d['plant']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="Mobile" class="col-sm-2 control-label">Sector</label>

            <div class="col-sm-10">
                <select class="form-control" name="sector" id="sector" required>
                    <option selected value="<?php echo $b['sector'];?>"><?php echo $b['sector'];?></option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="Position" class="col-sm-2 control-label">Line</label>

            <div class="col-sm-10">
            <select class="form-control" name="line" id="line" required>
                <option selected value="<?php echo $b['line'];?>"><?php echo $b['line'];?></option>
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
    $("#plant").change(function(){
        var grp = $(this).val();
// alert(grp);
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "getsector.php",
            data: "data="+grp,
            success: function(msg){
                if(msg == ''){
                        $("select#sector").html('<option disabled selected value> -- select an option -- </option>');

                }else{ //alert(msg);
                          $("select#sector").html(msg);
                }


                }
            });
      });
  });

  $(function() {
    $("#sector").change(function(){
        var grp = $(this).val();
        var plant = $("#plant").val();
// alert(grp);
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "getline.php",
            data: {
                data: grp,
                plant: plant
            },
            success: function(msg){
                if(msg == ''){
                        $("select#line").html('<option disabled selected value> -- select an option -- </option>');

                }else{ //alert(msg);
                          $("select#line").html(msg);
                }


                }
            });
      });
  });
</script>
</html>
