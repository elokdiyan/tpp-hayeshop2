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
                              <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                  <tr>
                                    <th>Nama Member</th>
                                    <th>Tanggal Pesanan</th>
                                    <th>Biaya Kirim</th>
                                    <th>Status Order</th>
                                    <th></th>
                                    <th style="width: 110px">Aksi</th>
                                  </tr>
                                  <?php 
                                  include "../lib/config.php";
                                  include "../lib/koneksi.php";
                                  $sql = mysqli_query($koneksi, "SELECT * FROM tbl_pembelian, tbl_member WHERE tbl_pembelian.id_member = tbl_member.id_member ");
                                  while ($d=mysqli_fetch_array($sql)){?>
                                   <tr>
                                    <td><?php echo $d['nama']; ?></td>
                                    <td><?php echo $d['tanggal_beli']; ?></td>
                                    <input type="hidden" value="<?php echo $d['tanggal_beli']; ?>" name="tanggal_beli">
                                    <td>Rp. <?php echo number_format($d['biaya_kirim']); ?></td>
                                    <td>
                                      <div class="disabled-button">
                                        <?php if($d['status_order']=='S'){?>
                                          <button type="button" class="btn mb-1 btn-rounded btn-success" disabled="disabled">Selesai</button>
                                        <?php }elseif ($d['status_order']=='K'){?>
                                          <button type="button" class="btn mb-1 btn-rounded btn-secondary" disabled="disabled">Kirim</button>
                                        <?php }else{ ?>
                                          <button type="button" class="btn mb-1 btn-rounded btn-warning" disabled="disabled">Proses</button>
                                        <?php } ?>
                                      </div>
                                    </td>

                                    <td>
                                      <div class="btn-group">
                                        <a href="<?php echo $admin_url; ?>adminweb.php?module=detail&id_order=<?php echo $d['id_order']; ?>">
                                         <button type="button" class="btn mb-1 btn-primary">Detail</button>
                                       </a>
                                     </div>  
                                   </td>
                                   <td>
                                    <div class="btn-group">
                                      <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_pesanan&id_order=<?php echo $d['id_order']; ?>" class="btn mb-1 btn-primary"><i class="fa fa-pencil"></button></i></a>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="btn-group">
                                      <a href="adminweb.php?module=cetak_pesanan" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button></a>
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
