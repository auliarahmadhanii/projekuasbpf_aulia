<br>
<br>
<br>
<br>
<br>

<!-- start product Area -->
<section >
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Katalog Obat</h1>

						</div>
					</div>
				</div>
				<div class="row">

                <?php $i = 1; ?>
        <?php foreach ($obat as $us) : ?>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?= base_url('assets/img/obat/') . $us['gambar']; ?>" alt="">
							<div class="product-details">
								<h6><?= $us['nama_obat'] ?></h6>
								<div class="price">
									<h6>Rp.<?= $us['harga_obat'] ?></h6>
									<h6 >Stok: <?= $us['stok_obat'] ?></h6>
								</div>
								<div class="prd-bottom">

									<a href="<?= base_url('Profil/keranjang/') . $us['id'] ?>" class="social-info">

                                    <span class="ti-bag"></span>

										<p class="hover-text">add to bag</p>

									</a>
								
								</div>
							</div>

						</div>

					</div>
                    <?php endforeach ?>
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->
