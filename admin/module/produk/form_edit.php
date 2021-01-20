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
                  <h3 class="box-title">Form Edit Produk</h3>
                </div>
<?php 
  include "../lib/config.php";
  include "../lib/koneksi.php";
  
  $idProduk = $_GET['id_produk'];
  $queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk='$idProduk'");
  $hasilQuery = mysqli_fetch_array($queryEdit);
  
  $idProduk = $hasilQuery['id_produk'];
  $idVendor = $hasilQuery['id_vendor'];
  $idKategori = $hasilQuery['id_kategori'];
  $namaProduk = $hasilQuery['nama_produk'];
  $gambar = $hasilQuery['gambar'];
  $deskripsi = $hasilQuery['deskripsi'];
  $hargaProduk = $hasilQuery['harga'];
?>
<form class="form-horizontal" action="../admin/module/produk/aksi_edit.php"  method="post" enctype="multipart/form-data">
<input type="hidden" name="id_produk" value="<?php echo $idProduk; ?>">
<div class="box-body">
  <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Toko</label>
      <div class="col-sm-10">
        <select class="form-control" name="idVendor">
            <?php
            $kueriVendor = mysqli_query($koneksi,"SELECT * FROM tbl_vendor");
            while($ven=mysqli_fetch_array($kueriVendor)){
            ?>
          <option value="<?php echo $ven['id_vendor']; ?>"
          <?php 
          if ($idVendor == $ven['id_vendor']) {
            echo 'selected';
          }
           ?>>
            <?php echo $ven['nama_store']; ?>
          </option>
            <?php } ?> 
        </select>
      </div>
    </div> <!-- /.Merek -->
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
      <div class="col-sm-10">
        <select class="form-control" name="idKategori">
            <?php
            $kueriKategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
            while ($kat=mysqli_fetch_array($kueriKategori)){  
            ?>
          <option 
          value="<?php echo $kat['id_kategori']; ?>"
          <?php 
          if ($idKategori == $kat['id_kategori']) {
            echo 'selected';
          }
           ?>>
            <?php echo $kat['nama_kategori']; ?>
          </option>
            <?php } ?>
        </select>
      </div>
    </div> <!-- /.kategori -->
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="namaProduk" name="namaProduk" placeholder="Nama Produk" value="<?php echo $namaProduk; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label" value="<?php echo $gambar; ?>">Gambar</label>
      <div class="col-sm-10">
        <img width="100px" height="100px" src="upload/<?php echo $gambar ?>">
        <input type="file" id="gambar" name="gambar">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi Produk</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="deskripsiProduk" name="deskripsiProduk" placeholder="Deskripsi Produk" value="<?php echo $deskripsi; ?>" >
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
      <div class="col-sm-10">
        <input type="text"  class="form-control" id="hargaProduk" name="hargaProduk" placeholder="Harga Produk" value="<?php echo $hargaProduk; ?>">
      </div>
    </div>
  <div class="box-footer">
    <button type="submit" class="btn btn-danger pull-right">Simpan</button>
  </div>
        </form>
    </div>
</div>
<!-- /.Box Body -->
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