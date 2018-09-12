<?php
  session_start();
  include ('../config.php');
  $tbltemp = mysql_query("SELECT * FROM tempreject_".$_SESSION['username']."");
  $numtbl = 0;
  if($tbltemp){
    $numtbl = mysql_num_rows($tbltemp);
  }
?>
<div class="table-responsive">
<table id="table" class="table table-stripes">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No Material</th>
                    <th>Material Description</th>
                    <th>Sector</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>Action</th>
                    <th hidden>pic</th>
                    <th>picture</th>
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
                    <td><?php echo $res['material_description']; ?></td>
                    <td><?php echo $res['sector']; ?></td>
                    <td><?php echo $res['qty']; ?></td>
                    <td>US$<?php echo number_format(($res['amount'] / $res['qty']),2,",","."); ?></td>
                    <td>US$<?php echo number_format($res['amount'],2,",","."); ?></td>
                    <td><button class="btn btn-danger del-data" id="<?php echo $res['id_reject']; ?>"><i class="fa fa-trash"></i></button></td>
                    <td><input type="hidden" value="<?php echo $res['pic']; ?>" name="picName" id="picName"></td>
                    <td>

                      <br>
                        <center><div id="my_camera<?php echo $no; ?>"></div>
                          <br>
                        <div id="results<?php echo $no; ?>"></div></center>
                        <br>
                      <script type="text/javascript" src="../webcam/webcam.min.js"></script>
                      <script language="JavaScript">
                        Webcam.set({
                          width: 96,
                          height: 72,
                          image_format: 'jpeg',
                          jpeg_quality: 90
                        });
                        Webcam.attach( '#my_camera<?php echo $no; ?>' );
                      </script>
                    <div class="text-center">
                      <!-- First, include the Webcam.js JavaScript Library -->
                      <center>
                      <form>
                        <input type="hidden" name="id_reject" id="id_reject" value="<?php echo $res['id_reject']; ?>">
                        <input type=button id="" value="Snapshot" onClick="take_snapshot('results<?php echo $no; ?>')" class="btn btn-lg btn-warning btn-sm">
                      </form>
                      <script language="JavaScript">
                        function take_snapshot(results_photo, id) {
                          // take snapshot and get image data
                          Webcam.snap( function(data_uri) {
                            // display results in page

                            Webcam.upload( data_uri, 'saveimage.php?id='+id, function(code, text) {
                            document.getElementById(results_photo).innerHTML =
                              '<img src="'+data_uri+'"/>';
                          } );
                        } );
                      }
                      </script>
                    </center>
                        </td>
                  </tr>
                  <?php }}else {?>
                  <tr>
                    <script type="text/javascript" src="../webcam/webcam.min.js"></script>
                    <td colspan="7" class="text-center">DATA NOT FOUND</td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <div class="table-responsive">
              <?php if($numtbl > 0){ ?>
              <!--  <br>
                  <center><div id="my_camera"></div>
                    <br>
                  <div id="results"></div></center>
                  <br>
                <script type="text/javascript" src="../webcam/webcam.min.js"></script>
                <script language="JavaScript">
                  Webcam.set({
                    width: 320,
                    height: 240,
                    image_format: 'jpeg',
                    jpeg_quality: 90
                  });
                  Webcam.attach( '#my_camera' );
                </script>
              <div class="text-center">

                <!-- First, include the Webcam.js JavaScript Library -->
                <!--
                <form>
                  <input type=button value="Take Snapshot" onClick="take_snapshot()" class="btn btn-lg btn-warning btn-sm">
                </form>
              -->
              <br>
              <br>
                <form action="save_reject.php" method="post">
                  <button type="submit" name="submit" class="btn btn-lg btn-success"><i class="fa fa-save"></i> Save</button>
                </form>
                <!--
                <script language="JavaScript">
                  function take_snapshot(results_photo) {
                    // take snapshot and get image data
                    Webcam.snap( function(data_uri) {
                      // display results in page
                      var id= $('#id_reject').val();

                      Webcam.upload( data_uri, 'saveimage.php?id='+id, function(code, text) {
                      document.getElementById(results_photo).innerHTML =
                        '<img src="'+data_uri+'"/>';
                    } );
                  } );
                }
                </script>
              -->
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
<!--
  <script language="JavaScript">
  		Webcam.set({
  			width: 320,
  			height: 240,
  			image_format: 'jpeg',
  			jpeg_quality: 90
  		});
  		Webcam.attach( '#my_camera' );
  	</script>

    <script language="JavaScript">
      function take_snapshot() {
        // take snapshot and get image data
        Webcam.snap( function(data_uri) {
          // display results in page
          document.getElementById('results').innerHTML =
            '<img src="'+data_uri+'" id="gambar"/>';
            Webcam.upload(data_uri, 'upload.php', function (code, text) {

                  alert(data_uri);
          });
        });
        Webcam.reset();
      }
    </script>
-->
