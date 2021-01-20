<div class="content-body">

                <div class="container-fluid mt-3">
                    <section class="content">
                        <!-- Info boxes -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="active-member">
                                    <div class="table-responsive">
    					<h3 class="box-title">Data Kurir</h3>
    				</div> <!-- /.Box Header -->
    				<div class="box-body table-responsive no-padding">
    					   	<table class="table table-xs mb-0">
								<tr>
									<th>Kurir</th>
									<th style="width: 110px">Aksi</th>
								</tr>
								<?php 
									include "../lib/config.php";
									include "../lib/koneksi.php";
									$kueriKurir = mysqli_query($koneksi, "SELECT * FROM tbl_kurir");
									while ($kur = mysqli_fetch_array($kueriKurir)) {
								 ?>
								 <tr>
								 	<td><?php echo $kur['nama_kurir']; ?></td>
								 	<td>
								 		<div class="btn-group">
            <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_kurir&id_kurir=<?php echo $kur['id_kurir']; ?>" class="btn mb-1 btn-primary"><i class="fa fa-pencil"></button></i></a>
			<a href="<?php echo $admin_url; ?>module/kurir/aksi_hapus.php?id_kurir=<?php echo $kur['id_kurir']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn mb-1 btn-danger"><i class="fa fa-power-off">
            </button></i></a>
								 		</div>
								 	</td>
								 </tr>
								<?php } ?>
							</table>
    				</div> <!-- /.Box Body -->
    				<div class="box-footer">
    					<a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_kurir">
    					<button class="btn mb-1 btn-primary">Tambah Kurir</button>
    					</a>
                        </div> <!-- /.Box Footer -->
                    </div> <!-- /.Box -->
                </div>
            </div>
        </section> <!-- /.content -->
    </div>
    <!-- #/ container -->
</div>
        <!--**********************************
            Content body end
            ***********************************-->
            <!-- Main content -->
            
</div> <!-- /.content wrapper -->