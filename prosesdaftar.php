<?php
$koneksi=mysqli_connect("localhost","root","","dinar");

$username=0;
$sandi=0;
$namalengkap=0;
$jeniskelamin=0;
$alamat=0;
$nomertelepon=0;

echo $username=$_POST["username"];
echo $sandi=$_POST["sandi"];
echo $namalengkap=$_POST["namalengkap"];
echo $jeniskelamin=$_POST["jeniskelamin"];
echo $alamat=$_POST["alamat"];
echo $nomertelepon=$_POST["nomertelepon"];

$sql_query="INSERT INTO data_user (username, pasword, nama_lengkap, jenis_kelamin, alamat, no_telepon) VALUES ('$username','$sandi','$namalengkap','$jeniskelamin','$alamat',$nomertelepon)";
$dbdata=mysqli_query($koneksi,$sql_query); //1dinar1234

header("Location:login.html");
?>