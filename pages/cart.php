<?php 
$sid = session_id();  
?>	
<!-- Start Cart  -->
<div class="cart-box-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="table-main table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Images</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$sql = mysqli_query($koneksi, "SELECT * FROM tbl_order, tbl_produk WHERE tbl_order.id_session = '$sid' AND tbl_order.id_produk = tbl_produk.id_produk");
							while ($d=mysqli_fetch_array($sql)){
								$subtotal = $d['harga']*$d['jumlah'];
								?>
								<tr>
							<td class="thumbnail-img">
								<a href=""><img src="admin/upload/<?php echo $d['gambar']; ?>" alt="" width="200" height="200"></a>
							</td>
							<td class="name-pr">
								<h4><a href=""><?php echo $d['nama_produk']; ?></a></h4>
							</td>
							<td class="price-pr">
								<p>Rp. <?php echo number_format($d['harga']); ?></p>
							</td>
							<td class="quantity-box">
								<?php echo $d['jumlah']; ?>
							</td>
							<td class="total-pr">
								<p class="cart_total_price"><?php echo $subtotal; ?></p>
							</td>
							<td class="remove-pr">
								<a class="cart_quantity_delete" href="aksi_hapuscart.php?id_order=<?php echo $d['id_order'] ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
					<?php } ?>
					</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="row my-5">
				<div class="col-lg-8 col-sm-12"></div>
				<?php if (!empty($_SESSION['idMember'])) { ?>
				<div class="col-lg-4 col-sm-12">
					<div class="col-12 d-flex shopping-box"><a href="checkout.php" class="ml-auto btn hvr-hover">Checkout</a> </div>
				</div>
				 <?php }else{ ?>
				<div class="col-lg-4 col-sm-12">
					<div class="col-12 d-flex shopping-box"><a href="login.php" class="ml-auto btn hvr-hover">Login</a> </div>
				</div>
				<?php } ?>

			</div>
		</div>
    <!-- End Cart -->