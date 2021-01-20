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
                              <h3 class="box-title">Form Edit Pesanan</h3>
                            </div>
                            <?php 
                            include "../lib/config.php";
                            include "../lib/koneksi.php";
                            
                            $idOrder = $_GET['id_order'];
                            $queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_pembelian WHERE id_order
                              ='$idOrder'");
                            $hasilQuery = mysqli_fetch_array($queryEdit);
                            $idOrder = $hasilQuery['id_order'];
                            $status_order = $hasilQuery['status_order'];

                            ?>
                            <form class="form-horizontal" action="../admin/module/pesanan/aksi_edit.php"  method="post" enctype="multipart/form-data">
                              <input type="hidden" name="id_order" value="<?php echo $idOrder; ?>">
                              <div class="box-body">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Status Transaksi</label>
                                  <div class="col-sm-10">
                                    <select class="form-control" name="status_order">
                                      <option value="P" <?php echo ($status_order == 'P') ? "selected": ""; ?>>Proses</option>
                                      <option value="K" <?php echo ($status_order == 'K') ? "selected": ""; ?>>Kirim</option>
                                      <option value="S" <?php echo ($status_order == 'S') ? "selected": ""; ?>>Selesai</option>
                                    </select>             
                                  </div>
                                </div> <!-- /.kategori -->

                                
                                <div class="box-footer">
                                  <button type="submit" class="btn btn-danger pull-right">Simpan</button>
                                </div>
                              </form>
                            </div>
                          </div>
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
            
</div> <!-- /.content wrapper -->