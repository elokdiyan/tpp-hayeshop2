<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
	
	$idKurir = $_GET['id_kurir'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_kurir  WHERE id_kurir='$idKurir'");

	if ($queryHapus) {
		echo "<script>alert('Data Kurir Berhasil Dihapus'); window.location = '$admin_url'+'adminweb.php?module=kurir';</script>";
	}else{
		echo "<script>alert('Data Kurir Gagal Dihapus'); window.location = '$admin_url'+'adminweb.php?module=$idKurir';</script>";
	}
}
 ?>
