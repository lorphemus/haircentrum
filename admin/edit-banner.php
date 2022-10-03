<?php
ob_start();
session_start();

if(!$_SESSION['user_mail']){
	header("Location:login.php");
	exit();
}
$treeview="home";
$page="slider";
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

	<!-- Select2 -->
	<link rel="stylesheet" href="assets/vendor_components/select2/dist/css/select2.min.css">

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
        Banner Düzenle
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">
	<?php 
	$query=$db->prepare("SELECT * FROM banner_settings");
	$query->execute(array(0));
	$get_slider=$query->fetch(PDO::FETCH_ASSOC);
	?>
      <!-- Default box -->
      <div class="box">
        <div class="box-body">
			<form action="assets/process.php" method="POST" enctype="multipart/form-data">
				<!-- Slider Picture -->
				<div class="form-group">
					<label>Slider Resim</label>
					<br>
					<img src="../<?php echo $get_slider["pic_url"]; ?>" width="400px";>
				</div>
				<div class="form-group">
					<input type="file" name="slider_pic" value="<?php echo $get_slider["pic_url"]; ?>">
				</div>
				<div class="form-group">
					<input type="hidden" name="slider_pic" value="<?php echo $get_slider["pic_url"]; ?>">
					<button type="submit" class="btn btn-success" name="update_slider_pic"><i class="fa fa-refresh"></i> Resmi Güncelle</button>
				</div
			</form>
			
			<form action="assets/process.php" method="post">
				<!-- Slider UP Title -->
				<div class="col-md-12" style="padding: 0">
				  <h3>Slider Üst Başlık</h3>
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
						<input type="text" class="form-control" name="title_tr" value="<?php echo $get_slider["title_tr"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_2">
						<input type="text" class="form-control" name="title_en" value="<?php echo $get_slider["title_en"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_3">
						<input type="text" class="form-control" name="title_ger" value="<?php echo $get_slider["title_ger"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_4">
						<input type="text" class="form-control" name="title_fr" value="<?php echo $get_slider["title_fr"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_5">
						<input style="direction:rtl;" type="text" class="form-control" name="title_ar" value="<?php echo $get_slider["title_ar"]; ?>" required>
					  </div>
					</div>
					<!-- /.tab-content -->
				  </div>
				  <!-- nav-tabs-custom -->
				</div>
								
				<a href="sliderlist.php" class="btn btn-danger"><i class="fa fa-arrow-circle-o-left"></i> Vazgeç</a>
				<button type="submit" name="edit_slider" class="btn btn-success"><i class="fa fa-refresh"></i> Banner Güncelle</button>
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

	<!-- Select2 -->
	<script src="assets/vendor_components/select2/dist/js/select2.full.js"></script>
	
	<!-- SlimScroll -->
	<script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- CKeditor -->
	<script src="assets/vendor_plugins/ckeditor/ckeditor.js"></script>
	
	<!-- Cross Admin App -->
	<script src="js/template.js"></script>
	
	<!-- Cross Admin for demo purposes -->
	<script src="js/main.js"></script>

	<!-- Cross Admin for advanced form element -->
	<script src="js/pages/advanced-form-element.js"></script>
	

</body>

</html>
