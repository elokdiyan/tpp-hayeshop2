<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a> </center>";
}else{
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
	
	$idKota = $_POST['id_kota'];
	$namaKota = trim($_POST['nama_kota']);
	if ($namaKota == "") {
		echo "<script>alert('Data tidak boleh kosong'); window.location = '$admin_url'+'adminweb.php?module=edit_kota&id_kota='+'$idKota';</script>";
	}else{

	$queryEdit = mysqli_query($koneksi, "UPDATE tbl_kota SET nama_kota='$namaKota' WHERE id_kota='$idKota'");

		if ($queryEdit) {
		echo "<script>alert('Data Kota Berhasil Diubah'); window.location = '$admin_url'+'adminweb.php?module=kota';</script>";
		}else{
		echo "<script>alert('Data Kota Gagal Diubah'); window.location = '$admin_url'+'adminweb.php?module=edit_kota&id_kota='+'$idKota';</script>";
		}
	}
}
 ?>
