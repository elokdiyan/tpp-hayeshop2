<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a> </center>";
}else{
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$namaKategori = trim($_POST['namaKategori']);
	if ($namaKategori == "") {
		echo "<script>alert('Data tidak boleh kosong'); window.location = '$admin_url'+'adminweb.php?module=tambah_kategori';</script>";
	}else{
		$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_kategori (nama_kategori) VALUES ('$namaKategori')");

		if ($querySimpan) {
			echo "<script>alert('Data Kategori Berhasil dimasukkan'); window.location = '$admin_url'+'adminweb.php?module=kategori';</script>";
		}else{
			echo "<script>alert('Data Kategori Gagal dimasukkan'); window.location = '$admin_url'+'adminweb.php?module=tambah_kategori';</script>";
		}
	}
}
 ?>
