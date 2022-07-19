<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Sistem Pemesanan Obat Apotek</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?=base_url('drug/')?>css/linearicons.css">
	<link rel="stylesheet" href="<?=base_url('drug/')?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url('drug/')?>css/themify-icons.css">
	<link rel="stylesheet" href="<?=base_url('drug/')?>css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url('drug/')?>css/owl.carousel.css">
	<link rel="stylesheet" href="<?=base_url('drug/')?>css/nice-select.css">
	<link rel="stylesheet" href="<?=base_url('drug/')?>css/nouislider.min.css">
	<link rel="stylesheet" href="<?=base_url('drug/')?>css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?=base_url('drug/')?>css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?=base_url('drug/')?>css/magnific-popup.css">
	<link rel="stylesheet" href="<?=base_url('drug/')?>css/main.css">
</head>

<body style="background-color:#FFE4C4;">

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="<?=base_url('drug/')?>img/logo2.png" style="width: 90px;" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item "><a class="nav-link" href="<?= site_url('Profil/') ?> ">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="<?= site_url('Profil/biodata') ?>" class="nav-link dropdown-toggle" role="button" aria-haspopup="true"
								 aria-expanded="false">Profil</a>
								
							</li>
							<li class="nav-item submenu dropdown">
								<a href="<?= site_url('Profil/obat') ?>" class="nav-link dropdown-toggle"  role="button" aria-haspopup="true"
								 aria-expanded="false">Obat</a>
								
							</li>
							<li class="nav-item submenu dropdown">
								<a href="<?= site_url('Profil/Detail') ?>" class="nav-link dropdown-toggle"  role="button" aria-haspopup="true"
								 aria-expanded="false">Keranjang</a>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="<?= site_url('Profil/Pembelian') ?>" class="nav-link dropdown-toggle"  role="button" aria-haspopup="true"
								 aria-expanded="false">Data Pembelian </a>
							</li>
							<li class="nav-item"><a class="nav-link" href="<?=base_url('Auth/logout')?>">Logout</a></li>
						</ul>

					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->





	

