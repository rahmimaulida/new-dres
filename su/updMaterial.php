<?php
    session_start();
    include('../config.php');
    $id_material = $_GET['id'];

    if (isset($_POST['submit'])) {
        $id_material=$_POST['id_material'];
    	$material_name=$_POST['material_name'];
        $material_description=$_POST['material_description'];
        $product_family=$_POST['product_family'];
        $price=$_POST['price'];
        $qry= "UPDATE tbl_material SET material_name='$material_name', material_description='$material_description', product_family='$product_family', price='$price' WHERE id_material='$id_material'";
        $result = mysql_query($qry);
        if(!$result){
            die('Invalid query: ' . mysql_error());
        }
        header('location: materialview.php');
    }

    $qry="SELECT * FROM tbl_material where id_material ='$id_material'";
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
<form role="form" class="form-horizontal" action="updMaterial.php" method="post">
              <div class="modal-body">
                <div class="form-group">
                    <label for="material_name" class="col-sm-2 control-label">Material Name</label>

                    <div class="col-sm-10">
                      <input type="hidden" name="id_material" value="<?php echo $b['id_material']; ?>">
                      <input type="text" class="form-control" name="material_name" id="material_name" placeholder="Insert Material Name" value="<?php echo $b['material_name']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="material_description" class="col-sm-2 control-label">Material Description</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="material_description" id="material_description" placeholder="Insert Material Description" value="<?php echo $b['material_description']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="product_family" class="col-sm-2 control-label">Product Family</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="product_family" id="product_family" placeholder="Insert Product Family" value="<?php echo $b['product_family']; ?>" required>
                    </div>
                </div>
                <div class="form-group" hidden>
                    <label for="price" class="col-sm-2 control-label">Price</label>

                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="price" id="price" placeholder="Insert Price" value="<?php echo $b['price']; ?>" required>
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
<script>
