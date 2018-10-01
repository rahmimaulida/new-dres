<?php
include ('../config.php');
$data=$_POST['data'];

$qry="SELECT material_description FROM tbl_material where material_name = '$data'";
$result = mysql_query($qry);

while( $ret = mysql_fetch_array( $result ) )
{
	echo "<option value='".$ret['material_description']."'>".$ret['material_description']."</option>";

}
?>
