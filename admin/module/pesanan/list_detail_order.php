 <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

              <div class="container-fluid mt-3">
                <!-- Main content -->
                <section class="content">
                  <!-- Info boxes -->
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="active-member">
                            <div class="table-responsive">
                              <h3 class="box-title"> Data Pesanan</h3>
                              <div class="box-tools">
                                <div class="input-group" style="width : 150px;">
                                  <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                                  <div class="input-group-btn">
                                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                  </div>
                                </div>
                              </div>
                              <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>Nama Pembeli</th>
                              <th>Tanggal Order</th>
                              <th>Jumlah</th> 
                              <th>Harga</th>
                              <th> </th>
                            </tr>
                            <?php 
                            include "../lib/config.php";
                            include "../lib/koneksi.php";
                            $id_order = $_GET['id_order'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM tbl_detail_order, tbl_produk WHERE tbl_detail_order.id_order = '$id_order' AND tbl_detail_order.id_produk = tbl_produk.id_produk");
                            while ($d=mysqli_fetch_array($sql)){
                             ?>
                             <tr>
                              <td>
                                <img width="100px" height="100px" src="upload/<?php echo $d['gambar']; ?>" >
                              </td>
                              <td>
                               <?php echo $d['nama_produk']; ?>
                             </td>
                             <td>
                               <?php echo $d['jumlah']; ?>
                             </td>
                             <td>
                               <?php echo $d['harga']; ?>
                             </td>
                           </tr> 
                         <?php } ?>
                       </table>
                            </div> <!-- /.Box Body -->
                            
                          </div> <!-- /.Box Footer -->

                          <div class="box-footer">
                      <a href="<?php echo $base_url; ?>admin/adminweb.php?module=pesanan">
                        <button class="btn mb-1 btn-primary">Kembali</button>
                      </a>
                    </div>
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
