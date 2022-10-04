<aside class="main-sidebar"> 
  <!-- sidebar-->
  <section class="sidebar"> 
    <!-- Sidebar user panel -->
    <div class="user-panel">
		<?php 
		if(empty($get_user["user_pic"])){
		?>
      <div class="image"> <img src="img/no-pic.png" class="img-circle" alt="User Image"></div>
		<?php }else{ ?>
	  <div class="image"> <img src="<?php echo $get_user["user_pic"]; ?>" class="img-circle" alt="User Image"></div>
		<?php } ?>
      <div class="info">
        <p><?php echo $get_user["user_name"]; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
    </div>
 
    <!-- sidebar menu: -->
    <ul class="sidebar-menu" data-widget="tree">
 
        <!--Sayfa Ayarları-->
        <li class="header">Sayfa Ayarları</li>
        <li class="treeview <?php if(@$treeview=="home"){echo 'active';} ?>"> <a href="#"> <i class="fa fa-home"></i> <span>Anasayfa Ayarları</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li <?php if(@$page=='slider'){ echo 'class="active"'; } ?>><a href="edit-banner.php"><i class="fa fa-image"></i> Banner Ayarları</a></li>
            <li <?php if(@$page=='down-slider'){ echo 'class="active"'; } ?>><a href="banner-down.php"><i class="fa fa-newspaper-o"></i> Öne Çıkarılan Hizmetler</a></li>
            <li <?php if(@$page=='home-video'){ echo 'class="active"'; } ?>><a href="video-setup.php"><i class="fa fa-play"></i> Video Alanı</a></li>
          </ul>
        </li>
        <li class="treeview <?php if(@$treeview=="about"){echo 'active';} ?>"> <a href="#"> <i class="fa fa-files-o"></i> <span>Hakkımızda Ayarları</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li <?php if(@$page=='aboutbg'){ echo 'class="active"'; } ?>><a href="about-bg-setup.php"><i class="fa fa-image"></i> Sayfa Başlık Resmi</a></li>
            <li <?php if(@$page=='aboutpage'){ echo 'class="active"'; } ?>><a href="about-setup.php"><i class="fa fa-list-alt"></i> Sayfa İçerik</a></li>
            <li <?php if(@$page=='casetup'){ echo 'class="active"'; } ?>><a href="call-to-action-setup.php"><i class="fa fa-caret-square-o-right"></i> Duyuru Ayarları</a></li>
            <li <?php if(@$page=='otherserv'){ echo 'class="active"'; } ?>><a href="other-services-setup.php"><i class="fa fa-check-square-o"></i> Diğer Hizmetler</a></li>
          </ul>
        </li>
        <li class="treeview <?php if(@$treeview=="services"){echo 'active';} ?>"> <a href="#"> <i class="fa fa-id-card-o"></i> <span>Hizmetlerimiz Ayarları</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
              <li <?php if(@$page=='servicebg'){ echo 'class="active"'; } ?>><a href="service-bg-setup.php"><i class="fa fa-image"></i> Sayfa Başlık Resmi</a></li>
              <li <?php if(@$page=='servicelist'){ echo 'class="active"'; } ?>><a href="serviceslist.php"><i class="fa fa-cubes"></i> Hizmetler</a></li>
          </ul>
        </li>
        <li class="treeview <?php if(@$treeview=="gallery"){echo 'active';} ?>"> <a href="#"> <i class="fa fa-camera"></i> <span>Resim Galeri Ayarları</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
              <li <?php if(@$page=='gallerybg'){ echo 'class="active"'; } ?>><a href="gallery-bg-setup.php"><i class="fa fa-image"></i> Sayfa Başlık Resmi</a></li>
              <li <?php if(@$page=='gallerylist'){ echo 'class="active"'; } ?>><a href="gallery-setup.php"><i class="glyphicon glyphicon-th-large"></i> Galeri</a></li>
          </ul>
        </li>
        <li class="treeview <?php if(@$treeview=="contact"){echo 'active';} ?>"> <a href="#"> <i class="fa fa-address-card"></i> <span>İletişim Sayfa Ayarları</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
              <li <?php if(@$page=='contactbg'){ echo 'class="active"'; } ?>><a href="contact-bg-setup.php"><i class="fa fa-image"></i> Sayfa Başlık Resmi</a></li>
              <li <?php if(@$page=='form'){ echo 'class="active"'; } ?>><a href="form-setup.php"><i class="fa fa-comment"></i> Sayfa Başlık Ayarları</a></li>
          </ul>
        </li>
      
        <!--Genel Ayarlar-->
      <li class="header">Genel Ayarlar</li>
      <li <?php if(@$page=='contactsetup'){ echo 'class="active"'; } ?>><a href="contactsetup.php"> <i class="fa fa-phone"></i> <span>İletişim Ayarları</span></a></li>
      <li <?php if(@$page=='seosetup'){ echo 'class="active"'; } ?>><a href="seo-setup.php"> <i class="fa fa-ravelry"></i> <span>SEO Ayarları</span></a></li>
      <li <?php if(@$page=='socialsetup'){ echo 'class="active"'; } ?>><a href="socialmediasetup.php"> <i class="fa fa-thumbs-up"></i> <span>Sosyal Medya Ayarları</span></a></li>
      
      <li class="header">Siteye Gİt</li>
      <li><a href="../index.php" target="_blank"><i class="fa fa-home text-aqua"></i> <span>Siteyi Görüntüle</span></a></li>
      </ul>
  </section>
  <!-- /.sidebar -->

</aside>
