<!-- Subscribe Area Start -->	
<div class="subscribe__area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-md-5">
                <div class="subscribe__area-title">
                    <h3><?php echo select("newsletter_settings", "nl_title_tr", 0); ?></h3>
                </div>
            </div>
            <div class="col-xl-5 col-md-7">
                <div class="subscribe__area-subscribe">
                    <form action="#">
                        <input type="text" name="email" placeholder="Email Adresiniz" required="">
                        <button class="theme-btn" type="submit"><?php echo select("newsletter_settings", "btn_title_tr", 0); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe Area End -->

<!-- Whatsapp Button -->
<div class="floating_btn">
    <a target="_blank" href="https://wa.me/<?php echo select("contact_settings", "whatsapp", 0); ?>?text=Hizmetleriniz%20hakkında%20bilgi%20almak%20istiyorum">
    <div class="contact_icon">
        <i class="fab fa-whatsapp"></i>
    </div>
    </a>
</div>
<!-- Whatsapp Button End -->

<div class="footer__area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-sm-6 lg-mb-30">
                <div class="footer__area-widget borders">
                    <h5>HAIR CENTRUM</h5>
                    <div class="footer__area-widget-about">
                        <p><?php echo select("seo_setup", "short_about_tr", 0); ?></p>
                        <div class="footer__area-widget-about-social">
                            <ul>
                                <li <?php if(empty(select("social_media", "instagram", 0))){echo 'style="display: none;"';} ?>><a href="<?php echo select("social_media", "instagram", 0); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li <?php if(empty(select("social_media", "facebook", 0))){echo 'style="display: none;"';} ?>><a href="<?php echo select("social_media", "facebook", 0); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li <?php if(empty(select("social_media", "twitter", 0))){echo 'style="display: none;"';} ?>><a href="<?php echo select("social_media", "twitter", 0); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li <?php if(empty(select("social_media", "youtube", 0))){echo 'style="display: none;"';} ?>><a href="<?php echo select("social_media", "youtube", 0); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="footer__area-widget borders">
                    <h5>Hizmetlerimiz</h5>
                    <div class="footer__area-widget-contact">
                        <ul>
                            <?php
                            $query=$db->prepare("SELECT * FROM services ORDER BY service_rank");
                            $query->execute();
                            $services=$query->fetchAll();
                            foreach($services as $service){
                            ?>
                            <li><a href="<?php echo $base_link; ?>services/<?=seo($service["service_title_tr"]).'/'.$service["id"]?>"><?php echo $service["service_title_tr"]; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-sm-6 sm-mb-30">
                <div class="footer__area-widget borders border-r">
                    <h5>Bize Ulaşın</h5>
                    <div class="footer__area-widget-contact">
                        <ul>
                            <li><a href="<?php echo $base_link; ?>contact.php"><?php echo select("contact_settings", "address", 0); ?></a></li>
                            <li><a href="mailto:<?php echo select("contact_settings", "mail", 0); ?>"><?php echo select("contact_settings", "mail", 0); ?></a></li>
                            <li><a href="tel:<?php echo select("contact_settings", "phone", 0); ?>"><?php echo select("contact_settings", "phone", 0); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<!-- Copyright Area Start -->	
<div class="copyright__area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 lg-mb-10">
                <div class="copyright__area-left lg-t-center">
                    <p>Copyright © 2022 Hair Centrum | Created by <a href="https://www.excessreklam.com">Excess Reklam</a></p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="copyright__area-right t-right lg-t-center">
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>	
<!-- Copyright Area End -->