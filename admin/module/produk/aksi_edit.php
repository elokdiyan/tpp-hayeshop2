<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
    echo "<center>Untuk mengakses modul, Anda harus Login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a> </center>";
}else{
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";
    
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    $idProduk = $_POST['id_produk'];
    $idVendor = $_POST['idVendor'];
    $idKategori = $_POST['idKategori'];
    

    $namaProduk = trim($_POST['namaProduk']);
    $deskripsi = trim($_POST['deskripsiProduk']);
    $hargaProduk = trim($_POST['hargaProduk']);

if ($namaProduk=="") {
    echo "<script>alert('Nama produk tidak boleh kosong'); window.location='$admin_url'+'adminweb.php?module=edit_produk&id_produk='+'$idProduk';</script>";
}elseif($deskripsi==""){
    echo "<script>alert('Deskripsi produk tidak boleh kosong'); window.location='$admin_url'+'adminweb.php?module=edit_produk&id_produk='+'$idProduk';</script>";
}elseif ($hargaProduk=="") {
    echo "<script>alert('Harga produk tidak boleh kosong'); window.location='$admin_url'+'adminweb.php?module=edit_produk&id_produk='+'$idProduk';</script>";
}elseif (!is_numeric($hargaProduk)) {
    echo "<script>alert('Harga produk harus Angka'); window.location='$admin_url'+'adminweb.php?module=edit_produk&id_produk='+'$idProduk';</script>";
}else{
    $path = "../../upload/".$nama_file;    
    if ($tipe_file == "image/jpeg" || $tipe_file == "image/png") {
        if ($ukuran_file <= 1000000) {
            if (move_uploaded_file($tmp_file, $path)) {
            $queryEdit = mysqli_query($koneksi, 
            "UPDATE tbl_produk SET
             id_vendor = '$idVendor',
             id_kategori = '$idKategori',
             nama_produk='$namaProduk', 
             deskripsi = '$deskripsi', 
             harga = '$hargaProduk', 
             gambar = '$nama_file' 
             WHERE id_produk='$idProduk'");

            if ($queryEdit) {
        echo "<script>alert('Data Produk Berhasil Diubah'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
    }else{
echo "<script>alert('Data Produk Gagal Diubah'); window.location = '$admin_url'+'adminweb.php?module=edit_produk&id_produk='+'$idProduk';</script>";
    }

            }else{
                echo "<script>alert('Data Produk Gagal Masuk'); window.location='$admin_url'+'window.location = '$admin_url'+'adminweb.php?module=edit_produk&id_produk='+'$idProduk';</script>";
            }
        }else{
            echo "<script>alert('Data Gambar Produk Gagal dimasukkan, Ukuran melebihi 1Mb'); window.location = '$admin_url'+'adminweb.php?module=edit_produk&id_produk='+'$idProduk';</script>";
        }
    }else{
        echo "<script>alert('Data Gambar Produk Gagal dimasukkan, Format tidak didukung'); window.location = '$admin_url'+'adminweb.php?module=edit_produk&id_produk='+'$idProduk';</script>";
    }
    }   
}
 ?>