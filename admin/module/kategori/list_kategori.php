<!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

                <div class="container-fluid mt-3">
                    <section class="content">
                        <!-- Info boxes -->
                        <div class="row">
                          <div class="col-xs-12">
                             <div class="box box-info">
                                <div class="box-header">
                                   <h3 class="box-title">Data Kategori</h3>
                                   <div class="box-tools">
                                      <div class="input-group" style="width : 150px;">
                                         <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                                         <div class="input-group-btn">
                                            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /.Box Header -->
                            <div class="box-body table-responsive no-padding">
                               <table class="table table-hover">
                                  <tr>
                                     <th>Kategori</th>
                                     <th style="width: 110px">Aksi</th>
                                 </tr>
                                 <?php 
                                 include "../lib/config.php";
                                 include "../lib/koneksi.php";
                                 $kueriKategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                                 while ($kat = mysqli_fetch_array($kueriKategori)) {
                                     ?>
                                     <tr>
                                        <td><?php echo $kat['nama_kategori']; ?></td>
                                        <td>
                                           <div class="btn-group">
                                              <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_kategori&id_kategori=<?php echo $kat['id_kategori']; ?>" class="btn btn-warning"><i class="fa fa-pencil"></button></i></a>
                                              <a href="<?php echo $admin_url; ?>module/kategori/aksi_hapus.php?id_kategori=<?php echo $kat['id_kategori']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="fa fa-power-off">
                                              </button></i></a>
                                          </div>
                                      </td>
                                  </tr>
                              <?php } ?>
                          </table>
                      </div> <!-- /.Box Body -->
                      <div class="box-footer">
                        <a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_kategori">
                           <button class="btn btn-warning">Tambah Kategori</button>
                       </a>
                   </div> <!-- /.Box Footer -->
               </div> <!-- /.Box -->
           </section> <!-- /.content -->
       </div>
   </div>
</section>
</div>
</div></