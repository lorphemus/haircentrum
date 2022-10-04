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
    <title><?php echo select("seo_setup", "title_tr", 0); ?> | Galeri</title>
    <meta name="description" content="<?php echo select("seo_setup", "desc_tr", 0); ?>">
    <meta name="keywords" content="<?php echo select("seo_setup", "keyw_tr", 0); ?>">
    <meta name="subject" content="Hair Transplant & Beauty Center">
    <meta name="author" content="Batuhan Nihat KILIÇ | Excess Reklam">

    <meta name="robots" content="index,follow">
	<meta property="og:title" content="<?php echo select("seo_setup", "title_tr", 0); ?>">
	<meta property="og:description" content="<?php echo select("seo_setup", "desc_tr", 0); ?>">
	<meta property="og:url" content="https://www.haircentrum.com">
	<meta property="og:image" content="https://www.haircentrum.com/img/property.jpg"/>

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
	<!-- Fancybox CSS -->
	<link rel="stylesheet" href="<?php echo $base_link; ?>assets/css/fancybox.min.css">
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
	<!-- Page Banner Area Start -->
    <div class="page__banner" data-background="<?php echo $base_link.select("gallery_bg", "pic_url", 0); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-title">
                        <h1>Resim Galeri</h1>
                        <div class="page__banner-title-menu">
                            <ul>
                                <li><a href="<?php echo $base_link; ?>index.php">Anasayfa</a></li>
                                <li><span> | </span>Resim Galeri</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Page Banner Area End -->
	<!-- Gallery Area Start -->
    <div class="gallery__area section-padding">
        <div class="container">
            <div class="row">
				<?php 
				$query=$db->prepare("SELECT * FROM gallery ORDER BY id ASC");
				$query->execute();
				$pics=$query->fetchAll();
				foreach($pics as $pic){
				?>
				<div class="col-xl-4 col-lg-4 col-md-6 mb-30" style="float: left;">
                    <div class="gallery__area-item">
                        <div class="gallery__area-item-image">
                            <img src="<?php echo $pic["pic_url"]; ?>" alt="">
                            <div class="gallery__area-item-image-icon">
                                <a data-fancybox="gallery" href="<?php echo $pic["pic_url"]; ?>"><i class="fal fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
				<?php } ?>
            </div>
        </div>
    </div>
	<!-- Gallery Area End -->
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
	<!-- Fancybox JS -->
	<script src="<?php echo $base_link; ?>assets/js/jquery.fancybox.min.js"></script>
	<!-- Isotope JS -->
	<script src="<?php echo $base_link; ?>assets/js/isotope.pkgd.min.js"></script>
	<!-- Custom JS -->
	<script src="<?php echo $base_link; ?>assets/js/custom.js"></script>
</body>

</html>