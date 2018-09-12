<?php 
include "header.php";
include '../config.php';

$qry=mysql_query("SELECT * FROM tbl_action");

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      ALL OPEN ACTION ITEM
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Action Item</a></li>
        <li><a href="insnewmac.php">All Open Action</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border box-solid bg-green">
              <h3 class="box-title">ALL OPEN ACTION ITEM</h3>
              <a class="btn btn-info pull-right" href="newaction.php"><i class="fa fa-plus"></i> Add New Action</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="data" class="hover table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>SECTOR</th>
                      <th>DATE</th>
                      <th>PART NO</th>
                      <th>ISSUE</th>
                      <th>ACTION</th>
                      <th>WHEN</th>
                      <th>STATUS</th>
                      <th>PIC</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no = 1;
                      while($res=mysql_fetch_array($qry)){
                    ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $res['sector'];?></td>
                      <td><?php echo $res['date'];?></td>
                      <td><?php echo $res['part_no'];?></td>
                      <td><?php echo $res['issue'];?></td>
                      <td><?php echo $res['action'];?></td>
                      <td><?php echo $res['when'];?></td>
                      <td><?php echo $res['status'];?></td>
                      <td><?php echo $res['pic'];?></td>
                      <td>
                        <a class="btn btn-warning" data-target="#ModalUpdate" data-whatever="<?php echo $res['id_action']; ?>" data-toggle="modal"><i class="fa fa-edit"></i></a>
                        <?php echo "<a class='btn btn-danger' data-toggle='modal' data-target='#del_confirm' data-href='delaction.php?id=".$res['id_action']."'><i class='fa fa-trash'></i></a>"; ?>
                      </td>
                    </tr>
                      <?php } ?>
                  </tbody>
                </table>
              </div>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'footer.php'?>
</div>
<!-- ./wrapper -->

<div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header box-solid bg-green">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="memberModalLabel">ACTION ISSUE</h4>
            </div>
            <div class="dash">
             <!-- Content goes in here -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="del_confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <b>Are you sure want to delete this data?</b><br><br>
                    <a class="btn btn-danger btn-ok"><i class="fa fa-trash"></i> Delete</a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
                </div>
            </div>
        </div>
    </div>

<!-- jQuery 3 -->
<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<script>
$(document).ready( function () {
    $('#data').DataTable();
} );
</script>
<script type="text/javascript">
    $('#ModalUpdate').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;
 
            $.ajax({
                type: "GET",
                url: "UpdAction.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.dash').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });  
    });
    $(document).ready(function() {
        $('#del_confirm').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });

  </script>
</body>
</html>