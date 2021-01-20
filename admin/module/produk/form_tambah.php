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
                              <h3 class="box-title">Form Tambah Produk</h3>
                            </div>
                            <form class="form-horizontal" action="../admin/module/produk/aksi_simpan.php"  method="post" enctype="multipart/form-data">
                              <div class="box-body">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Store</label>
                                  <div class="col-sm-10">
                                    <select class="form-control" name="idVendor">
                                      <?php
                                      include "../lib/koneksi.php";
                                      $kueriToko = mysqli_query($koneksi,"SELECT * FROM tbl_vendor");
                                      while($toko=mysqli_fetch_array($kueriToko)){?>
                                        <option value="<?php echo $toko['id_vendor']; ?>"><?php echo $toko['nama_store']; ?></option>
                                      <?php } ?> 
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
                                  <div class="col-sm-10">
                                    <select class="form-control" name="idKategori">
                                      <?php
                                      include "../lib/koneksi.php";
                                      $kueriKategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                                      while ($kat=mysqli_fetch_array($kueriKategori)){  
                                        ?>
                                        <option value="<?php echo $kat['id_kategori']; ?>">
                                          <?php echo $kat['nama_kategori']; ?>
                                        </option>
                                      <?php } ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="namaProduk" name="namaProduk" placeholder="Nama Produk">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Gambar</label>
                                  <div class="col-sm-10">
                                    <input type="file" id="gambar" name="gambar">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi Produk</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="deskripsiProduk" name="deskripsiProduk" placeholder="Deskripsi Produk">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
                                  <div class="col-sm-10">
                                    <input type="text"  class="form-control" id="hargaProduk" name="hargaProduk" placeholder="Harga Produk">
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