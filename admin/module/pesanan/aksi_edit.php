<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
    echo "<center>Untuk mengakses modul, Anda harus Login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a> </center>";
}else{
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";
    
    $id_order = $_POST['id_order'];
    $status_order = $_POST['status_order'];

    $queryEdit = mysqli_query($koneksi, "UPDATE tbl_pembelian SET status_order='$status_order' WHERE id_order='$id_order'");

        if ($queryEdit) {
            echo "<script>alert('Data Berhasil Diubah'); window.location = '$admin_url'+'adminweb.php?module=pesanan';</script>";
        }else{
            echo "<script>alert('Data Gagal Diubah'); window.location = '$admin_url'+'adminweb.php?module=pesanan';</script>";
        }
    
}
?>
