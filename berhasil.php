<?php 
include "lib/koneksi.php";
session_start();
function isi_keranjang(){
	include "lib/koneksi.php";
	$isicart = array();
	$sid = session_id();
	$q = mysqli_query($koneksi, "SELECT * FROM tbl_order WHERE id_session='$sid'");
	while($r=mysqli_fetch_array($q)){
		$isicart[]=$r;
	}
	return $isicart;
}

$idMember = $_SESSION['idMember'];
$tanggal_beli = date("Y-m-d");
$status = 'P';
$biaya_kirim = $_SESSION['biaya_kirim'];

mysqli_query($koneksi, "INSERT INTO tbl_pembelian (id_member, tanggal_beli, status_order, biaya_kirim) 
	values ('$idMember','$tanggal_beli','$status','$biaya_kirim')");

$id_order = mysqli_insert_id($koneksi);

$isiKeranjang = isi_keranjang();
$jml = count($isiKeranjang);

for($i=0; $i<$jml; $i++){
mysqli_query($koneksi, "INSERT INTO tbl_detail_order (id_order, id_produk, jumlah, harga) values ('$id_order',{$isiKeranjang[$i]['id_produk']},{$isiKeranjang[$i]['jumlah']},{$isiKeranjang[$i]['harga']})");

mysqli_query($koneksi, "DELETE FROM tbl_order WHERE id_order='{$isiKeranjang[$i]['id_order']}' AND id_session='{$isiKeranjang[$i]['id_session']}'");
}

header("location:index.php");
 ?>

