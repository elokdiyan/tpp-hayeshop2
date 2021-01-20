<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
    echo "<center>Untuk mengakses modul, Anda harus Login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idBiaya = $_POST['id_biaya_kirim'];
    $idKota = $_POST['idKota'];
    $idKurir = $_POST['idKurir'];
	$biaya = trim($_POST['biaya']);

	if ($biaya=="") {
                echo "<script>alert('Data biaya tidak boleh kosong'); window.location='$admin_url'+'adminweb.php?module=edit_biaya&id_biaya_kirim='+$idBiaya;</script>";
	}elseif (!is_numeric($biaya)){
                echo "<script>alert('Data biaya harus angka'); window.location='$admin_url'+'adminweb.php?module=edit_biaya&id_biaya_kirim='+$idBiaya;</script>";
	}else{

    $queryEdit = mysqli_query($koneksi, 
                    "UPDATE tbl_biaya_kirim SET 
                    kota = '$idKota', 
                    kurir = '$idKurir', 
                    biaya = '$biaya' 
                    WHERE id_biaya_kirim = '$idBiaya' " );
            if($queryEdit){
                echo "<script>alert('Data Biaya Berhasil Diubah'); window.location='$admin_url'+'adminweb.php?module=biaya';</script>";
            }else{
                echo "<script>alert('Data Biaya Gagal Diubah'); window.location='$admin_url'+'adminweb.php?module=edit_biaya&id_biaya_kirim='+$idBiaya;</script>";
            }
	}
}
 ?>