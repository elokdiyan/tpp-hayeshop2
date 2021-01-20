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
                                        <td>Item</td>
                                        <td>Nama Produk</td>
                                        <td>Tanggal Beli</td>
                                        <td>Jumlah</td>
                                        <td>Harga</td>                            
                                    </tr>
                                    <?php 
                                    include "../lib/config.php";
                                    include "../lib/koneksi.php";
                                    $total = 0;
                                    $tgl = 0;         
                                    $tgl = date("Y-m-d",strtotime('tanggal_beli'));
                                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_pembelian, tbl_member WHERE tbl_pembelian.id_member = tbl_member.id_member AND tbl_pembelian.tanggal_beli = '$tgl' ");
                                    while ($d=mysqli_fetch_array($sql)){
                                        $idOrder = $d['id_order'];
                                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_detail_order, tbl_produk WHERE tbl_detail_order.id_order = '$idOrder' AND tbl_detail_order.id_produk = tbl_produk.id_produk ");  
                                        while ($x=mysqli_fetch_array($query)){                                                          
                                            $subtotal = $x['harga']*$x['jumlah'];                               
                                            $total += $subtotal;                                
                                            ?>
                                            <tr>
                                                <td>
                                                    <a href=""><img width="100px" height="100px" src="../admin/upload/<?php echo $x['gambar']; ?>" alt=""></a>
                                                </td>
                                                <td>
                                                    <h4><a href=""><?php echo $x['nama_produk']; ?></a></h4>
                                                </td>
                                                <td>
                                                    <p>Rp. <?php echo number_format($x['harga']); ?></p>
                                                </td>
                                                <td>
                                                    <?php echo $x['jumlah']; ?>
                                                </td>
                                                <td>
                                                    <p class="cart_total_price">Rp. <?php echo number_format($subtotal); ?></p>
                                                </td>

                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td colspan="4">&nbsp;</td>
                                            <td colspan="2">
                                                <table class="table table-condensed total-result">
                                                    <tr>
                                                       <td>Biaya Kirim</td>
                                                       <td>Status Order</td>
                                                   </tr>
                                                   <tr>
                                                    <td>Rp. <?php echo number_format($d['biaya_kirim']); ?></td>
                                                    <td>
                                                        <?php if($d['status_order']=='S'){?>
                                                            <i class="btn mb-1 btn-rounded btn-success" disabled="disabled">Selesai</i>
                                                        <?php }elseif ($d['status_order']=='K'){?>
                                                            <i class="btn mb-1 btn-rounded btn-secondary" disabled="disabled">Kirim</i>
                                                        <?php }else{ ?>
                                                            <i class="btn mb-1 btn-rounded btn-warning" disabled="disabled">Proses</i>
                                                        <?php } ?>
                                                    </td>                                    
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>                                           
                                <?php } ?>
                            </table>
                            <form class="form-horizontal" action="<?php echo $admin_url; ?>adminweb.php?module=cetak" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="tanggal_beli" value="<?php echo $tgl; ?>">    
                                <button type="submit" class="btn btn-info"><i class="fa fa-print"></i> Cetak</button>
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
     

        function cetak(){
            var printContents = document.getElementById("printArea").innerHTML;
            var original = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = original;
        }
</script>