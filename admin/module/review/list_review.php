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
                                               <table class="table table-xs mb-0">
                                                <tr>
                                                    <th>Kategori</th>
                                                    <th>Merek</th>
                                                    <th>Nama</th>
                                                    <th>Username</th>
                                                    <th>Review</th>
                                                    <?php 
                                                    include "../lib/config.php";
                                                    include "../lib/koneksi.php";
                                                    $kueriReview = mysqli_query($koneksi, "SELECT * FROM tb_review");
                                                    while ($rev = mysqli_fetch_array($kueriReview)) {
                                                       ?>
                                                       <tr>
                                                        <td><?php echo $rev['id_kategori']; ?></td>
                                                        <td>
                                                            <?php echo $rev['id_merek']; ?>
                                                        </td>
                                                        <td><?php echo $rev['nama']; ?></td>
                                                        <td><?php echo $rev['username']; ?></td>
                                                        <td><?php echo $rev['review']; ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                        </div> <!-- /.Box Body -->
                                       
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