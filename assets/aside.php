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
        <div class="all__sidebar-item-help mt-30" data-background="<?php echo $base_link.select("aside_settings", "pic_url", 0); ?>">
            <h3><?php echo select("aside_settings", "up_title_tr", 0); ?></h3>
            <div class="all__sidebar-item-help-contact">
                <div class="all__sidebar-item-help-contact-icon">
                    <i class="fal fa-phone-alt"></i>
                </div>
                <div class="all__sidebar-item-help-contact-content">
                    <span><?php echo select("aside_settings", "title_tr", 0); ?></span>
                    <h4><a href="tel:<?php echo select("contact_settings", "phone", 0); ?>"><?php echo select("contact_settings", "phone", 0); ?></a></h4>
                </div>
            </div>
        </div> 
    </div>                   
</div>