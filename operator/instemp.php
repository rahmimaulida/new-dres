<?php
session_start();
include('../config.php');

$get = mysql_query("SELECT `plant`, `sector`, `line` FROM tbl_users WHERE `name`='".$_POST['pic']."'");
$fetch = mysql_fetch_array($get);

$getprice = mysql_query("SELECT `price` from tbl_material WHERE `material_name`='".$_POST['material_name']."'");
$fetchprice = mysql_fetch_array($getprice);

$sc= "D-";
$plantCode= mysql_query("SELECT * from tbl_masterdata");
$sectorName= mysql_query("SELECT * from tbl_sector");
$thnBlnTgl= mysql_query("SELECT insertDate from tbl_prod_reject");

$subSector= substr($sectorName['name'], 3, 15);
echo $subSector;

$id_reject = "";
$material_name = $_POST['material_name'];
$material_description = $_POST['material_description'];
$qty = $_POST['qty'];
$plant = $fetch['plant'];
$sector = $_POST['sector'];
$shift = $_POST['shift'];
$line = $_POST['line'];
$issue = $_POST['issue'];
$amount = $qty * $fetchprice['price'];
$action = "OPEN";
$status = "Not Yet Approved";
$pic = $_POST['pic'];
$insertedBy = $_SESSION['name'];
$when = $_POST['when'];

$tbl = mysql_query("SELECT 1 FROM tempreject_".$_SESSION['username']);

if($tbl !== FALSE){
    $getqty = mysql_query("SELECT * FROM tempreject_".$_SESSION['username']." WHERE material_name = '".$material_name."' AND pic = '".$pic."'");
    $numqty = mysql_num_rows($getqty);
    if($numqty > 0){
        $res = mysql_fetch_array($getqty);
        $allget = $res['qty'] + $qty;
        $amountget = $res['amount'] + $amount;
        $update = mysql_query("UPDATE tempreject_".$_SESSION['username']." SET qty='".$allget."', amount='".$amountget."' WHERE material_name = '".$material_name."'");
    }else{
        $insert = mysql_query("INSERT INTO tempreject_".$_SESSION['username']." VALUES('".$id_reject."','".$material_name."' ,'".$material_description."','".$qty."','".$plant."','".$sector."','".$line."','".$issue."','".$amount."','".$action."','".$status."','".$pic."', '".$insertedBy."', '".$when."','".$shift."','');") or die(mysql_error());
    }

}else{
    $maketbl = MySQL_query("CREATE TABLE `tempreject_".$_SESSION['username']."`(`id_reject` int(11) AUTO_INCREMENT PRIMARY KEY,`material_name` varchar(100) ,`material_description` varchar(75), `qty` int(11),`plant` varchar(6), `sector` varchar(30), `line` varchar(100), `issue` text, `amount` DOUBLE, `action` varchar(5), `status` varchar(25), `pic` varchar(128), `insertedBy` varchar(128), `kapan` date, `shift` int(11), `gambar` varchar(255));");
    $insert = mysql_query("INSERT INTO `tempreject_".$_SESSION['username']."` VALUES('".$id_reject."','".$material_name."' ,'".$material_description."','".$qty."','".$plant."','".$sector."','".$line."','".$issue."','".$amount."','".$action."','".$status."','".$pic."','".$insertedBy."', '".$when."', '".$shift."');") or die(mysql_error());
}

?>
