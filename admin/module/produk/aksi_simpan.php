<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
  	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
  	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
 	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$nama_file = $_FILES['gambar']['name'];
	$ukuran_file = $_FILES['gambar']['size'];
	$tipe_file = $_FILES['gambar']['type'];
	$tmp_file = $_FILES['gambar']['tmp_name'];
	
	$idVendor = $_POST['idVendor'];
	$idKategori = $_POST['idKategori'];
	

	$namaProduk = trim($_POST['namaProduk']);
	$deskripsi = trim($_POST['deskripsiProduk']);
	$hargaProduk = trim($_POST['hargaProduk']);

if ($namaProduk=="") {
	echo "<script>alert('Nama Produk tidak boleh kosong'); window.location='$admin_url'+'adminweb.php?module=tambah_produk';</script>";
}elseif($deskripsi==""){
	echo "<script>alert('Deskripsi Produk tidak boleh kosong'); window.location='$admin_url'+'adminweb.php?module=tambah_produk';</script>";
}elseif ($hargaProduk=="") {
echo "<script>alert('Harga Produk tidak boleh kosong'); window.location='$admin_url'+'adminweb.php?module=tambah_produk';</script>";
}elseif (!is_numeric($hargaProduk)) {
echo "<script>alert('Harga Produk harus angka'); window.location='$admin_url'+'adminweb.php?module=tambah_produk';</script>";
}else{
	$path = "../../upload/".$nama_file;
		if ($tipe_file == "image/jpeg" || $tipe_file == "image/png") {
			if ($ukuran_file <= 1000000) {
				if (move_uploaded_file($tmp_file, $path)) {
					$querySimpan = mysqli_query($koneksi, 
						"INSERT INTO tbl_produk (id_vendor, id_kategori, nama_produk, deskripsi, harga, gambar) 
						VALUES ('$idVendor','$idKategori','$namaProduk','$deskripsi','$hargaProduk','$nama_file')" );
					echo "<script>alert('Data Produk Berhasil Masuk'); window.location='$admin_url'+'adminweb.php?module=produk';</script>";
				}else{
					echo "<script>alert('Data Produk Gagal Masuk'); window.location='$admin_url'+'adminweb.php?module=tambah_produk';</script>";
				}
			}else{
				echo "<script>alert('Data Gambar Produk Gagal dimasukkan, Ukuran melebihi 1Mb'); window.location='$admin_url'+'adminweb.php?module=tambah_produk';</script>";
			}
		}else{
			echo "<script>alert('Data Gambar Produk Gagal dimasukkan, Format tidak didukung'); window.location='$admin_url'+'adminweb.php?module=tambah_produk';</script>";
		}
	}
}
 ?>
