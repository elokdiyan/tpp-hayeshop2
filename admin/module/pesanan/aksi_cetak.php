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
                        <div class="card-body" id="printArea">
                          <div class="active-member">
                            <div class="table-responsive">
                              <h3 class="box-title"> Data Pesanan</h3>
                              <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                  <tr>
                                    <th style="width: 150px">Tanggal Pesanan</th>
                                    <th style="width: 100px">ID Member</th>
                                    <th style="width: 110px">Username</th>  
                                    <th style="width: 110px">Biaya Kirim</th>
                                    <th style="width: 110px">Status</th>

                                  </tr>
                                  <?php 
                                  include "../lib/config.php";
                                  include "../lib/koneksi.php";
                                  if(!empty($_POST['tanggal_beli'])){
                                    $tgl_ = date("Y-m-d",strtotime('tanggal_beli'));
                                    $kueri = mysqli_query($koneksi, "SELECT * FROM tbl_pembelian o INNER JOIN tbl_member m on o.id_member = m.id_member WHERE o.tanggal_beli = '$tgl_'");
                                  }else{
                                    $kueri = mysqli_query($koneksi, "SELECT * FROM tbl_pembelian o INNER JOIN tbl_member m on o.id_member = m.id_member");
                                  }


                                  while ($r=mysqli_fetch_array($kueri)) {
                                    $idOrder = $r['id_order'];
                                    $query = mysqli_query($koneksi, "SELECT * FROM tbl_detail_order, tbl_produk WHERE tbl_detail_order.id_order = '$idOrder' AND tbl_detail_order.id_produk = tbl_produk.id_produk ");  
                                    while ($x=mysqli_fetch_array($query)){  
                                      $total = 0;       
                                      $subtotal = $x['harga']*$x['jumlah'];                               
                                      $total += $subtotal;                                                                                                                                                                                                   
                                      ?>
                                      <tr class="">
                                        <td><?php echo $r['tanggal_beli']; ?></td>
                                        <td><img width="100px" height="100px" src="../admin/upload/<?php echo $x['gambar']; ?>" alt=""></td>
                                        <td><?php echo $r['nama']; ?></td>
                                        <td>Rp.<?php echo number_format($r['biaya_kirim']); ?></td>
                                        <td><?php 
                                        $s = $r['status_order'];

                                        if ($s=="P") {
                                          ?>
                                          <span class="badge bg-purple">Proses</span>
                                        <?php }else if($s=="K"){ ?>
                                          <span class="badge bg-yellow">Dikirim</span>
                                        <?php }else{?>
                                          <span class="badge bg-green">Selesai</span>
                                        <?php } ?>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td colspan="4">&nbsp;</td>
                                      <td colspan="2">
                                        <table class="table table-condensed total-result">
                                          <tr>
                                            <td>Jumlah Barang</td>
                                            <td><?php echo $x['jumlah']; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Harga Barang</td>
                                            <td><?php echo $subtotal; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Total Bayar</td>
                                            <td><span>
                                              <?php $total_bayar = $total+$r['biaya_kirim']; echo "Rp. ".number_format($total_bayar);?>
                                            </span></td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>                     
                                  <?php }} ?>
                                </table>
                              </div>
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
            <script>
              window.print();
            </script>

            