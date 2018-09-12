<?php 
include 'config.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$login = mysql_query("SELECT * FROM tbl_users WHERE userid='$username' and password='$password'");
$check = mysql_num_rows($login);
 
if($check > 0){
	session_start();
	while($res=mysql_fetch_array($login)){
		$_SESSION['username'] = $username;
		$_SESSION['name'] = $res['name'];
		$_SESSION['level'] = $res['level'];
		$level = $res['level'];
		if($level == 'Visitor'){
			header("location: guest/index.php");
		}else if($level == 'Operator'){
			header("location: operator/index.php");
		}else if($level == 'User'){
			header("location: user/index.php");
		}else if($level == 'Super User'){
			header("location: su/index.php");
		}else if($level == 'Administrator'){
			header("location: admin/index.php");
		}
	}
}else{
	header("location:index.php");	
}
 
?>