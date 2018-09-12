<?php
include '../config.php';
include 'header.php';
$qryplant = mysql_query("SELECT * FROM tbl_masterdata GROUP BY plant");
$qryline = mysql_query("SELECT * FROM tbl_masterdata GROUP BY line");
$departmentt = mysql_query("SELECT department FROM tbl_department");
$qrysector = mysql_query("SELECT * FROM tbl_sector GROUP BY sector");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master Data</a></li>
        <li class="active">Master User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border box-solid bg-green">
              <h3 class="box-title">User View</h3>
              <a class="btn btn-info pull-right" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add New Users</a>
            </div>
            <div></div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table" class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Level</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Plant</th>
                    <th>Sector</th>
                    <th>Line</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                    $query=mysql_query("SELECT * FROM tbl_users");
                    $no = 1;
                    while($b=mysql_fetch_array($query)){
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $b['userId'] ?></td>
                    <td><?php echo $b['name'] ?></td>
                    <td><?php echo $b['email'] ?></td>
                    <td><?php echo $b['mobile'] ?></td>
                    <td><?php echo $b['level'] ?></td>
                    <td><?php echo $b['position'] ?></td>
                    <td><?php echo $b['department'] ?></td>
                    <td><?php echo $b['plant'] ?></td>
                    <td><?php echo $b['sector'] ?></td>
                    <td><?php echo $b['line'] ?></td>
                    <td>
                      <a href="" class="btn btn-warning" data-target="#ModalUpdate" data-whatever="<?php echo $b['userId']; ?>" data-toggle="modal"><i class="fa fa-edit"></i></a>
                      <?php echo "<a class='btn btn-danger' data-toggle='modal' data-target='#del_confirm' data-href='deluser.php?id=".$b['userId']."'><i class='fa fa-trash'></i></a>"; ?>
                    </td>
                    <?php } ?>
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

<div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header box-solid bg-green">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="memberModalLabel">EDIT USER</h4>
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
                <h4 class="modal-title" id="memberModalLabel">ADD USER</h4>
            </div>
            <div>
            <form role="form" class="form-horizontal" action="useradd-proc.php" method="post">
              <div class="modal-body">
                <div class="form-group">
                    <label for="Password" class="col-sm-2 control-label">User ID</label>

                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="userId" id="userId" placeholder="Insert User ID" value="<?php echo $b['userId'];?>" maxlength="10" minlength="10" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Insert Email" value="<?php echo $b['email'];?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Password" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Insert Password" value="<?php echo $b['password'];?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Name" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Insert Name" value="<?php echo $b['name'];?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Mobile" class="col-sm-2 control-label">Mobile</label>

                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Insert Name" value="<?php echo $b['mobile'];?>" maxlength="13" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Position" class="col-sm-2 control-label">Position</label>

                    <div class="col-sm-10">
                        <select class="form-control" name="position" id="position" required>
                          <option disabled selected value> -- select an option -- </option>
                          <option value="Line Inspector">Line Inspector</option>
                          <option value="CS&Q Engineer">CS&amp;Q Engineer</option>
                          <option value="CS&Q Manager">CS&amp;Q Manager</option>
                          <option value="Supervisor (Support Function)">Supervisor (Support Function)</option>
                          <option value="Finance Manager (Support Function)">Finance Manager (Support Function)</option>
                          <option value="Plant Director">Plant Director</option>
                          <option value="CS&Q Cluster Leader">CS&amp;Q Cluster Leader</option>
                          <option value="VP">VP</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Plant" class="col-sm-2 control-label">Plant</label>

                    <div class="col-sm-10">
                        <select class="form-control" name="plant" id="plant" required>
                        <option disabled selected value> -- select an option -- </option>
                        <?php while($b=mysql_fetch_array($qryplant)){?>
                          <option value="<?php echo $b['plant']; ?>"><?php echo $b['plant']; ?></option>
                        <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                  <label for="Department" class="col-sm-2 control-label">Department</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="department" id="department" required>
                    <option disabled selected>Select Department...</option>
                    <?php while($res=mysql_fetch_array($departmentt)){?>
                      <option value="<?php echo $res['department']; ?>"><?php echo $res['department']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
                <div class="form-group">
                    <label for="Sector" class="col-sm-2 control-label">Sector</label>

                    <div class="col-sm-10">
                      <?php while($ress=mysql_fetch_array($qrysector)){?>
                      <input type="checkbox" name="sector[]" value="<?php echo $ress['sector']; ?>"> &nbsp;<?php echo $ress['sector']; ?>
                        <?php } ?>
                        <!--<select class="form-control" name="sector" id="sector" required>
                            <option disabled selected value> -- select an option -- </option>
                        </select> -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="Line" class="col-sm-2 control-label">Line</label>

                    <div class="col-sm-10">
                      <select class="form-control" name="linee" id="linee" required>
                        <option disabled selected>Select Line...</option>
                        <?php while($resss=mysql_fetch_array($qryline)){?>
                          <option value="<?php echo $resss['line']; ?>"><?php echo $resss['line']; ?></option>
                        <?php } ?>
                      </select>


                      <!--  <select class="form-control" name="line" id="line" required>
                            <option disabled selected value> -- select an option -- </option>
                        </select>
                      -->
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
                url: "updUsers.php",
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

  $(function() {
    $("#plant").change(function(){
        var grp = $(this).val();
// alert(grp);
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "getsector.php",
            data: "data="+grp,
            success: function(msg){
                if(msg == ''){
                        $("select#sector").html('<option disabled selected value> -- select an option -- </option>');

                }else{ //alert(msg);
                          $("select#sector").html(msg);
                }


                }
            });
      });
  });

  $(function() {
    $("#sector").change(function(){
        var grp = $(this).val();
        var plant = $("#plant").val();
// alert(grp);
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "getline.php",
            data: {
                data: grp,
                plant: plant
            },
            success: function(msg){
                if(msg == ''){
                        $("select#line").html('<option disabled selected value> -- select an option -- </option>');

                }else{ //alert(msg);
                          $("select#line").html(msg);
                }


                }
            });
      });
  });

  </script>

</body>
</html>
