<!--form-->
<!-- <section id="form"> -->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<div class="signup-form"><!--sign up form-->
					<h2>New User Sign Up</h2>
					<form action="aksi_daftar.php" method="post">
						<div class="mb-3">
							<label for="firstName">Nama *</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="nama lengkap" name="namalengkap">
								<div class="invalid-feedback"> Valid first name is required. </div>
							</div>
						</div>
						<div class="mb-3">
							<label for="firstName">Username *</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="name" name="username">
								<div class="invalid-feedback"> Valid first name is required. </div>
							</div>
						</div>

						<div class="mb-3">
							<label for="lastName">No Hp *</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="no_hp" name="no_hp">
								<div class="invalid-feedback"> Valid last name is required. </div>
							</div>
						</div>
						<div class="mb-3">
							<label for="lastName">Alamat *</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="alamat" name="alamat">
								<div class="invalid-feedback"> Valid last name is required. </div>
							</div>
						</div>
						<div class="mb-3">
							<label for="lastName">Kelurahan *</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="kelurahan" name="kelurahan">
								<div class="invalid-feedback"> Valid last name is required. </div>
							</div>
						</div>
						<div class="mb-3">
							<label for="lastName">Kecamatan *</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="kecamatan" name="kecamatan">
								<div class="invalid-feedback"> Valid last name is required. </div>
							</div>
						</div>
						<div class="mb-3">
							<label for="lastName">Kabupaten *</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="kabupaten" name="kabupaten">
								<div class="invalid-feedback"> Valid last name is required. </div>
							</div>
						</div>
						<div class="mb-3">
							<label for="namaKota">Kota *</label>
							<select name="idkota" class="form-control">
								<?php 
								$getKota = mysqli_query($koneksi, "SELECT * FROM tbl_kota");
								while ($itemKota = mysqli_fetch_array($getKota)) {
									?>
									<option value="<?php echo $itemKota['id_kota']; ?>" ><?php echo $itemKota['nama_kota']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="mb-3">
							<label for="lastName">Provinsi *</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="provinsi" name="provinsi">
								<div class="invalid-feedback"> Valid last name is required. </div>
							</div>
						</div>
						<div class="mb-3">
							<label for="lastName">Kode Pos *</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="kode_pos" name="kode_pos">
								<div class="invalid-feedback"> Valid last name is required. </div>
							</div>
						</div>
						<div class="mb-3">
							<label for="firstName">Email *</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="name" name="email">
								<div class="invalid-feedback"> Valid first name is required. </div>
							</div>
						</div>
						<div class="mb-3">
							<label for="firstName">Password *</label>
							<div class="input-group">
								<input type="password" class="form-control" placeholder="name" name="password">
								<div class="invalid-feedback"> Valid first name is required. </div>
							</div>
						</div>
						<button type="submit" class="btn btn-default">Signup</button>
					</form>
				</div><!--/login form-->
			</div>
		</div>
	</div>
	<!-- 	</section> -->
<!--/form-->