<!--**********************************
            Content body start
            ***********************************-->
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
    					<h3 class="box-title">Form Edit Kurir</h3>
    				</div> <!-- /.Box Header -->	
<?php 
	include "../lib/config.php";
	include "../lib/koneksi.php";
	
	$idKurir= $_GET['id_kurir'];
	$queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_kurir WHERE id_kurir='$idKurir'");

	$hasilQuery = mysqli_fetch_array($queryEdit);
	$idKurir = $hasilQuery['id_kurir'];
	$namaKurir = $hasilQuery['nama_kurir'];
?>
<form class="form-horizontal" action="../admin/module/kurir/aksi_edit.php" method="post">
<input type="hidden" name="id_kurir" value="<?php echo $idKurir; ?>">
<div class="box-body">
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Nama Kurir</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="namaKurir" name="nama_kurir" placeholder="Nama Kurir" 
			value="<?php echo $namaKurir; ?>">
		</div>
	</div>
</div>	 <!-- .box-body -->
<div class="box-footer">
	<button type="submit" class="btn btn-danger pull-right">Simpan</button>
</div>
                          </form>
                        </div>
                      </div>
                      <!-- /.Box Body -->
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