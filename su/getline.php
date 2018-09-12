<?php
include ('../config.php');
$data=$_POST['data'];

$qry="SELECT line FROM tbl_masterdata where sector like '%$data%' GROUP BY line";
echo "<option disabled selected value> -- select an option -- </option>";
$result = mysql_query($qry);

while( $ret = mysql_fetch_array( $result ) )
{ 
	
	echo "<option value='".$ret['line']."'>".$ret['line']."</option>";

}
?>