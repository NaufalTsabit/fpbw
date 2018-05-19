<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/fav.png'); ?>">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/icon.png'); ?>">
	<title>Konsep Studio</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/linearicons.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css'); ?>">
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
	</head>
	<body>

		  <header id="header" id="home">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/img/newlogo.png'); ?>" height="30" width="198"/></a>
			      </div>
			      <nav id="nav-menu-container">
							<?php if($this->session->userdata('status') == "login"){ ?>
							<ul class="nav-menu">
			          <li class="menu-active"><a href="<?php echo base_url("datakamera")?>">Data Kamera</a></li>
			          <li><a href="<?php echo base_url("admin"); ?>">Gallery</a></li>
			          <!-- <li><a href="<?php echo base_url()."index.php/Welcome/pages/"."blog-home"; ?>">Blog</a></li> -->
								<li class="menu-has-children"><a href=""><?php echo $this->session->userdata("nama"); ?></a>
									<ul>
										<li><a href="<?php echo base_url("changepass"); ?>">Change Password</a></li>
										<li><a href="<?php echo base_url("Logout"); ?>">Logout</a></li>
									</ul>
			          <!-- <li><a href="<?php echo base_url("Logout"); ?>"><?php echo $this->session->userdata("nama"); ?></a></li> -->
			          <!-- <li class="menu-has-children"><a href="">Pages</a>
			            <ul>
			              <li><a href="blog-single.html">Blog Single</a></li>
			              <li><a href="elements.html">Elements</a></li>
			            </ul>
			          </li> -->
			        </ul>
						<?php } else { ?>
			        <ul class="nav-menu">
			          <li class="menu-active"><a href="<?php echo base_url()?>">Home</a></li>
			          <li><a href="<?php echo base_url("camera"); ?>">Camera</a></li>
			          <li><a href="<?php echo base_url("gallery"); ?>">Gallery</a></li>
			          <!-- <li><a href="<?php echo base_url()."index.php/Welcome/pages/"."blog-home"; ?>">Blog</a></li> -->
			          <li><a href="<?php echo base_url("contact"); ?>">Contact</a></li>
			          <!-- <li class="menu-has-children"><a href="">Pages</a>
			            <ul>
			              <li><a href="blog-single.html">Blog Single</a></li>
			              <li><a href="elements.html">Elements</a></li>
			            </ul>
			          </li> -->
			        </ul>
						<?php } ?>
			      </nav><!-- #nav-menu-container -->
		    	</div>
		    </div>
		  </header><!-- #header -->
