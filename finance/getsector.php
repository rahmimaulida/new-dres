<?php
include ('../config.php');
$data=$_POST['data'];

$qry="SELECT sector FROM tbl_masterdata where plant like '%$data%' GROUP BY sector";
echo "<option disabled selected value> -- select an option -- </option>";
$result = mysql_query($qry);

while( $ret = mysql_fetch_array( $result ) )
{ 
	
	echo "<option value='".$ret['sector']."'>".$ret['sector']."</option>";

}
?>