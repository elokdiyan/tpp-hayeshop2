<?php 
 	include "lib/config.php";
	include "lib/koneksi.php";

	
	$namalengkap = $_POST['namalengkap'];
	$username = $_POST['username'];
	$no_hp = $_POST['no_hp'];
	$alamat = $_POST['alamat'];
	$kelurahan = $_POST['kelurahan'];
	$kecamatan = $_POST['kecamatan'];
	$kabupaten = $_POST['kabupaten'];
	$idkota = $_POST['idkota'];
	$provinsi = $_POST['provinsi'];
	$kode_pos = $_POST['kode_pos'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	
	$queryCekUsername = mysqli_query($koneksi, "SELECT username FROM tbl_member WHERE username = '$username'");
	$jmlUsername = mysqli_num_rows($queryCekUsername);

	if ($jmlUsername>0) {
		echo "<script>alert('Username sudah digunakan'); window.location='$base_url'+'daftar.php';</script>";
	}else{
	$queryDaftar = mysqli_query($koneksi, "INSERT INTO tbl_member(nama, username, no_hp, alamat, kelurahan, kecamatan, kabupaten, id_kota, provinsi, kode_pos, email, password) 
														VALUES ('$namalengkap', '$username', '$no_hp', '$alamat', '$kelurahan', '$kecamatan', '$kabupaten', '$idkota', '$provinsi', '$kode_pos', '$email', '$password') ");

	if ($queryDaftar) {
		echo "<script>alert('Data registrasi Berhasil Masuk'); window.location='$base_url'+'index.php';</script>";	
	}else{
		echo "<script>alert('Data registrasi Gagal Masuk'); window.location='$base_url'+'daftar.php';</script>";
	}
}
 ?>