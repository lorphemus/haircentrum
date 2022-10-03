<div class="col-xl-4 col-lg-4 lg-mb-30">
    <div class="all__sidebar mr-20 xl-mr-0">
        <div class="all__sidebar-item">
            <h5>Hizmetlerimiz</h5>
            <div class="all__sidebar-item-category">
                <ul>                                    
                    <?php
                    $query=$db->prepare("SELECT * FROM services ORDER BY service_rank");
                    $query->execute();
                    $services=$query->fetchAll();
                    foreach($services as $service){
                    ?>
                    <li><a href="<?php echo $base_link; ?>services/<?=seo($service["service_title_tr"]).'/'.$service["id"]?>"><?php echo $service["service_title_tr"]; ?><i class="far fa-angle-double-right"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="all__sidebar-item-help mt-30" data-background="assets/img/avatar/avatar-8.jpg">
            <h3>Need Any Help?</h3>
            <div class="all__sidebar-item-help-contact">
                <div class="all__sidebar-item-help-contact-icon">
                    <i class="fal fa-phone-alt"></i>
                </div>
                <div class="all__sidebar-item-help-contact-content">
                    <span>Quick Help</span>
                    <h4><a href="tel:<?php echo select("contact_settings", "phone", 0); ?>"><?php echo select("contact_settings", "phone", 0); ?></a></h4>
                </div>
            </div>
        </div> 
    </div>                   
</div>