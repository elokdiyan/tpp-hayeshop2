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
                                        <h3 class="box-title"> Data Biaya</h3>
                                    </div> <!-- /.Box Header -->
                                    <div class="box-body table-responsive no-padding">
                                         <table class="table table-xs mb-0">
                                                <th>Kota</th>
                                                <th>Kurir</th>
                                                <th>Biaya</th>
                                                <th>Aksi</th>
                                            </tr>
                                            <?php 
                                            include "../lib/config.php";
                                            include "../lib/koneksi.php";
                                            $kueribiaya = mysqli_query($koneksi, "SELECT * FROM tbl_biaya_kirim");
                                            while ($bia = mysqli_fetch_array($kueribiaya)) {
                                               ?>
                                               <tr>
                                                <td>
                                                   <?php
                                                   $kueriKota = mysqli_query($koneksi, "SELECT * FROM tbl_kota"); 
                                                   while ($kot = mysqli_fetch_array($kueriKota)) {
                                                    if($bia['kota'] == $kot['id_kota']){echo $kot['nama_kota'];}
                                                } ?>
                                            </td>
                                            <td>
                                               <?php
                                               $kueriKurir = mysqli_query($koneksi,"SELECT * FROM tbl_kurir");                                    
                                               while ($kur = mysqli_fetch_array($kueriKurir)) {
                                                if($bia['kurir'] == $kur['id_kurir']){echo $kur['nama_kurir'];}
                                            } ?>
                                        </td>
                                        <td><?php echo $bia['biaya']; ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_biaya&id_biaya_kirim=<?php echo $bia['id_biaya_kirim']; ?>" class="btn mb-1 btn-primary"><i class="fa fa-pencil"></button></i></a> <!-- Edit -->

                                                <a href="<?php echo $admin_url; ?>module/biaya/aksi_hapus.php?id_biaya_kirim=<?php echo $bia['id_biaya_kirim']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn mb-1 btn-danger"><i class="fa fa-power-off">
                                                </button></i></a> <!-- Hapus -->
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div> <!-- /.Box Body -->
                        <div class="box-footer">
                            <a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_biaya">
                                <button class="btn mb-1 btn-primary">Tambah biaya</button>
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