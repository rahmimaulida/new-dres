<?php
include '../config.php';
include 'header.php';
$qryplant = mysql_query("SELECT * FROM tbl_masterdata GROUP BY plant");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Defect
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master Data</a></li>
        <li class="active">Master Defect</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border box-solid bg-green">
              <h3 class="box-title">User View</h3>
              <a class="btn btn-info pull-right" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add New Data</a>
            </div>
            <div></div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="table" class="table">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Defect ID</th>
                    <th class="text-center">Defect Name</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                    $query=mysql_query("SELECT * FROM tbl_deflist");
                    $no = 1;
                    while($b=mysql_fetch_array($query)){
                  ?>
                  <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td class="text-center"><?php echo $b['id_defcode'] ?></td>
                    <td class="text-center"><?php echo $b['defcode'] ?></td>
                    <td class="text-center">
                      <a href="" class="btn btn-warning" data-target="#ModalUpdate" data-whatever="<?php echo $b['id_defcode']; ?>" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a>
                      <?php echo "<a class='btn btn-danger' data-toggle='modal' data-target='#del_confirm' data-href='deldef.php?id=".$b['id_defcode']."'><i class='fa fa-trash'></i> Delete</a>"; ?>
                    </td>
                    <?php } ?>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <?php include 'footer.php'; ?>
</div>
<!-- ./wrapper -->

<div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header box-solid bg-green">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="memberModalLabel">EDIT DEFECT</h4>
            </div>
            <div class="dash">
             <!-- Content goes in here -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header box-solid bg-green">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="memberModalLabel">ADD DEFECT</h4>
            </div>
            <div>
            <form role="form" class="form-horizontal" action="add-defect.php" method="post">
              <div class="modal-body">
                <div class="form-group">
                    <label for="Password" class="col-sm-2 control-label">Defect Name</label>

                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="defcode" id="defcode" placeholder="Insert Defect Name" value="<?php echo $b['defcode'];?>" required>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
              </div>
            </form>
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
<!-- DataTables -->
<script src="../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- page script -->
<script type="text/javascript">
$(function () {
    $('#table').DataTable()
  })

    $('#ModalUpdate').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;

            $.ajax({
                type: "GET",
                url: "updDef.php",
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
    })

    $(document).ready(function() {
        $('#del_confirm').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });
  </script>

</body>
</html>
