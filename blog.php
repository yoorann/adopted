<div class="container">
	<div class="row">
		<div class="col-sm-9">
			<div class="blog-post-area">
				<div class="single-blog-post">
					<h1>Tentang Kami</h1>
					</div>
					<br>
					<div class="single-blog-post">
						<h4>Kami menyediakan pengadopsian Hewan pada kamu yang penyayang binatang.</h4>
						<p>caranya mudah untuk mengadopsi hewan, kamu tinggal tambahkan hewan yang ingin diaposi, dan kamu hanya membayar setiap jenis hewan untuk berdonasi.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="blog-post-area">
					<div class="single-blog-post">
						<h2 class="text-center">Total Donasi :</h2>
						</div>
						<br>
						<div class="single-blog-post">
							
						</div>
					</div>
				</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<?php 
			$cek = mysql_query("SELECT * FROM hewan");
			if (mysql_num_rows($cek) < 1) {
			?>
			<div class="col-sm-9">
				<div class="features_items"><!--features_items-->
			
				</div>
			</div>	
			<?php
			}elseif (mysql_num_rows($cek) > 1) { 
				?>
					<div class="col-sm-9">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">A d o p t &nbsp;&nbsp; M e</h2>
						<?php 
							$hewan = mysql_query("SELECT * FROM hewan");
							while ($a = mysql_fetch_array($hewan)) {
							extract($a);
						 ?>
						 <form action="action/cart.php" method="post" enctype="multipart/form-data"></form>
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="bismillah-admin/production/images/pet/<?php echo $image;?>" alt="" />
										<img hidden src="bismillah-admin/production/images/pet/<?php echo $image;?>" alt="" />
										<h3><?php echo $jenis_hewan." ".$ras; ?></h3>
										<input type="text" name="<?php echo $jenis_hewan; ?>" hidden>
										<input type="text" name="<?php echo $ras; ?>" hidden>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-check-square-o"></i>Adopsi aku</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<?php 
											$user = mysql_query("SELECT * FROM user");
												$b = mysql_fetch_array($user);
											 ?>
											<p>Deskripsi </p>
											<p>Umur : <?php echo $umur; ?></p>
											<input type="text" name="<?php echo $umur; ?>" hidden>
											<p>Jenis Kelamin : <?php echo $jenis_kelamin; ?></p>
											<input type="text" name="<?php echo $jenis_kelamin; ?>" hidden>
											<p>Kelebihan Kekurangan : </p>
											<p><?php echo $deskripsi; ?></p>
											<input type="text" name="<?php echo $deskripsi; ?>" hidden>
											<input type="text" name="<?php echo $harga; ?>" hidden>
											<div class="text-center">
												<a href="index.php?p=add&id=<?php echo $id;?>" class="btn btn-default add-to-cart">Adopsi aku...</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
			<?php
				}
			}
		 ?>
		
	</div>
</div>