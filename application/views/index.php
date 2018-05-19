		<!-- start banner Area -->
		<section class="banner-area relative" id="home">
			<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7 col-md-6 ">
							<h6 class="text-white ">the Royal Essence of shooting</h6>
							<h1 class="text-white text-uppercase">
								High quality camera
							</h1>
							<p class="pt-20 pb-20 text-white"></p>
							<a href="<?php echo base_url("cars"); ?>" class="primary-btn text-uppercase">See our product</a>
						</div>
					<div class="col-lg-5  col-md-6 header-right">
						<h4 class="text-white pb-30">Book Your Camera Now!</h4>
						<form class="form" role="form" autocomplete="off">
						    <div class="form-group">
						       	<div class="default-select" id="default-select">
									<select>
										<option value="" disabled selected hidden>Select Your Car</option>
										<option value="1">BMW</option>
										<option value="1">Farrari</option>
										<option value="1">Toyota</option>
									</select>
									</div>
						    </div>
						    <div class="form-group row">
						        <div class="col-md-6 wrap-left">
							       	<div class="default-select" id="default-select">
										<select>
											<option value="" disabled selected hidden>Pickup</option>
											<option value="1">Pickup One</option>
											<option value="1">Pickup Two</option>
											<option value="1">Pickup Three</option>
											<option value="1">Pickup Four</option>
										</select>
									</div>
						        </div>
						        <div class="col-md-6 wrap-right">
									<div class="input-group dates-wrap">
										<input id="datepicker" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">
										<div class="input-group-prepend">
											<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
										</div>
									</div>
						        </div>
						    </div>
						    <div class="form-group row">
						        <div class="col-md-6 wrap-left">
							       	<div class="default-select" id="default-select">
										<select>
											<option value="" disabled selected hidden>Drop off</option>
											<option value="1">Drop off One</option>
											<option value="1">Drop off Two</option>
											<option value="1">Drop off Three</option>
											<option value="1">Drop off Four</option>
										</select>
									</div>
						        </div>
						        <div class="col-md-6 wrap-right">
									<div class="input-group dates-wrap">
										<input id="datepicker2" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">
										<div class="input-group-prepend">
											<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
										</div>
									</div>
						        </div>
						    </div>
						    <div class="from-group">
						    	<input class="form-control txt-field" type="text" name="name" placeholder="Your name">
						    	<input class="form-control txt-field" type="email" name="email" placeholder="Email address">
						    	<input class="form-control txt-field" type="tel" name="phone" placeholder="Phone number">
						    </div>
						    <div class="form-group row">
						        <div class="col-md-12">
						            <button type="reset" class="btn btn-default btn-lg btn-block text-center text-uppercase">Confirm Car Booking</button>
						        </div>
						    </div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- End banner Area -->

		<!-- Start model Area -->
		<section class="model-area section-gap" id="cars">
			<div class="container">
				<div class="row d-flex justify-content-center pb-40">
					<div class="col-md-8 pb-40 header-text">
						<h1 class="text-center pb-10">Our Recent Camera</h1>
						<p class="text-center">
							With high quality camera for you to choose.
						</p>
					</div>
				</div>
				<div class="active-model-carusel">
					<?php foreach(array_slice($data,0,3) as $row) { ?>
					<div class="row align-items-center single-model item">
						<div class="col-lg-6 model-left">
							<div class="title justify-content-between d-flex">
								<h4 class="mt-20"><?php echo $row['merk'];?> <?php echo $row['seri'];?></h4>
								<h2>Rp <?php echo $row['harga'];?>k<span>/day</span></h2>
							</div>
							<p>
								<?php echo $row['deskripsi'];?>
							</p>
							<p>
								Format           : <?php echo $row['format'];?> <br>
								Resolution       : <?php echo $row['resolusi'];?> megapixel<br>
								Stocks           : <?php echo $row['stock'];?> <br>
							</p>
						</div>
						<div class="col-lg-6 model-right">
							<img class="img-fluid" src="<?php echo base_url('uploads/'. $row['gambar'] ); ?>" alt="">
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>
		<!-- End model Area -->

		<!-- Start reviews Area -->
		<section class="reviews-area section-gap" id="review">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-8 pb-40 header-text text-center">
						<h1>Feedback From Our Beloved Client</h1>
						<p class="mb-10 text-center">
							Who are in extremely love with eco friendly system.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-review">
							<h4>Cody Hines</h4>
							<p>
								Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
							</p>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-review">
							<h4>Chad Herrera</h4>
							<p>
								Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
							</p>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-review">
							<h4>Andre Gonzalez</h4>
							<p>
								Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
							</p>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End reviews Area -->


		<!-- Start callaction Area -->
		<section class="callaction-area relative section-gap">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<h1>Experience Great Support</h1>
						<p class="text-black">
							Contact us for more information. We will gladly answer all of your question.
						</p>
						<a class="callaction-btn text-uppercase" href="<?php echo base_url("contact"); ?>">Reach Our Support Team</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End callaction Area -->
