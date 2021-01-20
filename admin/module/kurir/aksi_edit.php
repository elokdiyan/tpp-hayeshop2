<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a> </center>";
}else{
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
	
	$idKurir = $_POST['id_kurir'];
	$namaKurir = trim($_POST['nama_kurir']);
	
	if($namaKurir==""){
	    echo "<script>alert('Data tidak boleh kosong'); window.location = '$admin_url'+'adminweb.php?module=edit_kurir&id_kurir='+'$idKurir';</script>";
	}else{
$queryEdit = mysqli_query($koneksi, "UPDATE tbl_kurir SET nama_kurir='$namaKurir' WHERE id_kurir='$idKurir'");
    	if ($queryEdit) {
    	echo "<script>alert('Data Kurir Berhasil Diubah'); window.location = '$admin_url'+'adminweb.php?module=kurir';</script>";
    	}else{
    			echo "<script>alert('Data Kurir Gagal Diubah'); window.location = '$admin_url'+'adminweb.php?module=edit_kurir&id_kurir='+'$idKurir';</script>";
    	}
	}
}
 ?>
