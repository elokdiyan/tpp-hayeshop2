<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a> </center>";
}else{
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$namaKota = trim($_POST['namaKota']);
	if ($namaKota == "") {
		echo "<script>alert('Data tidak boleh kosong'); window.location = '$admin_url'+'adminweb.php?module=tambah_kota';</script>";
	}else{
	$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_kota (nama_kota) VALUES ('$namaKota')");

		if ($querySimpan) {
			echo "<script>alert('Data Kota Berhasil dimasukkan'); window.location = '$admin_url'+'adminweb.php?module=kota';</script>";
		}else{
			echo "<script>alert('Data Kota Gagal dimasukkan'); window.location = '$admin_url'+'adminweb.php?module=tambah_kota';</script>";
		}
	}
}
 ?>
