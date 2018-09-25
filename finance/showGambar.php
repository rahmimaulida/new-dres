<?php
    session_start();
    include('../config.php');
    $id_reject = $_GET['id'];

?>
<html>
<head>
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php
  $result = MySQL_query("SELECT * FROM tbl_prod_reject WHERE id_reject = '".$id_reject."'");
  $res = mysql_fetch_array($result)?>
  <center>
    <img src="../assets/img/<?php echo $res['gambar']; ?>" width="288px" height="288px"/>
  </center>

  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
  </div>

</body>
<style>
    .list-group{
        max-height: 300px;
        margin-bottom: 10px;
        overflow:scroll;
        -webkit-overflow-scrolling: touch;
    }
</style>
</html>
