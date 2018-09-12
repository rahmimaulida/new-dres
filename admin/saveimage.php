<?php
//
//set random name for the image, used time() for uniqueness

$filename =  time() . '.png';
$filepath = '../assets/img/';

move_uploaded_file($_FILES['webcam']['tmp_name'], $filepath.$filename);

echo $filepath.$filename;
include '../config.php';
$sql = "INSERT INTO gambar (gambar) VALUES ('".$filename."')";
$simpan = mysql_query($sql);


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
