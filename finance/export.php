<?php
//export.php
include '../config.php';
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM tbl_material";
 $result = mysql_query($query);
 if(mysql_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">
                    <tr>
                      <th class="text-center">Material</th>
                      <th class="text-center">Material Description</th>
                      <th class="text-center">Product Family</th>
                      <th class="text-center">Price</th>
                      <th class="text-center">UOM</th>
                    </tr>
  ';
  while($row = mysql_fetch_array($result))
  {
   $output .= '
    <tr>
                         <td>'.$row["material_name"].'</td>
                         <td>'.$row["material_description"].'</td>
                         <td>'.$row["product_family"].'</td>
                         <td>'.$row["price"].'</td>
                         <td>'.$row["uom"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/vnd-ms-excel');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>





<?php/*
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");

// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=tutorialweb-export.xls");

// Tambahkan table
include 'materialview.php';
*/?>
