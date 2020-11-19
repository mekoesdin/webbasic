<?php
$koneksi=mysqli_connect("localhost","root","","dinar");

$username=0;
$password=0;
$username_input=$_POST["username"]; //dinar
$password_input=$_POST["sandi"]; //1234

$sql_query="SELECT * FROM dinar_table where username='$username_input' AND password='$password_input'";
$dbdata=mysqli_query($koneksi,$sql_query); //1dinar1234
$get_data = mysqli_fetch_array($dbdata, MYSQLI_ASSOC);

$id_db =$get_data['id'];
$nama_lengkap =$get_data['nama_lengkap'];
$alamat_db =$get_data['alamat'];


if ( $get_data['id']!='' ){
	echo "selamat datang $nama_lengkap,anda berhasil login,id anda $id_db, alamat anda $alamat_db";
}else{
	echo "username salah";
};




// $sql = "SELECT * FROM dinar_table";
// $hasil_data = mysqli_query($koneksi,$sql);
// while ($get_data = mysqli_fetch_array($hasil_data, MYSQLI_ASSOC)){
// 	echo $get_data["id"];
// 	echo $get_data["username"];
// 	echo $get_data["password"];
// };
?>