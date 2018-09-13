<?php
error_reporting(0);
    session_start();
    include('../config.php');
    $id_data = $_GET['id'];
    $linee = mysql_query("SELECT sector FROM tbl_sector");

    if (isset($_POST['submit'])) {
        $id_data=$_POST['id_data'];
    	$plant=$_POST['plant'];
        $sector=$_POST['sector'];
        $line=$_POST['line'];
        $qry= "UPDATE tbl_masterdata SET plant='$plant', sector='$sector', line='$line' WHERE id_data='$id_data'";
        $result = mysql_query($qry);
        if(!$result){
            die('Invalid query: ' . mysql_error());
        }
        header('location: lineview.php');
    }

    $qry="SELECT * FROM tbl_masterdata where id_data ='$id_data'";
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
<form role="form" class="form-horizontal" action="updLine.php" method="post">
              <div class="modal-body">
                <input type="hidden" id="id_data" name="id_data" value="<?php echo $b['id_data'];?>">
                <div class="form-group">
                    <label for="Plant" class="col-sm-2 control-label">Plant</label>

                    <div class="col-sm-10">

                      <select class="form-control" name="plant" id="plant">
                        <option value="PEL" <?php if($b['plant'] == "PEL"){ echo "selected"; }?>>PEL</option>
                        <option value="PEM" <?php if($b['plant'] == "PEM"){ echo "selected"; }?>>PEM</option>
                        <option value="BLP" <?php if($b['plant'] == "BLP"){ echo "selected"; }?>>BLP</option>
                        <option value="SENSOR" <?php if($b['plant'] == "SENSOR"){ echo "selected"; }?>>SENSOR</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                  <label for="Sector" class="col-sm-2 control-label">Sector</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="sector" id="sector" required >
                    <?php while($res=mysql_fetch_array($linee)){?>
                      <option value="<?php echo $res['sector']; ?>" <?php if($b['sector'] != ""){ echo "selected"; }?>><?php echo $res['sector']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <!--  <div class="form-group">
                    <label for="Sector" class="col-sm-2 control-label">Sector</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="sector" id="sector">
                        <option value="AUTO" <?php// if($b['sector'] == "AUTO"){ echo "selected"; }?>>AUTO</option>
                        <option value="DRIVE" <?php //if($b['sector'] == "DRIVE"){ echo "selected"; }?>>DRIVE</option>
                        <option value="PCBA" <?php //if($b['sector'] == "PCBA"){ echo "selected"; }?>>PCBA</option>
                      </select>
                    </div>
                </div>
              -->
                <div class="form-group">
                    <label for="Line" class="col-sm-2 control-label">Line</label>

                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="line" id="line" placeholder="Insert Line" value="<?php echo $b['line']; ?>" required>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                      <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
              </div>
            </form>
</body>
</html>
<script>
