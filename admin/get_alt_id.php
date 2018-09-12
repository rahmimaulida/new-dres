<?php
include ('../config.php');
$data=$_POST['data'];

$qry="SELECT userId FROM tbl_users where name = '$data'";
$result = mysql_query($qry);

while( $ret = mysql_fetch_array( $result ) )
{
	echo "<option value='".$ret['userId']."'>".$ret['userId']."</option>";

}
?>
