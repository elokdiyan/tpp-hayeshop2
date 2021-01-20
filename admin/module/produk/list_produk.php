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
                                                <h3 class="box-title"> Data Produk</h3>
                                            </div> <!-- /.Box Header -->
                                            <div class="box-body table-responsive no-padding">
                                             <table class="table table-xs mb-0">
                                                <tr>
                                                    <th>Toko</th>
                                                    <th>Produk</th>
                                                    <th width="230">Gambar</th>
                                                    <th>Deskripsi</th>
                                                    <th>Harga</th>
                                                    <th style="width: 110px">Aksi</th>
                                                </tr>
                                                <?php 
                                                include "../lib/config.php";
                                                include "../lib/koneksi.php";
                                                $kueriProduk = mysqli_query($koneksi, "SELECT * FROM tbl_produk");
                                                while ($pro = mysqli_fetch_array($kueriProduk)) {
                                                 ?>
                                                 <tr>
                                                    <td>
                                                       <?php
                                                       $kueriVendor = mysqli_query($koneksi, "SELECT * FROM tbl_vendor"); 
                                                       while ($ven = mysqli_fetch_array($kueriVendor)) {
                                                        if($pro['id_vendor'] == $ven['id_vendor']){echo $ven['nama_store'];}
                                                    } ?>
                                                </td>
                                                <td><?php echo $pro['nama_produk']; ?></td>
                                                <td><img style="object-fit: cover;" src="upload/<?php echo $pro['gambar'] ?>"></td>
                                                <td>
                                                    <?php echo $pro['deskripsi']; ?>
                                                </td>
                                                <td><?php echo $pro['harga']; ?></td>                                    
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_produk&id_produk=<?php echo $pro['id_produk']; ?>" class="btn mb-1 btn-primary"><i class="fa fa-pencil"></button></i></a> <!-- Edit -->

                                                        <a href="<?php echo $admin_url; ?>module/produk/aksi_hapus.php?id_produk=<?php echo $pro['id_produk']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn mb-1 btn-danger"><i class="fa fa-power-off">
                                                        </button></i></a> <!-- Hapus -->
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                </div> <!-- /.Box Body -->
                                <div class="box-footer">
                                    <a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_produk">
                                        <button class="btn mb-1 btn-primary">Tambah produk</button>
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