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
                              <h3 class="box-title"> Data Kota</h3>
                              <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                  <tr>
                                    <th>Kota</th>
                                    <th style="width: 110px">Aksi</th>
                                  </tr>
                                  <?php 
                                  include "../lib/config.php";
                                  include "../lib/koneksi.php";
                                  $kueriKota = mysqli_query($koneksi, "SELECT * FROM tbl_kota");
                                  while ($kot = mysqli_fetch_array($kueriKota)) {
                                   ?>
                                   <tr>
                                    <td><?php echo $kot['nama_kota']; ?></td>
                                    <td>
                                      <div class="btn-group">
                                        <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_kota&id_kota=<?php echo $kot['id_kota']; ?>" class="btn mb-1 btn-primary"><i class="fa fa-pencil"></button></i></a>
                                        <a href="<?php echo $admin_url; ?>module/kota/aksi_hapus.php?id_kota=<?php echo $kot['id_kota']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn mb-1 btn-danger"><i class="fa fa-power-off">
                                        </button></i></a>
                                      </div>
                                    </td>
                                  </tr>
                                <?php } ?>
                              </table>
                            </div> <!-- /.Box Body -->
                          </div> <!-- /.Box Body -->

                        </div> <!-- /.Box Footer -->
                      </div> <!-- /.Box -->
                    </div>
                  </div>
                </section> <!-- /.content -->
              </div>
              <!-- #/ container -->
            </div>