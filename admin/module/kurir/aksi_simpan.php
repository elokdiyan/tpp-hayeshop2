<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a> </center>";
}else{ 
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$namaKurir = trim($_POST['namaKurir']);

	if ($namaKurir=="") {
			echo "<script>alert('Data tidak boleh kosong'); window.location = '$admin_url'+'adminweb.php?module=tambah_kurir';</script>";
	}else{
		$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_kurir (nama_kurir) VALUES ('$namaKurir')");
		if ($querySimpan) {
			echo "<script>alert('Data Kurir Berhasil dimasukkan'); window.location = '$admin_url'+'adminweb.php?module=kurir';</script>";
		}else{
			echo "<script>alert('Data Kurir Gagal dimasukkan'); window.location = '$admin_url'+'adminweb.php?module=tambah_kurir';</script>";
		}
	}
}
 ?>
