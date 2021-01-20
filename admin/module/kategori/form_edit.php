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
                       <h3 class="box-title">Form Edit Kategori</h3>
                     </div> <!-- /.Box Header --> 
                     <?php 
                     include "../lib/config.php";
                     include "../lib/koneksi.php";
                     
                     $idKategori = $_GET['id_kategori'];
                     $queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_kategori WHERE id_kategori='$idKategori'");

                     $hasilQuery = mysqli_fetch_array($queryEdit);
                     $idKategori = $hasilQuery['id_kategori'];
                     $namaKategori = $hasilQuery['nama_kategori'];
                     ?>
                     <form class="form-horizontal" action="../admin/module/kategori/aksi_edit.php" method="post">
                      <input type="hidden" name="id_kategori" value="<?php echo $idKategori; ?>">
                      <div class="box-body">
                       <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nama Kategori</label>
                        <div class="col-sm-10">
                         <input type="text" class="form-control" id="namaKategori" name="nama_kategori" placeholder="Nama Kategori" 
                         value="<?php echo $namaKategori; ?>">
                       </div>
                     </div>
                   </div>  <!-- .box-body -->
                   <div class="box-footer">
                     <button type="submit" class="btn btn-danger pull-right">Simpan</button>
                   </div> <!-- .box-body -->
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