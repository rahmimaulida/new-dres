<?php
include ('../config.php');
$data=$_POST['data'];

$qry=mysql_query("SELECT name FROM tbl_users WHERE sector = '$data'");
echo "<option disabled selected value> -- select an option -- </option>";

while( $ret = mysql_fetch_array( $qry ) )
{
	echo "<option value='".$ret['name']."'>".$ret['name']."</option>";
}
?>