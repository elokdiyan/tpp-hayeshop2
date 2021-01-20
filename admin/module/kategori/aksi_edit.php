<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a> </center>";
}else{
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
	
	$idKategori = $_POST['id_kategori'];
	$namaKategori = trim($_POST['nama_kategori']);
	if ($namaKategori == "") {
		echo "<script>alert('Data tidak boleh kosong'); window.location = '$admin_url'+'adminweb.php?module=edit_kategori&id_kategori='+'$idKategori';</script>";	
	}else{
	$queryEdit = mysqli_query($koneksi, "UPDATE tbl_kategori SET nama_kategori='$namaKategori' WHERE id_kategori='$idKategori'");

		if ($queryEdit) {
			echo "<script>alert('Data Kategori Berhasil Diubah'); window.location = '$admin_url'+'adminweb.php?module=kategori';</script>";
		}else{
				echo "<script>alert('Data Kategori Gagal Diubah'); window.location = '$admin_url'+'adminweb.php?module=edit_kategori&id_kategori='+'$idKategori';</script>";
		}
	}
}
?>
