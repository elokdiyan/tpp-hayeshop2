<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
  	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
  	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
 	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idKota = $_POST['idKota'];
	$idKurir = $_POST['idKurir'];
	$biaya = trim($_POST['biaya']);

	if ($biaya=="") {
				echo "<script>alert('Data tidak boleh kosong'); window.location='$admin_url'+'adminweb.php?module=tambah_biaya';</script>";	
	}elseif (!is_numeric($biaya)){
				echo "<script>alert('Data biaya harus angka'); window.location='$admin_url'+'adminweb.php?module=tambah_biaya';</script>";		    
	}else{
	$querySimpan = mysqli_query($koneksi, 
					"INSERT INTO tbl_biaya_kirim (kota, kurir, biaya) 
					VALUES ('$idKota','$idKurir','$biaya')" );
			if($querySimpan){
				echo "<script>alert('Data Biaya Berhasil Masuk'); window.location='$admin_url'+'adminweb.php?module=biaya';</script>";
			}else{
				echo "<script>alert('Data Biaya Gagal Masuk'); window.location='$admin_url'+'adminweb.php?module=tambah_biaya';</script>";
			}
	}
}
 ?>