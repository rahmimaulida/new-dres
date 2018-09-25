<?php
include("../config.php");


if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $threshold = $_POST['threshold'];
    $idQty = $_POST['idQty'];
    $thresholdQty = $_POST['thresholdQty'];
    $qry = "UPDATE tbl_threshold, tbl_thresholdqty SET tbl_threshold.threshold='".$threshold."',
    tbl_thresholdqty.thresholdQty='".$thresholdQty."' WHERE tbl_threshold.id_threshold='".$id."'
    AND tbl_thresholdqty.id= '".$idQty."'";
    $query = mysql_query($qry);
    header("location: threshold.php");
}
?>
<!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Application Form</h4>
        </div>

      	<!-- START OF MODAL BODY-->

      	<div class="modal-body">

            <p>
            <a href="#" data-toggle="modal" data-target="#upload-avatar" class="button"><i class="fa fa-plus"></i> Upload new avatar</a>
            </p>


      	</div>

      	<!-- END OF APPLICATION FORM MODAL BODY -->

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->


<!--Modal for uploading photo-->
<div class="modal" id="upload-avatar" tabindex="-1" role="dialog" aria-labelledby="upload-avatar-title" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="upload-avatar-title">Upload new avatar</h4>
        </div>
        <div class="modal-body">
          <p>Please choose a file to upload. JPG, PNG, GIF only.</p>
          <form role="form">
            <div class="form-group">
              <label for="file">File input</label>
              <input type="file" id="file">
              <p class="help-block">Files up to 5Mb only.</p>
            </div>
            <button type="button" class="hl-btn hl-btn-default" id="btnUploadCancel">Cancel</button>
            <button type="button" class="hl-btn hl-btn-green">Upload</button>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


        </div>


            <div id="push"></div>
