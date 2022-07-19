

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
                                <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['nama']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><small class="text-muted">anggota sejak <?= date('d F Y', $user['date_created']); ?></p>

                </div>

            </div>
        </div>
								</div>
							</div>

						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->