<?php
include ('../config.php');
$data=$_POST['data'];

//$t = mysql_query("SELECT sector from tbl_users WHERE userId='".$_SESSION['username']."'") or die(mysql_error());
//$s = mysql_fetch_array($t);

$qry="SELECT name FROM tbl_users where sector LIKE '%$data%' AND position='CS&Q Engineer'";
$result = mysql_query($qry);

while( $ret = mysql_fetch_array( $result ) )
{
	echo "<option value='".$ret['name']."'>".$ret['name']."</option>";
	//include "tbltemp.php";

}
?>
