<?php 
  session_start();
  include ('../config.php');
  $tbltemp = mysql_query("SELECT * FROM tempreject_".$_SESSION['username']."");
  $numtbl = 0;
  if($tbltemp){
    $numtbl = mysql_num_rows($tbltemp);
  }
?>
<table id="table" class="table table-stripes">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Material</th>
                    <th>Sector</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  if($numtbl > 0){
                  while($res=mysql_fetch_array($tbltemp)){ 
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $res['material_name']; ?></td>
                    <td><?php echo $res['sector']; ?></td>
                    <td><?php echo $res['qty']; ?></td>
                    <td>US$<?php echo number_format(($res['amount'] / $res['qty']),2,",","."); ?></td>
                    <td>US$<?php echo number_format($res['amount'],2,",","."); ?></td>
                    <td><button class="btn btn-danger del-data" id="<?php echo $res['id_reject']; ?>"><i class="fa fa-trash"></i></button></td>
                  </tr>
                  <?php }}else {?>
                  <tr>
                    <td colspan="7" class="text-center">DATA NOT FOUND</td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <?php if($numtbl > 0){ ?>
              <div class="text-center">
                <form action="save_reject.php" method="post">
                  <button type="submit" name="submit" class="btn btn-lg btn-success"><i class="fa fa-save"></i> Save</button>
                </form>
              </div>
              <?php } ?>
          <link rel="stylesheet" href="../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#table').DataTable({
      "bLengthChange": false
    })
  })

  $(document).ready(function()
    {
        $(".del-data").click(function()
        {
            var del_id = $(this).attr('id');
            $.ajax({
                type:'POST',
                url:'deltemp.php',
                data:'id_reject='+del_id,
                success: function(data)
                {
                  $('.show-data').load("tbltemp.php");
                }
            });
        });
    });
  </script>