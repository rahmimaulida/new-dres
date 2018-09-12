<?php
include ('../config.php');
$data=$_POST['data'];

$qry=mysql_query("SELECT sector FROM tbl_users WHERE name = '$data' GROUP BY sector");
$res=mysql_fetch_array($qry);

$result = mysql_query("SELECT line FROM tbl_masterdata WHERE sector='".$res['sector']."'");

while( $ret = mysql_fetch_array( $result ) )
{
	echo "<option data-tokens='".$ret['line']."'>".$ret['line']."</option>";
}
?>