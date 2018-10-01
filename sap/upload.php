<?php
        session_start();
      	include '../config.php';
        $path = 'img'.date('YmdHis').rand(383,1000);
        move_uploaded_file($_FILES['webcam']['tmp_name'], $path);
        $query = "UPDATE tempreject_".$_SESSION['username']." set gambar= '".$path."' where id_reject=6";
        mysql_query($query)or die(mysql_error());
        echo "<script>alert('successfully..');</script>";
        header("location: add_reject.php");

    ?>
