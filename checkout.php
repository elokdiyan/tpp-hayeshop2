<?php 
include "template/header.php";
if(!empty($_SESSION['idMember'])){
include "pages/cekorder.php";
include "template/footer.php";
}else{
	echo "<script>alert('Login Dulu'); window.location='$base_url'+'login.php';</script>";
}
 ?>
