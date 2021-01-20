<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Shop</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->
<!-- Start Shop Page  -->
<div class="shop-box-inner">
    <div class="right-product-box">
        <div class="container">
            <div class="row">
                <?php 
                $q = mysqli_query($koneksi, "SELECT * FROM tbl_produk order by id_produk");
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
                            <h4>Rp <?php echo number_format($r['harga']) ?></h4>
                            <h4><?php echo $r['nama_produk'] ?></h54>
                        </div>
                    </div>
                <?php } ?> 
            </div>
        </div>
    </div>
</div>