<div class="shop-detail-box-main">
    <div class="container">
        <div class="row">
            <?php 
            $idProduk = $_GET['id_produk'];
            $q = mysqli_query($koneksi, "SELECT * FROM tbl_produk where id_produk = '$idProduk'");
            while($r=mysqli_fetch_array($q)){ ?>
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img class="d-block w-100" src="admin/upload/<?php echo $r['gambar'] ?>" alt="" width="400" height="400" /> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2><?php echo $r['nama_produk'] ?></h2>
                        <h4> <?php$kueriProduk = mysqli_query($koneksi, "SELECT * FROM tbl_produk");
                        while ($pro = mysqli_fetch_array($kueriProduk)) {
                            $kueriVendor = mysqli_query($koneksi, "SELECT * FROM tbl_vendor"); 
                            while ($ven = mysqli_fetch_array($kueriVendor)) {
                                if($pro['id_vendor'] == $ven['id_vendor']){echo $ven['nama_store'];}
                            } ?><a href="toko.php?id_vendor=<?php echo $r['id_vendor'] ?>">Lihat Toko</h4>
                                <h4>Rp <?php echo number_format($r['harga']) ?></h4>
                                <p>
                                    <h4>Short Description:</h4>
                                    <p><?php echo $r['deskripsi'] ?></p>
                                </p>
                                <div class="price-box-bar">
                                    <div class="cart-and-bay-btn">
                                        <a class="btn hvr-hover" data-fancybox-close="" href="aksi_keranjang.php?id_produk=<?php echo $r['id_produk'] ?>&harga=<?php echo $r['harga'] ?>">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?> 
                </div>
            </div>
        </div>

        <div class="shop-box-inner">
            <div class="right-product-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-all text-center">
                                <h1>PRODUCT</h1>
                            </div>
                        </div>
                        <?php 
                        $q = mysqli_query($koneksi, "SELECT * FROM tbl_produk order by id_produk desc limit 8 ");
                        while($r=mysqli_fetch_array($q)){ ?>
                            <div class="col-lg-3 col-md-6 mb-3 mt-1">
                                <div class="products-single fix">
                                    <div class="box-img-hover">
                                        <img src="admin/upload/<?php echo $r['gambar'] ?>" alt="" width="200" height="200" />
                                    </div>
                                    <div class="mask-icon">
                                        <ul>
                                         <li><a href="details.php?id_produk=<?php echo $r['id_produk'] ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                     </ul>
                                     <a class="cart" href="aksi_keranjang.php?id_produk=<?php echo $r['id_produk'] ?>&harga=<?php echo $r['harga'] ?>">Add to Cart</a>
                                 </div>
                             </div>
                             <div class="why-text">
                                <h4>Rp. <?php echo number_format($r['harga']) ?></h4>
                                <h4><?php echo $r['nama_produk'] ?></h4>
                            </div>
                        </div>
                    <?php } ?> 
                </div>
            </div>
            <div class="col-lg-12 shopping-box"> 
                <div class="text-center">
                    <a href="produk_list.php" class="ml-auto btn hvr-hover"> All Product </a> 
                </div>
            </div>
        </div>
    </div>