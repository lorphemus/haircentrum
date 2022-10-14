<?php 
ob_start();
session_start();
include("admin/assets/connect.php");
include("admin/assets/functions.php");
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

	<!-- Start Meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php echo select("seo_setup", "title_en", 0); ?> | Privacy Policy</title>
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
	<?php include("assets/header_en.php"); ?>    
	<!-- Header Area End -->		
	<!-- Page Banner Area Start -->
    <div class="page__banner" data-background="<?php echo $base_link.select("about_bg", "pic_url", 0); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-title">
                        <h1>Privacy Policy</h1>
                        <div class="page__banner-title-menu">
                            <ul>
                                <li><a href="<?php echo $base_link; ?>en/index.php">Home</a></li>
                                <li><span> | </span>Privacy Policy</li>
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
						<h2>Privacy Policy</h2>	
                        <p>We appreciate your concern and concern about the privacy of your data on the Internet. This policy has been prepared to help you understand the nature of the data we collect from you when you visit our website and how we handle this personal data.</p>
						<p>Browsing: We did not design this site to collect personal data from your computer while you are browsing this site, but will only use data provided by you with your knowledge and of your own free will to contact you.</p>
						<p>Internet Protocol (IP) address: At any time you visit any Web site including this Site, the Host Server will record your IP address, date and time of visit, type of Internet browser you are using and the URL of any Web site The Internet that refers you to this Web site.</p>
						<p>Online Surveys: Our online surveys enable us to collect specific data such as the data required of you regarding your view and feel about our site. Your feedback is of paramount importance and is appreciated as it enables us to improve our site. Provide data related to your name and other data.</p>
						<p>Confidentiality of Information: We will at all times maintain the privacy and confidentiality of all personal data we receive, and will not disclose this information at all, the information will remain very confidential, including contact data, names, photos and others.</p>
						<p>Data required to perform transactions required by you: When we need any data of your own, we will ask you to submit it of your own free will. This information will help us contact you and execute your requests. Where possible, the data provided by you to any third party will not be sold for marketing to its own benefit without your prior written consent unless it is a collective data used for statistical purposes and research. Without including any data that may be used to identify you.</p>
						<p>When you contact us</p>
						<p>All data provided by you will be treated as confidential. Forms submitted directly on the web require data that will help us improve our site. The data provided by you will be used to respond to all your queries, comments or requests by this Site or any of its affiliated sites.</p>
						<p>Disclosure of information to any third party: We will not sell, trade, lease or disclose any information to any third parties outside this website or its affiliates. Information will only be disclosed if an order is issued by any judicial or regulatory authority.</p>
						<p>Contact us: You can contact us if needed by clicking on the Contact Us link on our website or sending us an e-mail.</p>
						<p>Finally, your concerns about privacy and confidentiality are very important to us. We hope that this will be achieved through this policy.</p>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Mission Area End -->	
	
	<!-- Footer Area Start -->	
	<?php include("assets/footer_en.php"); ?>
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