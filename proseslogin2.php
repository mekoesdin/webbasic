<?php
	$koneksi=mysqli_connect("localhost","root","","dinar");
	$username=0;
	$pasword=0;
	$username=$_POST["username"];
	$pasword=$_POST["sandi"];

	$sql_query="SELECT * FROM data_user where username='$username' AND pasword='$pasword'";
	$data_user=mysqli_query($koneksi,$sql_query);
	$get_data=mysqli_fetch_array($data_user, MYSQLI_ASSOC);

	$id=$get_data['id'];
	$nama_lengkap=$get_data['nama_lengkap'];
	$jenis_kelamin=$get_data['jenis_kelamin'];
	$alamat=$get_data['alamat'];
	$no_telepon=$get_data['no_telepon'];

	if($get_data['id']!=''){
		echo "SELAMAT DATANG, $nama_lengkap BERHASIL LOGIN";
	}else{
		echo "MAAF,LOGIN GAGAL";
	};
?>