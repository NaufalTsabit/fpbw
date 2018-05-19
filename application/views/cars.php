			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Camera
							</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			<!-- Start feature Area -->
			<section class="feature-area section-gap" id="service">
				<div class="container">

					<div class="row">
						<?php $no = $this->uri->segment('3') + 1;
						foreach ($files as $row) {
							$no++; ?>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4 align="center"><?php echo $row->merk;?> <?php echo $row->seri;?></h4>

								<div class="row d-flex justify-content-center">
									<img src="<?php echo base_url('uploads/'.$row->gambar); ?>" height="230" width="300">
									<a href="<?php echo base_url(''); ?>" class="genric-btn primary small">Detail</a>
								</div>
							</div>
						</div>
					<?php } ?>
						<br/>
						</div>
						<?php	echo $this->pagination->create_links();?>
					</div>
			<!-- End feature Area -->
