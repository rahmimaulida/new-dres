<?php
include("../config.php");


if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $threshold = $_POST['threshold'];
    $idQty = $_POST['idQty'];
    $thresholdQty = $_POST['thresholdQty'];
    $qry = "UPDATE tbl_threshold, tbl_thresholdqty SET tbl_threshold.threshold='".$threshold."',
    tbl_thresholdqty.thresholdQty='".$thresholdQty."' WHERE tbl_threshold.id_threshold='".$id."'
    AND tbl_thresholdqty.id= '".$idQty."'";
    $query = mysql_query($qry);
    header("location: threshold.php");
}
?>
