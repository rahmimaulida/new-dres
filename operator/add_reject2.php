<?php
session_start();
include ('../config.php');
$sectorName= mysql_query("SELECT * from tbl_users WHERE userId= '".$_SESSION['username']."'");
$sctr= mysql_fetch_array($sectorName);
$subSector= substr($sctr['sector'], 0,2);

$sc= "D-";
$plantCode= mysql_query("SELECT * from tbl_masterdata");
$plantArray= mysql_fetch_array($plantCode);
$plnt= $plantArray['plant'];
$subPlant = substr($plnt, 0,3);

$tmp = mysql_query("SELECT * FROM tempreject_".$_SESSION['username']."");
$tmpArray= mysql_fetch_array($tmp);
$tmpo= $tmpArray['kapan'];



echo $sc;
echo $subPlant;
echo $subSector;
echo $tmpo;
$number= 0;
$number++;
echo str_pad($number, 4, "0", STR_PAD_LEFT);



$thnBlnTgl= mysql_query("SELECT insertDate from tbl_prod_reject");





//echo $subSector;
?>
