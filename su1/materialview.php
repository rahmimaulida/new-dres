<?php
include '../config.php';
include 'header.php';

if (isset($_POST['submit'])) {
  $material_name=$_POST['material_name'];
  $material_description=$_POST['material_description'];
  $product_family=$_POST['product_family'];
  $price=$_POST['price'];
  $qry= "INSERT INTO tbl_material VALUES('','$material_name','$material_description','$product_family','$price')";
  $result = mysql_query($qry) or die(mysql_error());
}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Material
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master Data</a></li>
        <li class="active">Master Material</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border box-solid bg-green">
              <h3 class="box-title">Master Material</h3>
              <a class="btn btn-info pull-right" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add New Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Material</th>
                  <th class="text-center">Material Description</th>
                  <th class="text-center">Product Family</th>
                  <th class="text-center">Price</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>

                <tbody>
                <?php
                      $query=mysql_query("SELECT * FROM tbl_material");
                      $no=1;
                      while($b=mysql_fetch_array($query)){
										?>
                <tr class="text-center">
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $b['material_name']; ?></td>
                  <td><?php echo $b['material_description']; ?></td>
                  <td><?php echo $b['product_family']; ?></td>
                  <td>US$<?php echo number_format($b['price'],2,",","."); ?></td>
                  <td>
                    <a href="" class="btn btn-warning" data-target="#ModalUpdate" data-whatever="<?php echo $b['id_material']; ?>" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a>
                    <?php echo "<a class='btn btn-danger' data-toggle='modal' data-target='#del_confirm' data-href='delmat.php?id=".$b['id_material']."'><i class='fa fa-trash'></i> Delete</a>"; ?>
                  </td>

                  <?php  } ?>
                </tr>

                </tbody>
              </table>

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

<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header box-solid bg-green">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="memberModalLabel">ADD MASTER DATA</h4>
            </div>
            <div>
            <form role="form" class="form-horizontal" action="materialadd_proc.php" method="post">
              <div class="modal-body">
                <div class="form-group">
                    <label for="material_name" class="col-sm-2 control-label">Material Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="material_name" id="material_name" placeholder="Insert Material Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="material_description" class="col-sm-2 control-label">Material Description</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="material_description" id="material_description" placeholder="Insert Material Description" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="product_family" class="col-sm-2 control-label">Product Family</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="product_family" id="product_family" placeholder="Insert Product Family" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="price" class="col-sm-2 control-label">Price</label>

                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="price" id="price" placeholder="Insert Price" required>
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

<div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header box-solid bg-green">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="memberModalLabel">EDIT MATERIAL</h4>
            </div>
            <div class="dash">
             <!-- Content goes in here -->
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
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  $(document).ready(function() {
        $('#del_confirm').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });

  $('#ModalUpdate').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;
 
            $.ajax({
                type: "GET",
                url: "updMaterial.php",
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
</script>

</body>
</html>
