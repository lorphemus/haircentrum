<?php 
ob_start();
session_start();
include("../admin/assets/connect.php");
include("../admin/assets/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MRZLHM4');</script>
	<!-- End Google Tag Manager -->

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-WWSBQLJ77E"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-WWSBQLJ77E');
	</script>

	<!-- Meta Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '800698274382211');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=800698274382211&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Meta Pixel Code -->

	<!-- Start Meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php echo select("seo_setup", "title_en", 0); ?> | About Us</title>
    <meta name="description" content="<?php echo select("seo_setup", "desc_en", 0); ?>">
    <meta name="keywords" content="<?php echo select("seo_setup", "keyw_en", 0); ?>">
    <meta name="subject" content="Hair Transplant & Plastic Surgery">
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
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MRZLHM4"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
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
	<!-- Page Banner Area Start -->
    <div class="page__banner" data-background="<?php echo $base_link.select("about_bg", "pic_url", 0); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-title">
                        <h1>About Us</h1>
                        <div class="page__banner-title-menu">
                            <ul>
                                <li><a href="<?php echo $base_link; ?>en/index.php">Home</a></li>
                                <li><span> | </span>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Page Banner Area End -->	
	<!-- Mission Area Start -->	
    <div class="mission__area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="mission__area-title">
						<span class="subtitle"><?php echo select("about", "up_title_en", 0); ?></span>
						<h2><?php echo select("about", "main_title_en", 0); ?></h2>	
                        <p><?php echo select("about", "text_en", 0); ?></p>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Mission Area End -->	
	<!-- Appointment Area Start -->	
	<div class="appointment__area" data-background="<?php echo $base_link.select("casetup", "pic_url", 0); ?>">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="appointment__area-title">
						<h2><?php echo select("casetup", "title_en", 0); ?></h2>
						<a href="<?php echo $base_link; ?>contact.php" class="theme-btn"><?php echo select("casetup", "link_text_en", 0); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Appointment Area End -->	

	<!-- Working Process Start -->	
	<div class="working__process section-padding pt-5">
		<div class="container">
			<div class="row mb-60">
				<div class="col-xl-12">
					<div class="working__process-title t-center">
						<span class="subtitle"><?php echo select("otherserv", "up_title_en", 0); ?></span>
						<h2><?php echo select("otherserv", "main_title_en", 0); ?></h2>
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6 lg-mb-30">
					<div class="working__process-item">
						<span>01</span>
						<div class="working__process-item-number">
							<span>01</span>
						</div>
						<div class="working__process-item-content">
							<h5><?php echo select("otherserv", "box1_title_en", 0); ?></h5>
							<p><?php echo select("otherserv", "box1_text_en", 0); ?></p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 md-mb-30">
					<div class="working__process-item">
						<span>02</span>
						<div class="working__process-item-number">
							<span>02</span>
						</div>
						<div class="working__process-item-content">
							<h5><?php echo select("otherserv", "box2_title_en", 0); ?></h5>
							<p><?php echo select("otherserv", "box2_text_en", 0); ?></p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="working__process-item">
						<span>03</span>
						<div class="working__process-item-number">
							<span>03</span>
						</div>
						<div class="working__process-item-content">
							<h5><?php echo select("otherserv", "box3_title_en", 0); ?></h5>
							<p><?php echo select("otherserv", "box3_text_en", 0); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Working Process End -->	
	
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