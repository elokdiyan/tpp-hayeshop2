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
                                    <div class="card-body">
                                        <div class="active-member">
                                            <div class="table-responsive">
                                                <h3 class="box-title">Data Admin</h3>
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

                                                        <th>Nama Admin</th>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                    </tr>
                                                    <?php 
                                                    include "../lib/config.php";
                                                    include "../lib/koneksi.php";
                                                    $QueryKategori = mysqli_query($koneksi, "SELECT * FROM tbl_admin");
                                                    while ($row = mysqli_fetch_array($QueryKategori)) {
                                                       ?>
                                                       <tr>
                                                        <td><?= $row['nama']; ?></td>
                                                        <td><?= $row['username']; ?></td>
                                                        <td><?= $row['email']; ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </table>
                                        </div> <!-- /.Box Body -->
                                        <div class="box-footer">

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