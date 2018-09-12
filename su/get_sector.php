<?php
include ('../config.php');
$data=$_POST['data'];

$qry="SELECT sector FROM tbl_users where name = '$data' GROUP BY sector";
$result = mysql_query($qry);

while( $ret = mysql_fetch_array( $result ) )
{ 
	echo "<option value='".$ret['sector']."'>".$ret['sector']."</option>";

}
?>