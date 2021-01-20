<?php 
$sid = session_id();  
$idMember = $_SESSION['idMember'];
$idOrder = $_GET['id_order'];
$sql = mysqli_query($koneksi, "SELECT * FROM tbl_pembelian WHERE id_order = '$idOrder'");
$k=mysqli_fetch_array($sql);
$biaya_kirim = $k['biaya_kirim'];
?>	
	<section id="cart_items">
		<div class="container">
			<div class="table-main table-responsive">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Nama Produk</td>
							<td class="price">Tanggal Beli</td>
							<td class="quantity">Jumlah</td>
							<td class="total">Sub Total</td>							
						</tr>
					</thead>
					<tbody>
						<?php 
							$total = 0;
                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_detail_order, tbl_produk WHERE tbl_detail_order.id_order = '$idOrder' AND tbl_detail_order.id_produk = tbl_produk.id_produk ");
								while ($x=mysqli_fetch_array($query)){
								$subtotal = $x['harga']*$x['jumlah'];								
								$total += $subtotal;
						 ?>
						<tr>
							<td class="cart_product">
								<a href=""><img width="100px" height="100px" src="admin/upload/<?php echo $x['gambar']; ?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $x['nama_produk']; ?></a></h4>
							</td>
							<td class="cart_price">
								<p>Rp. <?php echo number_format($x['harga']); ?></p>
							</td>
							<td class="cart_quantity">
								<?php echo $x['jumlah']; ?>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">Rp. <?php echo number_format($subtotal); ?></p>
							</td>
						</tr>
						<?php } ?>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Total Belanja</td>
										<td>Rp. <?php echo number_format($total); ?></td>
									</tr>
									<tr class="shipping-cost">
										<td>Biaya Kirim</td>
										<td><?php echo "Rp. ".number_format($k['biaya_kirim']);?></td>							
									</tr>
									<tr>
										<td>Total Bayar</td>
									<td><span>
									<?php $total_bayar = $total+$k['biaya_kirim']; echo "Rp. ".number_format($total_bayar);?>
									</span></td>
									</tr>
								</table>
							</td>
						</tr>											
					</tbody>
				</table>
			</div>	
		</div>
	</section> <!--/#cart_items-->
