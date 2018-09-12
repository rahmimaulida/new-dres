<?php
//
//set random name for the image, used time() for uniqueness
session_start();
$filename =  time() . '.png';
$filepath = '../assets/img/';
$id_reject= $_GET['id'];

move_uploaded_file($_FILES['webcam']['tmp_name'], $filepath.$filename);

echo $filepath.$filename;
include '../config.php';
$sql = "INSERT INTO gambar (gambar, id_reject) VALUES ('".$filename."', '".$id_reject."')";
$simpan = mysql_query($sql);


$update = "UPDATE tempreject_".$_SESSION['username']." SET gambar='".$filename."' WHERE id_reject = '".$id_reject."'";
$eksekusiUpdate= MySQL_query($update);




/*include '../config.php'
$sql = "INSERT INTO gambar (gambar) VALUES ('".$filename."')";
$simpan = mysql_query($sql);
*/
/*$waktu = date("H-i-s");
$nama = 'gambar-'.$waktu;
// print out the correct header to the browser
header("Content-type:image/jpeg");
imagejpeg($img,$nama.".png", 90);

include "koneksi.php";
$gambar = $nama;
// Simpan Data ke Database
$sql = "INSERT INTO hasil (nama,gambar) VALUES ('".$nama."','".$gambar."')";
$simpan = mysql_query($sql);

header("location:".$url);
*/
?>
