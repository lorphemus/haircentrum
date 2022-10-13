<?php 
ob_start();
session_start();
include("../admin/assets/connect.php");
include("../admin/assets/functions.php");
?>
<!DOCTYPE html>
<html lang="ger">

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
    
	<!-- Start Meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php echo select("seo_setup", "title_ger", 0); ?> | Kontakt</title>
    <meta name="description" content="<?php echo select("seo_setup", "desc_ger", 0); ?>">
    <meta name="keywords" content="<?php echo select("seo_setup", "keyw_ger", 0); ?>">
    <meta name="subject" content="Hair Transplant & Plastic Surgery">
    <meta name="author" content="Batuhan Nihat KILIÇ | Excess Reklam">

    <meta name="robots" content="index,follow">
	<meta property="og:title" content="<?php echo select("seo_setup", "title_ger", 0); ?>">
	<meta property="og:description" content="<?php echo select("seo_setup", "desc_ger", 0); ?>">
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
    <!-- Sweet Alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
	<?php include("../assets/header_ger.php"); ?>    
	<!-- Header Area End -->		
	<!-- Page Banner Area Start -->
    <div class="page__banner" data-background="<?php echo $base_link.select("contact_bg", "pic_url", 0); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-title">
                        <h1>Kontakt</h1>
                        <div class="page__banner-title-menu">
                            <ul>
                                <li><a href="<?php echo $base_link; ?>ger/index.php">Home</a></li>
                                <li><span> | </span>Kontakt</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Page Banner Area End -->	
	<!-- Contact Area Start -->	
    <div class="contact__page section-padding pb-0">
        <div class="container">
            <div class="row mb-60">
                <div class="col-xl-12">
                    <div class="contact__page-title t-center">
						<span class="subtitle"><?php echo select("form", "up_title_ger", 0); ?></span>
						<h2><?php echo select("form", "main_title_ger", 0); ?></h2>	
                    </div>                    
                </div>
            </div>
            <div class="row section-padding pt-0">
                <div class="col-xl-4 col-lg-6 xl-mb-30">
                    <div class="contact__page-item">
                        <div class="contact__page-item-icon">  
                            <i class="fal fa-phone-alt"></i>		                      
                        </div>
                        <div class="contact__page-item-content">
                            <h5>Telefon</h5>
                            <p><a href="tel:<?php echo select("contact_settings", "phone", 0); ?>"><?php echo select("contact_settings", "phone", 0); ?></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 lg-mb-30">
                    <div class="contact__page-item">
                        <div class="contact__page-item-icon">  
                            <i class="fal fa-envelope-open-text"></i>		                      
                        </div>
                        <div class="contact__page-item-content">
                            <h5>Email</h5>
                            <p><a href="mailto:<?php echo select("contact_settings", "mail", 0); ?>"><?php echo select("contact_settings", "mail", 0); ?></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="contact__page-item">
                        <div class="contact__page-item-icon">  
                            <i class="fal fa-map-marked-alt"></i>		                      
                        </div>
                        <div class="contact__page-item-content">
                            <h5>Adresse</h5>
                            <p><?php echo select("contact_settings", "address", 0); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact__page-form">
                        <h2>In Kontakt bleiben</h2>
                        <form action="<?php echo $base_link; ?>ger/send.php" method="post">	
                            <div class="row">
                                <div class="col-md-6 mb-30"> 
                                    <div class="contact__page-form-item">
                                        <input type="text" name="name" placeholder="Name" required="required">
                                    </div>										
                                </div>
                                <div class="col-md-6 md-mb-30">
                                    <div class="contact__page-form-item">
                                        <input type="email" name="email" placeholder="E-Mail-Addresse" required="required">											
                                    </div>									
                                </div>
                                <div class="col-md-6 mb-30"> 
                                    <div class="contact__page-form-item">
                                        <input type="text" name="phone" placeholder="Telefonnummer" required="required">
                                    </div>										
                                </div>
                                <div class="col-md-6 md-mb-30"> 
                                    <div class="contact__page-form-item">
                                        <input type="text" name="service" placeholder="Dienst, den Sie wollen" required="required">
                                    </div>										
                                </div>
                                <div class="col-lg-12 mb-30"> 
                                    <div class="contact__page-form-item">
                                        <textarea name="message" placeholder="Nachricht..."></textarea>
                                    </div>										
                                </div>
                                <div class="col-lg-12">										
                                    <div class="contact__page-form-item">
                                        <input type="hidden" name="page" value="contact.php">
                                        <button class="theme-btn" type="submit" name="send_mail">Senden</button>
                                    </div>										
                                </div>
                            </div>							
                        </form>
                        <?php
                            if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                            { ?>
                            <script type="text/javascript">
                                swal({
                                    title: "<?php echo $_SESSION['title']; ?>",
                                    text: "<?php echo $_SESSION['status']; ?>",
                                    icon: "<?php echo $_SESSION['icon']; ?>",
                                    });
                            </script> 
                            <?php
                            unset($_SESSION['status']);
                            unset($_SESSION['title']);
                            unset($_SESSION['icon']);
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact__page-map">
        <?php echo select("contact_settings", "google_map", 0); ?>
    </div>
	<!-- Contact Area End -->	

	<!-- Footer Area Start -->	
	<?php include("../assets/footer_ger.php"); ?>
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