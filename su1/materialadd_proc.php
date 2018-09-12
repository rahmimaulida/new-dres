<?php
include("../config.php");

if (isset($_POST['submit'])) {
  $material_name=$_POST['material_name'];
  $material_description=$_POST['material_description'];
  $product_family=$_POST['product_family'];
  $price=$_POST['price'];
  $qry= "INSERT INTO tbl_material VALUES('','$material_name','$material_description','$product_family','$price')";
  $result = mysql_query($qry) or die(mysql_error());
}

header("location: materialview.php?success");
?>