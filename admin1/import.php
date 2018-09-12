<?php
 //export.php
 include '../config.php';
 if(!empty($_FILES["excel_file"]))
 {
      $file_array = explode(".", $_FILES["excel_file"]["name"]);
      if($file_array[1] == "XLSX" OR "xlsx")
      {
           include("../PHPExcel/Classes/PHPExcel/IOFactory.php");
           $output = '';
           $output .= "
           <label class='text-success'>Data Inserted</label>
                <table class='table table-bordered'>
                     <tr>
                         <th>Material</th>
                         <th>Material Description</th>
                         <th>Product Family</th>
                         <th>Price</th>
                         <th>UOM</th>
                     </tr>
                     ";
           $object = PHPExcel_IOFactory::load($_FILES["excel_file"]["tmp_name"]);
           foreach($object->getWorksheetIterator() as $worksheet)
           {
                $highestRow = $worksheet->getHighestRow();
                for($row=2; $row<=$highestRow; $row++)
                {
                     $material_name = mysql_real_escape_string($worksheet->getCellByColumnAndRow(1, $row)->getValue());
                     $material_description = mysql_real_escape_string($worksheet->getCellByColumnAndRow(2, $row)->getValue());
                     $product_family = mysql_real_escape_string($worksheet->getCellByColumnAndRow(3, $row)->getValue());
                     $price = mysql_real_escape_string($worksheet->getCellByColumnAndRow(4, $row)->getValue());
                     $uom = mysql_real_escape_string($worksheet->getCellByColumnAndRow(5, $row)->getValue());
                     $query = "
                     INSERT INTO tbl_material
                     (material_name, material_description, product_family, price, uom)
                     VALUES ('".$material_name."', '".$material_description."', '".$product_family."', '".$price."', '".$uom."')
                     ";
                     mysql_query($query);
                     $output .= '
                     <tr>
                          <td>'.$material_name.'</td>
                          <td>'.$material_description.'</td>
                          <td>'.$product_family.'</td>
                          <td>'.$price.'</td>
                          <td>'.$uom.'</td>
                     </tr>
                     ';
                }
           }
           $output .= '</table>';
           echo $output;
      }
      else
      {
           echo '<label class="text-danger">Invalid File</label>';
      }
 }
 ?>
