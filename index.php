<?php 
ob_start();
session_start();
include("admin/assets/connect.php");
include("admin/assets/functions.php");
?>
<!DOCTYPE html>
<html lang="tr">

<head>
	<!-- Start Meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php echo select("seo_setup", "title_tr", 0); ?></title>
    <meta name="description" content="<?php echo select("seo_setup", "desc_tr", 0); ?>">
    <meta name="keywords" content="<?php echo select("seo_setup", "keyw_tr", 0); ?>">
    <meta name="subject" content="Hair Transplant & Beauty Center">
    <meta name="author" content="Batuhan Nihat KILIÇ | Excess Reklam">

    <meta name="robots" content="index,follow">
	<meta property="og:title" content="<?php echo select("seo_setup", "title_tr", 0); ?>">
	<meta property="og:description" content="<?php echo select("seo_setup", "desc_tr", 0); ?>">
	<meta property="og:url" content="https://www.haircentrum.com">
	<meta property="og:image" content="https://www.haircentrum.com/img/property.jpg"/>

	<!-- Title of Site -->
	<title>Hair Centrum - Hair Transplant & Plastic Surgery</title>
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="<?php echo $base_link; ?>assets/img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo $base_link; ?>assets/css/bootstrap.min.css">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="<?php echo $base_link; ?>assets/css/all.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="<?php echo $base_link; ?>assets/css/animate.css">
	<!-- Swiper Bundle CSS -->
	<link rel="stylesheet" href="<?php echo $base_link; ?>assets/css/swiper-bundle.min.css">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="<?php echo $base_link; ?>assets/css/magnific-popup.css">
	<!-- Mean Menu CSS -->
	<link rel="stylesheet" href="<?php echo $base_link; ?>assets/css/meanmenu.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo $base_link; ?>assets/sass/style.css"> 
</head>

<body>
	<!-- Preloader start -->
	<div class="theme-loader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!-- Preloader end -->

	<!-- Header Area Start -->
	<?php include("assets/header.php"); ?>    
	<!-- Header Area End -->

	<!-- Banner Area Start -->
	<div class="banner__area" data-background="<?php echo $base_link; ?>assets/img/banner/banner-1.jpg">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-7 col-xl-8 order-change">
					<div class="banner__area-left">
						<h1>Slogan Başlık</h1>
						<a href="#" class="theme-btn">Hakkımızda</a>
					</div>
				</div>
			</div>			
		</div>
		<div class="banner__area-social">
			<ul>
				<li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
				<li><a href="https://www.instagram.com/" target="_blank">Tnstagram</a></li>
			</ul>
		</div>
	</div>
	<!-- Banner Area End -->
	<!-- Services Area Start -->
	<div class="services__area">
		<div class="container services__area-bg">
			<div class="row align-items-end mb-60">
				<div class="col-xl-7 col-md-7 md-mb-30">
					<div class="services__area-title md-t-center">
						<span class="subtitle">Hizmetlerimiz</span>
						<h2>Slogan Başlık</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-md-6 xl-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="<?php echo $base_link; ?>assets/img/icon/services-1.png" alt="">
							<div class="services__area-item-icon-one">
								<img src="<?php echo $base_link; ?>assets/img/icon/services-11.png" alt="">
							</div>
						</div>
						<div class="services__area-item-content">
							<h4><a href="#">Saç Ekimi</a></h4>
							<p>Proin libero velit, blandit a metus  interdum ultrices enim</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 md-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="<?php echo $base_link; ?>assets/img/icon/services-2.png" alt="">
							<div class="services__area-item-icon-one">
								<img src="<?php echo $base_link; ?>assets/img/icon/services-22.png" alt="">
							</div>
						</div>
						<div class="services__area-item-content">
							<h4><a href="#">Estetik</a></h4>
							<p>Proin libero velit, blandit a metus  interdum ultrices enim</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 md-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="<?php echo $base_link; ?>assets/img/icon/services-3.png" alt="">
							<div class="services__area-item-icon-one">
								<img src="<?php echo $base_link; ?>assets/img/icon/services-33.png" alt="">
							</div>
						</div>
						<div class="services__area-item-content">
							<h4><a href="#">Diş Estetiği</a></h4>
							<p>Proin libero velit, blandit a metus  interdum ultrices enim</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="<?php echo $base_link; ?>assets/img/icon/services-4.png" alt="">
							<div class="services__area-item-icon-one">
								<img src="<?php echo $base_link; ?>assets/img/icon/services-44.png" alt="">
							</div>
						</div>
						<div class="services__area-item-content">
							<h4><a href="#">Obezite Cerrahisi</a></h4>
							<p>Proin libero velit, blandit a metus  interdum ultrices enim</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Services Area End -->
	<!-- About Area Start -->
	<div class="about__area section-padding">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 lg-mb-30">
					<div class="about__area-left">
						<img class="img__full" src="<?php echo $base_link; ?>assets/img/about/about-1.jpg" alt="">
                        <div class="about__area-left-play-icon video video-pulse">
							<a class="video-popup" href="https://www.youtube.com/watch?v=2mlugW9L3zQ"><i class="fas fa-play"></i></a> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="about__area-title">
						<span class="subtitle">Neden Hair Centrum?</span>
						<h2>Başlık</h2>						
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quis quas iste laudantium veritatis earum odit vitae amet.</p>
						<a class="theme-btn" href="#">Devam</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About Area End -->
	
	<!-- Subscribe Area Start -->	
	<div class="subscribe__area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-7 col-md-5">
					<div class="subscribe__area-title">
						<h3>Kampanyalardan haberdar olun</h3>
					</div>
				</div>
				<div class="col-xl-5 col-md-7">
					<div class="subscribe__area-subscribe">
						<form action="#">
							<input type="text" name="email" placeholder="Email Adresiniz" required="">
							<button class="theme-btn" type="submit">Gönder</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Subscribe Area End -->	
	<!-- Footer Area Start -->	
	<?php include("assets/footer.php"); ?>	
	<!-- Footer Area End -->
	<!-- Scroll Btn Start -->
	<div class="scroll-up">
		<svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /> </svg>
	</div>
	<!-- Scroll Btn End -->
	<!-- Main JS -->
	<script src="<?php echo $base_link; ?>assets/js/jquery-3.6.0.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="<?php echo $base_link; ?>assets/js/bootstrap.min.js"></script>
	<!-- Counter Up JS -->
	<script src="<?php echo $base_link; ?>assets/js/jquery.counterup.min.js"></script>
	<!-- Popper JS -->
	<script src="<?php echo $base_link; ?>assets/js/popper.min.js"></script>
	<!-- Magnific Popup JS -->
	<script src="<?php echo $base_link; ?>assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Swiper Bundle JS -->
	<script src="<?php echo $base_link; ?>assets/js/swiper-bundle.min.js"></script>
	<!-- Waypoints JS -->
	<script src="<?php echo $base_link; ?>assets/js/jquery.waypoints.min.js"></script>
	<!-- Mean Menu JS -->
	<script src="<?php echo $base_link; ?>assets/js/jquery.meanmenu.min.js"></script>
	<!-- Isotope JS -->
	<script src="<?php echo $base_link; ?>assets/js/isotope.pkgd.min.js"></script>
	<!-- Custom JS -->
	<script src="<?php echo $base_link; ?>assets/js/custom.js"></script>
</body>

</html>