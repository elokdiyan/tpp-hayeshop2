<?php 
session_start();
$sid = session_id();

include "lib/koneksi.php";
$id_pro = $_GET['id_produk'];
$h = $_GET['harga'];
$tanggal = date("Y-m-d");

$sql = mysqli_query($koneksi, "SELECT id_produk FROM tbl_order WHERE id_produk = '$id_pro' AND id_session='$sid' ");
$ketemu = mysqli_num_rows($sql);

if($ketemu==0){
	mysqli_query($koneksi, 
		"INSERT INTO tbl_order (status_order, id_produk, jumlah, harga, id_session) VALUES ('P','$id_pro',1,'$h','$sid')");
}else{
	mysqli_query($koneksi, 
		"UPDATE tbl_order SET jumlah = jumlah+1 WHERE id_session='$sid' AND id_produk='$id_pro'");
}
header('location:index.php');
 ?>
