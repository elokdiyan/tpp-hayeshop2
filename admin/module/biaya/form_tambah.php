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
                                <h3 class="box-title">Form Tambah Biaya</h3>
                            </div>
                            <form class="form-horizontal" action="../admin/module/biaya/aksi_simpan.php"  method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Kota</label>
                                    <div class="col-sm-10">
                                      <select class="form-control" name="idKota">
                                        <?php
                                        include "../lib/koneksi.php";
                                        $kueriKota = mysqli_query($koneksi, "SELECT * FROM tbl_kota");
                                        while ($kot=mysqli_fetch_array($kueriKota)){  
                                          ?>
                                          <option value="<?php echo $kot['id_kota']; ?>">
                                            <?php echo $kot['nama_kota']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Kurir</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="idKurir">
                                <?php
                                include "../lib/koneksi.php";
                                $kueriKurir = mysqli_query($koneksi,"SELECT * FROM tbl_kurir");
                                while($kur=mysqli_fetch_array($kueriKurir)){?>
                                  <option value="<?php echo $kur['id_kurir']; ?>"><?php echo $kur['nama_kurir']; ?></option>
                              <?php } ?> 
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Biaya</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="biaya" name="biaya" placeholder="Biaya">
                  </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn mb-1 btn-primary">Simpan</button>
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