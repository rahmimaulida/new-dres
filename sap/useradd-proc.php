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
    $department=$_POST['department'];
    //$sector=$_POST['sector'];
    $line=$_POST['linee'];
    $a=0;

    $qrylevel = mysql_query("SELECT level FROM tbl_roles WHERE position = '$position'");
    $result = mysql_fetch_array($qrylevel);

    $level = $result['level'];

    $valueLine="";
    foreach($_POST['line'] as $value){
      $valueLine .= $value . ",";
    }
    $valueLine1= substr($valueLine,0,-1);


    $value1= "";

    if(!empty($_POST["sector"])){
		foreach($_POST["sector"] as $key){
			$value1 .= $key . ",";
    }
    $value2= substr($value1,0,-1);
    mysql_query("INSERT INTO tbl_users VALUES('$userid','$email','$password','$name','$mobile','$level','$position','$plant','$department','$value2','$valueLine1');");
  //  $result = mysql_query($qry);
    header("location: userview.php?success");

  }
}
?>
