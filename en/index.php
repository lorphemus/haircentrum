<?php 
ob_start();
session_start();
include("../admin/assets/connect.php");
include("../admin/assets/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Start Meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php echo select("seo_setup", "title_en", 0); ?></title>
    <meta name="description" content="<?php echo select("seo_setup", "desc_en", 0); ?>">
    <meta name="keywords" content="<?php echo select("seo_setup", "keyw_en", 0); ?>">
    <meta name="subject" content="Hair Transplant & Beauty Center">
    <meta name="author" content="Batuhan Nihat KILIÇ | Excess Reklam">

    <meta name="robots" content="index,follow">
	<meta property="og:title" content="<?php echo select("seo_setup", "title_en", 0); ?>">
	<meta property="og:description" content="<?php echo select("seo_setup", "desc_en", 0); ?>">
	<meta property="og:url" content="http://www.haircentrum.com">
	<meta property="og:image" content="http://www.haircentrum.com/assets/img/property.jpg"/>

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
	<?php include("../assets/header_en.php"); ?>    
	<!-- Header Area End -->

	<!-- Banner Area Start -->
	<div class="banner__area" data-background="<?php echo $base_link.select("banner_settings", "pic_url", 0); ?>">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-7 col-xl-8 order-change">
					<div class="banner__area-left">
						<h1><?php echo select("banner_settings", "title_en", 0); ?></h1>
						<a href="<?php echo $base_link; ?>en/about.php" class="theme-btn">About Us</a>
					</div>
				</div>
			</div>			
		</div>
		<div class="banner__area-social">
			<ul>
				<li <?php if(empty(select("social_media", "youtube", 0))){echo 'style="display: none;"';} ?>><a href="<?php echo select("social_media", "youtube", 0); ?>" target="_blank">Youtube</a></li>
				<li <?php if(empty(select("social_media", "twitter", 0))){echo 'style="display: none;"';} ?>><a href="<?php echo select("social_media", "twitter", 0); ?>" target="_blank">Twitter</a></li>
				<li <?php if(empty(select("social_media", "facebook", 0))){echo 'style="display: none;"';} ?>><a href="<?php echo select("social_media", "facebook", 0); ?>" target="_blank">Facebook</a></li>
				<li <?php if(empty(select("social_media", "instagram", 0))){echo 'style="display: none;"';} ?>><a href="<?php echo select("social_media", "instagram", 0); ?>" target="_blank">Instagram</a></li>
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
				<?php
                $query=$db->prepare("SELECT * FROM banner_down WHERE id=?");
                $query->execute(array(1));
                $box=$query->fetch(PDO::FETCH_ASSOC);

                $query=$db->prepare("SELECT * FROM services WHERE id=:id");
                $query->execute(array('id'=>$box["box_link"]));
                $service_link=$query->fetch(PDO::FETCH_ASSOC);
                ?>
				<div class="col-xl-3 col-md-6 xl-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
						<img src="<?php echo $base_link; ?>assets/img/icon/<?php echo $box["icon"];  ?>-1.png">
							<div class="services__area-item-icon-one">
							<img src="<?php echo $base_link; ?>assets/img/icon/<?php echo $box["icon"];  ?>.png">
							</div>
						</div>
						<div class="services__area-item-content">
							<h4><a href="<?php echo $base_link; ?>services/<?=seo($service_link["service_title_en"]).'/'.$box["box_link"];?>"><?php echo $box["title_en"];  ?></a></h4>
							<p><?php echo $box["text_en"];  ?></p>
						</div>
					</div>
				</div>
				<?php
                $query=$db->prepare("SELECT * FROM banner_down WHERE id=?");
                $query->execute(array(2));
                $box=$query->fetch(PDO::FETCH_ASSOC);

                $query=$db->prepare("SELECT * FROM services WHERE id=:id");
                $query->execute(array('id'=>$box["box_link"]));
                $service_link=$query->fetch(PDO::FETCH_ASSOC);
                ?>
				<div class="col-xl-3 col-md-6 md-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="<?php echo $base_link; ?>assets/img/icon/<?php echo $box["icon"];  ?>-1.png">
							<div class="services__area-item-icon-one">
								<img src="<?php echo $base_link; ?>assets/img/icon/<?php echo $box["icon"];  ?>.png">
							</div>
						</div>
						<div class="services__area-item-content">
							<h4><a href="<?php echo $base_link; ?>services/<?=seo($service_link["service_title_en"]).'/'.$box["box_link"];?>"><?php echo $box["title_en"];  ?></a></h4>
							<p><?php echo $box["text_en"];  ?></p>
						</div>
					</div>
				</div>
				<?php
                $query=$db->prepare("SELECT * FROM banner_down WHERE id=?");
                $query->execute(array(3));
                $box=$query->fetch(PDO::FETCH_ASSOC);

                $query=$db->prepare("SELECT * FROM services WHERE id=:id");
                $query->execute(array('id'=>$box["box_link"]));
                $service_link=$query->fetch(PDO::FETCH_ASSOC);
                ?>
				<div class="col-xl-3 col-md-6 md-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="<?php echo $base_link; ?>assets/img/icon/<?php echo $box["icon"];  ?>-1.png">
							<div class="services__area-item-icon-one">
								<img src="<?php echo $base_link; ?>assets/img/icon/<?php echo $box["icon"];  ?>.png">
							</div>
						</div>
						<div class="services__area-item-content">
							<h4><a href="<?php echo $base_link; ?>services/<?=seo($service_link["service_title_en"]).'/'.$box["box_link"];?>"><?php echo $box["title_en"];  ?></a></h4>
							<p><?php echo $box["text_en"];  ?></p>
						</div>
					</div>
				</div>
				<?php
                $query=$db->prepare("SELECT * FROM banner_down WHERE id=?");
                $query->execute(array(4));
                $box=$query->fetch(PDO::FETCH_ASSOC);

                $query=$db->prepare("SELECT * FROM services WHERE id=:id");
                $query->execute(array('id'=>$box["box_link"]));
                $service_link=$query->fetch(PDO::FETCH_ASSOC);
                ?>
				<div class="col-xl-3 col-md-6">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="<?php echo $base_link; ?>assets/img/icon/<?php echo $box["icon"];  ?>-1.png">
							<div class="services__area-item-icon-one">
								<img src="<?php echo $base_link; ?>assets/img/icon/<?php echo $box["icon"];  ?>.png">
							</div>
						</div>
						<div class="services__area-item-content">
							<h4><a href="<?php echo $base_link; ?>services/<?=seo($service_link["service_title_en"]).'/'.$box["box_link"];?>"><?php echo $box["title_en"];  ?></a></h4>
							<p><?php echo $box["text_en"];  ?></p>
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
						<img class="img__full" src="<?php echo $base_link.select("video_setup", "pic_url", 0); ?>" alt="">
                        <div class="about__area-left-play-icon video video-pulse">
							<a class="video-popup" href="<?php echo select("video_setup", "video_link", 0); ?>"><i class="fas fa-play"></i></a> 
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="about__area-title">
						<span class="subtitle"><?php echo select("video_setup", "up_title_en", 0); ?></span>
						<h2><?php echo select("video_setup", "title_en", 0); ?></h2>						
						<p><?php echo select("video_setup", "text_en", 0); ?></p>
						<a class="theme-btn" href="<?php echo $base_link.select("video_setup", "button_link", 0); ?>">Continue</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About Area End -->
	
	<!-- Footer Area Start -->	
	<?php include("../assets/footer_en.php"); ?>	
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