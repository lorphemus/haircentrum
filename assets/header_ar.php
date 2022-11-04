<div class="header__area header__sticky">
    <div class="container custom__container">
        <div class="header__area-menubar">
            <div class="header__area-menubar-left">
                <div class="header__area-menubar-left-logo">
                    <a href="<?php echo $base_link; ?>en/index.php"><img src="<?php echo $base_link; ?>assets/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="header__area-menubar-center" style="direction: rtl;">
                <div class="header__area-menubar-center-menu menu-responsive">						
                    <ul id="mobilemenu">
                        <li><a href="<?php echo $base_link; ?>ar/index.php">الصفحة الرئيسية</a></li>
                        <li><a href="<?php echo $base_link; ?>ar/about.php">من نحن</a></li>
                        <li class="menu-item-has-children"><a href="#">الخدمات</a>
                            <ul class="sub-menu" style="text-align: right;">
                                <?php
                                $query=$db->prepare("SELECT * FROM services ORDER BY service_rank");
                                $query->execute();
                                $services=$query->fetchAll();
                                foreach($services as $service){
                                ?>
                                <li><a href="<?php echo $base_link; ?>ar/services/<?=seo($service["service_title_en"]).'/'.$service["id"]?>"><?php echo $service["service_title_ar"]; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li><a href="<?php echo $base_link; ?>ar/gallery.php">معرض الصور</a></li>
                        <li><a href="<?php echo $base_link; ?>ar/contact.php">اتصل بنا</a></li>
                    </ul>
                </div>
            </div>
            <div class="header__area-menubar-right">
                <div class="header__area-menubar-right-box">
                    <div class="header__area-menubar-right-box-search">
                        <div class="search">	
                            <span class="header__area-menubar-right-box-search-icon open"><i class="fal fa-globe"></i></span>
                        </div>
                        <div class="header__area-menubar-right-box-search-box">
                            <ul>
                               <li><a href="<?php echo $base_link; ?>index.php"><img src="<?php echo $base_link; ?>assets/img/lang/tr.png"/> Türkçe</a></li>
                               <li><a href="<?php echo $base_link; ?>en/index.php"><img src="<?php echo $base_link; ?>assets/img/lang/gb.png"/> English</a></li>
                               <li><a href="<?php echo $base_link; ?>ger/index.php"><img src="<?php echo $base_link; ?>assets/img/lang/de.png"/> Deutsch</a></li>
                               <li><a href="<?php echo $base_link; ?>fr/index.php"><img src="<?php echo $base_link; ?>assets/img/lang/fr.png"/> Français</a></li>
                               <li><a href="<?php echo $base_link; ?>ar/index.php"><img src="<?php echo $base_link; ?>assets/img/lang/ar.png"/> عربي</a></li>
                            </ul>            
                            <span class="header__area-menubar-right-box-search-box-icon"><i class="fal fa-times"></i></span>
                        </div>
                    </div>
                    <div class="header__area-menubar-right-sidebar">
                        <div class="header__area-menubar-right-sidebar-popup-icon"><span></span><span></span><span></span></div>
                    </div>
                    <!-- sidebar Menu Start -->
                    <div class="header__area-menubar-right-sidebar-popup" style="direction: rtl;">
                        <div class="sidebar-close-btn"><i class="fal fa-times"></i></div>
                        <div class="header__area-menubar-right-sidebar-popup-logo" style="direction: ltr;">
                            <a href="<?php echo $base_link; ?>ar/index.php"> <img src="<?php echo $base_link; ?>assets/img/logo.png" alt=""> </a>
                        </div>
                        <p style="text-align: right;"><?php echo select("seo_setup", "short_about_ar", 0); ?></p>
                        <div class="header__area-menubar-right-box-sidebar-popup-image">
                            <img src="<?php echo $base_link; ?>assets/img/bar.jpg" alt="">
                        </div>
                        <div class="header__area-menubar-right-box-sidebar-popup-contact">
                            <h4 class="mb-30">معلومات الاتصال</h4>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-phone-alt"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>اتصل بنا</span>
                                    <h6 style="direction: ltr;"><a href="tel:<?php echo select("contact_settings", "phone", 0); ?>"><?php echo select("contact_settings", "phone", 0); ?></a></h6>
                                </div>
                            </div>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>بريدنا الاليكتروني</span>
                                    <h6><a href="mailto:<?php echo select("contact_settings", "mail", 0); ?>"><?php echo select("contact_settings", "mail", 0); ?></a></h6>
                                </div>
                            </div>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>عنواننا</span>
                                    <h6><a href="<?php echo $base_link; ?>contact.php"><?php echo select("contact_settings", "address", 0); ?></a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="header__area-menubar-right-box-sidebar-popup-social">
                            <ul>
                                <li <?php if(empty(select("social_media", "instagram", 0))){echo 'style="display: none;"';} ?>><a href="<?php echo select("social_media", "instagram", 0); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li <?php if(empty(select("social_media", "facebook", 0))){echo 'style="display: none;"';} ?>><a href="<?php echo select("social_media", "facebook", 0); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li <?php if(empty(select("social_media", "twitter", 0))){echo 'style="display: none;"';} ?>><a href="<?php echo select("social_media", "twitter", 0); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li <?php if(empty(select("social_media", "youtube", 0))){echo 'style="display: none;"';} ?>><a href="<?php echo select("social_media", "youtube", 0); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>							
                        </div>
                    </div>
                    <div class="sidebar-overlay"></div>
                    <!-- sidebar Menu Start -->
                </div>
                <div class="responsive-menu"></div>
            </div>
        </div>
    </div>
</div>