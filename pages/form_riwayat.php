<?php 
$sid = session_id();  
$idMember = $_SESSION['idMember'];
?>	
	<section id="cart_items">
		<div class="container">
			<div class="table-main table-responsive">
					<table class="table">
					<thead>
						<tr class="cart_menu">
							<td class=""><center>Tanggal Pembelian</center></td>
							<td class="description">Status Pesanan</td>
							<td class="">Detail</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							$sql = mysqli_query($koneksi, "SELECT * FROM tbl_pembelian, tbl_member WHERE tbl_pembelian.id_member = tbl_member.id_member AND tbl_pembelian.id_member = '$idMember' ");
							while ($d=mysqli_fetch_array($sql)){
						 ?>
						<tr>
							<td>
								<center><h4><?php echo $d['tanggal_beli']; ?></h4></center>
							</td>
                             <td>
                                <?php if($d['status_order']=='S'){?>
                                    <i class="">Selesai</i>
                                <?php }elseif ($d['status_order']=='K'){?>
                                    <i class="">Kirim</i>
                                <?php }else{ ?>
                                    <i class="">Proses</i>
                                <?php } ?>
                             </td>
							<td class="">
								<a class="btn btn-info" href="detail.php?id_order=<?php echo $d['id_order'] ?>"><i class="fa fa-info"></i></a>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
