<?php 
session_start();
	include "lib/config.php";
	include "lib/koneksi.php";
	
	$idPesanan = $_GET['id_order'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_order  WHERE id_order='$idPesanan'");

	if ($queryHapus) {
		echo "<script>window.location = 'keranjang.php';</script>";
	}else{
		echo "<script>alert('Data Gagal Dihapus'); window.location = 'index.php';</script>";
	
}
 ?>
