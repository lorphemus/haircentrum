<?php
ob_start();
session_start();

if(!$_SESSION['user_mail']){
	header("Location:login.php");
	exit();
}
$page="seosetup";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <meta name="author" content="Batuhan Nihat KILIÇ | Excess Reklam">
    <link rel="icon" href="img/favicon.ico">

    <title>Hair Centrum - Yönetim Paneli</title>
  
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/vendor_components/font-awesome/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="assets/vendor_components/Ionicons/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="css/master_style.css">

	<!-- Cross Admin skins -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
	<!-- Sweet Alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
</head>
<body class="hold-transition skin-purple sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- Header -->
  <?php include("assets/header.php"); ?>
  <!-- Header END -->

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <?php include("assets/aside.php"); ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
        Google SEO Ayarları
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">
	<?php 
	$setting_query=$db->prepare("SELECT * FROM seo_setup WHERE id=?");
	$setting_query->execute(array(0));
	$get_set=$setting_query->fetch(PDO::FETCH_ASSOC);
	?>
      <!-- Default box -->
      <div class="box">
        <div class="box-body">
			
			<!-- Title -->
			<form action="assets/process.php" method="post">
				<div class="col-md-12" style="padding: 0">
				  <h3>Site Başlık</h3>
				  <!-- Custom Tabs -->
				  <div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
					  <li class="active"><a href="#tab_1" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
					  <li><a href="#tab_2" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
					  <li><a href="#tab_3" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
					  <li><a href="#tab_4" data-toggle="tab">Fransızca <img src="img/fr.png"></a></li>
					  <li><a href="#tab_5" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
					</ul>
					<div class="tab-content">
					  <div class="tab-pane active" id="tab_1">
						<input type="text" class="form-control" name="title_tr" value="<?php echo $get_set["title_tr"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_2">
						<input type="text" class="form-control" name="title_en" value="<?php echo $get_set["title_en"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_3">
						<input type="text" class="form-control" name="title_ger" value="<?php echo $get_set["title_ger"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_4">
						<input type="text" class="form-control" name="title_fr" value="<?php echo $get_set["title_fr"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_5">
						<input style="direction: rtl;" type="text" class="form-control" name="title_ar" value="<?php echo $get_set["title_ar"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					</div>
					<!-- /.tab-content -->
				  </div>
				  <!-- nav-tabs-custom -->
				</div>
				<button type="submit" name="title_update" class="btn btn-success"><i class="fa fa-check"></i> Güncelle</button>
			</form>
			
			<!-- Description -->
			<form action="assets/process.php" method="post">
				<div class="col-md-12" style="padding: 0">
				  <h3>Site Açıklama</h3>
				  <!-- Custom Tabs -->
				  <div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
					  <li class="active"><a href="#tab_6" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
					  <li><a href="#tab_7" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
					  <li><a href="#tab_8" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
					  <li><a href="#tab_9" data-toggle="tab">Fransızca <img src="img/fr.png"></a></li>
					  <li><a href="#tab_10" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
					</ul>
					<div class="tab-content">
					  <div class="tab-pane active" id="tab_6">
						<input type="text" class="form-control" name="desc_tr" value="<?php echo $get_set["desc_tr"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_7">
						<input type="text" class="form-control" name="desc_en" value="<?php echo $get_set["desc_en"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_8">
						<input type="text" class="form-control" name="desc_ger" value="<?php echo $get_set["desc_ger"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_9">
						<input type="text" class="form-control" name="desc_fr" value="<?php echo $get_set["desc_fr"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_10">
						<input style="direction: rtl;" type="text" class="form-control" name="desc_ar" value="<?php echo $get_set["desc_ar"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					</div>
					<!-- /.tab-content -->
				  </div>
				  <!-- nav-tabs-custom -->
				</div>
				<button type="submit" name="desc_update" class="btn btn-success"><i class="fa fa-check"></i> Güncelle</button>
			</form>
			
			<!-- Keywords -->
			<form action="assets/process.php" method="post">
				<div class="col-md-12" style="padding: 0">
				  <h3>Site Keywords</h3>
				  <!-- Custom Tabs -->
				  <div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
					  <li class="active"><a href="#tab_11" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
					  <li><a href="#tab_12" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
					  <li><a href="#tab_13" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
					  <li><a href="#tab_14" data-toggle="tab">Fransızca <img src="img/fr.png"></a></li>
					  <li><a href="#tab_15" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
					</ul>
					<div class="tab-content">
					  <div class="tab-pane active" id="tab_11">
						<input type="text" class="form-control" name="keyw_tr" value="<?php echo $get_set["keyw_tr"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_12">
						<input type="text" class="form-control" name="keyw_en" value="<?php echo $get_set["keyw_en"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_13">
						<input type="text" class="form-control" name="keyw_ger" value="<?php echo $get_set["keyw_ger"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_14">
						<input type="text" class="form-control" name="keyw_fr" value="<?php echo $get_set["keyw_fr"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_15">
						<input style="direction: rtl;" type="text" class="form-control" name="keyw_ar" value="<?php echo $get_set["keyw_ar"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					</div>
					<!-- /.tab-content -->
				  </div>
				  <!-- nav-tabs-custom -->
				</div>
				<button type="submit" name="keyw_update" class="btn btn-success"><i class="fa fa-check"></i> Güncelle</button>
			</form>
			
			<!-- Footer -->
			<form action="assets/process.php" method="post">
				<div class="col-md-12" style="padding: 0">
				  <h3>Site Footer | <small>Kısa Hakkımızda Yazısı</small></h3>
				  <!-- Custom Tabs -->
				  <div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
					  <li class="active"><a href="#tab_16" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
					  <li><a href="#tab_17" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
					  <li><a href="#tab_18" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
					  <li><a href="#tab_19" data-toggle="tab">Fransızca <img src="img/fr.png"></a></li>
					  <li><a href="#tab_20" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
					</ul>
					<div class="tab-content">
					  <div class="tab-pane active" id="tab_16">
						<input type="text" class="form-control" name="short_about_tr" value="<?php echo $get_set["short_about_tr"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_17">
						<input type="text" class="form-control" name="short_about_en" value="<?php echo $get_set["short_about_en"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_18">
						<input type="text" class="form-control" name="short_about_ger" value="<?php echo $get_set["short_about_ger"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_19">
						<input type="text" class="form-control" name="short_about_fr" value="<?php echo $get_set["short_about_fr"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_20">
						<input style="direction: rtl;" type="text" class="form-control" name="short_about_ar" value="<?php echo $get_set["short_about_ar"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					</div>
					<!-- /.tab-content -->
				  </div>
				  <!-- nav-tabs-custom -->
				</div>
				<button type="submit" name="short_about_update" class="btn btn-success"><i class="fa fa-check"></i> Güncelle</button>
			</form>
		</div>
		<!-- /.box-body -->
		
		  
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
		  
		  
			if($_SESSION['user_mail']!= $get_user['user_mail']){
			unset($_SESSION['user_mail']);
			header("Location:login.php");
			exit();
			}
		?>
		
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <!-- Footer -->
  <?php include("assets/footer.php"); ?>
  <!-- Footer END -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


	<!-- jQuery 3 -->
	<script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- Bootstrap 3.3.7 -->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Cross Admin App -->
	<script src="js/template.js"></script>
	
	<!-- Cross Admin for demo purposes -->
	<script src="js/main.js"></script>
	

</body>

</html>
