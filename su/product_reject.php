<?php
error_reporting(0);
include '../config.php';
include 'header.php';
$qry = mysql_query("SELECT plant from tbl_users WHERE userId='".$_SESSION['username']."' ");
$tes = mysql_fetch_array($qry);

$check=MySQL_query("SELECT eng_status, mgr_status, spv_status, finance_mgrStatus FROM tbl_approve WHERE no_ticket='$no_ticket'");
$es=mysql_fetch_array($check);
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Approved Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Product Reject</a></li>
        <li class="active">List Approved Product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border box-solid bg-green">
              <h3 class="box-title">List Approved Product</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form class="form-horizontal" action="approve.php" method="post">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr valign="middle">
                  <th class="text-center"  rowspan="2">Ticket No</th>
                  <th class="text-center" colspan="2">Line Inspector</th>
                  <th class="text-center" colspan="2">Engineer</th>
                  <th class="text-center" rowspan="2">Sector</th>
                  <th class="text-center"  rowspan="2">Total Reject Qty</th>
                  <th class="text-center" rowspan="2">Total Amount</th>
                  <th class="text-center" rowspan="2">Status</th>
                  <th class="text-center" rowspan="2">Action</th>
                </tr>
                <tr>
                  <th class="text-center">Name</th>
                  <th class="text-center" >Date</th>

                  <th class="text-center"  >Name</th>
                  <th class="text-center"  >Date</th>
                </tr>

                </thead>

                <tbody>
                <?php $namaku=$_SESSION['name'];
                  $query=mysql_query("SELECT tbl_prod_reject.no_ticket, tbl_prod_reject.insertDate, tbl_prod_reject.sector,
                    tbl_prod_reject.insertedBy, SUM(tbl_prod_reject.qty) as total,
                  SUM(tbl_prod_reject.amount) as amount, tbl_prod_reject.action, tbl_prod_reject.pic,
                  tbl_approve.mgr_name, tbl_approve.eng_name, tbl_approve.spv, tbl_approve.finance_mgr, tbl_approve.sap_admin,
                  tbl_approve.eng_date, tbl_approve.mgr_date, tbl_approve.spv_date, tbl_approve.finance_mgrDate
                    FROM tbl_prod_reject
                  left join tbl_approve on tbl_approve.no_ticket= tbl_prod_reject.no_ticket
                  WHERE plant='".$tes['plant']."' AND eng_name='$namaku'
                  GROUP BY no_ticket") or die(mysql_error());
                  $jumlah=mysql_num_rows($query);
                  if ($jumlah==0){?><td colspan="17" style="text-align: center;">NO WAITING LIST APPROVAL</td><?php }
                  while($b=mysql_fetch_array($query)){
                ?>
                <?php

                $tresss=MySQL_query("SELECT * FROM tbl_thresholdqty WHERE id=1");
                $qty=mysql_fetch_array($tresss);

                $tressss=MySQL_query("SELECT * FROM tbl_threshold WHERE id_threshold=1");
                $amount=mysql_fetch_array($tressss);
                ?>
                <tr class="text-center">
                  <?php if($b['total'] <= $qty['thresholdQty'] && $b['amount'] <= $amount['threshold']){?>
                  <td><a class="btn btn-warning btn-xs" href="#" data-target="#ModalDetail" data-whatever="<?php echo $b['no_ticket']; ?>"
                    data-toggle="modal"><?php echo $b['no_ticket']; $no_ticket = $b['no_ticket']; ?></a></td>
                  <?php } else { ?>
                    <td><a class="btn btn-danger btn-xs" href="#" data-target="#ModalDetail" data-whatever="<?php echo $b['no_ticket']; ?>" data-toggle="modal"><?php echo $b['no_ticket']; $no_ticket = $b['no_ticket']; ?></a></td>
                  <?php } ?>
                  <td><?php echo $b['insertedBy']; ?></td>
                  <td><?php echo $b['insertDate']; ?></td>
                  <td><?php echo $b['eng_name']; ?></td>
                  <td><?php echo $b['eng_date']; ?></td>
                  <td><?php echo $b['sector']; ?></td>
                  <td><?php echo $b['total'] ?></td>
                  <td>US$<?php echo number_format($b['amount'],2,",","."); ?></td>
                  <td><?php echo $b['action'] ?></td>
                  <!--Roman-->
                  <input type="hidden" name="ticket" id="ticket" value="<?php echo $no_ticket; ?>">
                  <input type="hidden" name="comment" id="comment" value="-">
                  <?php

                  $tresss=MySQL_query("SELECT * FROM tbl_thresholdqty WHERE id=1");
                  $qty=mysql_fetch_array($tresss);

                  $tressss=MySQL_query("SELECT * FROM tbl_threshold WHERE id_threshold=1");
                  $amount=mysql_fetch_array($tressss);
                  ?>
                  <td>
                    <a class="btn btn-warning btn-sm" readonly>APPROVED <i class="fa fa-heart"></i></a></td>
                </tr>
                <?php } ?>
              </form>
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

<div class="modal fade" id="ModalDetail" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header box-solid bg-green">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="memberModalLabel">List Product Reject</h4>
            </div>
            <div class="dash">
             <!-- Content goes in here -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalDetailsCommentApprove" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header box-solid bg-green">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="memberModalLabel">Approval Execution</h4>
            </div>
            <div class="dash">
             <!-- Content goes in here -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalDetailsCommentReject" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header box-solid bg-green">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="memberModalLabel">Rejection Execution</h4>
            </div>
            <div class="dash">
             <!-- Content goes in here -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header box-solid bg-green">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="memberModalLabel">Edit Item Reject</h4>
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
                    <b>Are you sure want to propose delete this data?</b><br><br>
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
<script>
  $(function () {
    $('#example1').DataTable()
  })

  $(document).ready(function() {
        $('#del_confirm').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });

  $('#ModalDetail').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;

            $.ajax({
                type: "GET",
                url: "showreject.php",
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

    $('#ModalDetailsCommentApprove').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            var modal = $(this);
            var dataString = 'id=' + recipient;

              $.ajax({
                  type: "GET",
                  url: "showRejectCommentApprove.php",
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


      $('#ModalDetailsCommentReject').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) // Button that triggered the modal
              var recipient = button.data('whatever') // Extract info from data-* attributes
              var modal = $(this);
              var dataString = 'id=' + recipient;

                $.ajax({
                    type: "GET",
                    url: "showRejectCommentReject.php",
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


    $('#ModalUpdate').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;

            $.ajax({
                type: "GET",
                url: "edit_item.php",
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

<style>

.modal-lg {
  width: 95%;
  margin: auto;
  top: 3%;
}
</style>

</body>
</html>
