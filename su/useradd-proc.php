<?php
include '../config.php';

if (isset($_POST['submit'])) {
    $userid=$_POST['userId'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $position=$_POST['position'];
    $plant=$_POST['plant'];
    $sector=$_POST['sector'];
    $line=$_POST['line'];

    $qrylevel = mysql_query("SELECT level FROM tbl_roles WHERE position = '$position'");
    $result = mysql_fetch_array($qrylevel);

    $level = $result['level'];
 
    $qry= "INSERT INTO tbl_users VALUES('$userid','$email','$password','$name','$mobile','$level','$position','$plant','$sector','$line')";
    $result = mysql_query($qry) or die(mysql_error());
    header("location: userview.php?success");
}
?>