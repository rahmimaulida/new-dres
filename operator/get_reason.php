<?php
include ('../config.php');
$data=$_POST['data'];

$qry="SELECT defcode FROM tbl_deflist where id_defcode = '$data'";
$result = mysql_query($qry);

while( $ret = mysql_fetch_array( $result ) )
{
	echo "<option value='".$ret['defcode']."'>".$ret['defcode']."</option>";

}
?>
