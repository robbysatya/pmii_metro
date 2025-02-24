<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
	<meta name="author" content="themefisher.com"> -->

	<!-- theme meta -->
	<!-- <meta name="theme-name" content="orbitor" /> -->

	<title>PMII Kota Metro | <?= $title?></title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/'); ?>images/logo_pmii.png" />

	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/bootstrap/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<!-- Icon Font Css -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/themify/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome/css/all.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/magnific-popup/dist/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/modal-video/modal-video.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/animate-css/animate.css">
	<!-- Slick Slider  CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/slick-carousel/slick/slick-theme.css">
	<!-- W3 School Element -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/frontend/style.css">

</head>

<body>
	<nav class="navbar navbar-expand-lg py-4 navigation header-padding " id="navbar">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html">
				<img src="<?= base_url('assets/'); ?>images/logo_pmii.png" alt="" class="img-fluid" style="height: 80px;">
				PMII Kota Metro
			</a>

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse text-center" id="navbarsExample09">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url()?>">Home <span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Anggota <i class="fa fa-chevron-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropdown05">
							<li><a class="dropdown-item" href="blog-sidebar.html">Struktur Organisasi</a></li>
							<li><a class="dropdown-item" href="blog-sidebar.html">Anggota Aktif</a></li>
							<li><a class="dropdown-item" href="blog-single.html">Alumni</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('berita')?>">Berita</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.html">Gallery</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.html">About</a></li>
					<li class="nav-item ml-4"><a href="<?= base_url('auth')?>" class="btn btn-solid-border d-none d-lg-block">Masuk <i class="fa fa-angle-right ml-2"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
