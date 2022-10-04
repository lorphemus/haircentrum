<?php
ob_start();
session_start();

if (!$_SESSION['user_mail']) {
	header("Location:login.php");
	exit();
}
$treeview = "home";
$page = "home-video";
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

	<!-- Checkbox -->
	<link rel="stylesheet" href="assets/vendor_plugins/iCheck/all.css">

	<!-- DropeZone CSS -->
	<link rel="stylesheet" href="css/dropzone.css">

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
	<style media="screen">
		.dropzone {
			border: 2px dashed #444;
			height: 200px;
			background-color: #f1f1f1;
			font-size: 15px;
			font-style: italic;
			text-align: center;
			padding-top: 30px;
		}
	</style>

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
					Video Alanı
				</h3>
			</section>
			<?php 
			$query=$db->prepare("SELECT * FROM video_setup");
			$query->execute(array(0));
			$get_video=$query->fetch(PDO::FETCH_ASSOC);
			?>
			<!-- Title -->
			<section class="content">
				<div class="box">
					<div class="box-body">
						<form action="assets/process.php" method="POST" enctype="multipart/form-data">
							<!-- Video Picture -->
							<div class="form-group">
								<label>Video Resim Güncellem</label>
								<br>
								<img src="../<?php echo $get_video["pic_url"]; ?>" width="400px";>
							</div>
							<div class="form-group">
								<input type="file" name="video_pic" value="<?php echo $get_video["pic_url"]; ?>">
							</div>
							<div class="form-group">
								<input type="hidden" name="unlink" value="<?php echo $get_video["pic_url"]; ?>">
								<button type="submit" class="btn btn-success" name="update_video_pic"><i class="fa fa-refresh"></i> Resmi Güncelle</button>
							</div
						</form>
					</div>
				</div>

				<div class="box">
					<div class="box-body">
						<form action="assets/process.php" method="post">
							<div class="col-md-12" style="padding: 0">
								<h3>Üst Başlık</h3>
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
											<input type="text" class="form-control" name="up_title_tr" value="<?php echo $get_video["up_title_tr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_2">
											<input type="text" class="form-control" name="up_title_en" value="<?php echo $get_video["up_title_en"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_3">
											<input type="text" class="form-control" name="up_title_ger" value="<?php echo $get_video["up_title_ger"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_4">
											<input type="text" class="form-control" name="up_title_fr" value="<?php echo $get_video["up_title_fr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_5">
											<input style="direction: rtl;" type="text" class="form-control" name="up_title_ar" value="<?php echo $get_video["up_title_ar"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- nav-tabs-custom -->
								<div class="col-md-12" style="padding: 0">
									<h3>Ana Başlık</h3>
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
												<input type="text" class="form-control" name="title_tr" value="<?php echo $get_video["title_tr"]; ?>" required>
											</div>
											<!-- /.tab-pane -->
											<div class="tab-pane" id="tab_7">
												<input type="text" class="form-control" name="title_en" value="<?php echo $get_video["title_en"]; ?>" required>
											</div>
											<!-- /.tab-pane -->
											<div class="tab-pane" id="tab_8">
												<input type="text" class="form-control" name="title_ger" value="<?php echo $get_video["title_ger"]; ?>" required>
											</div>
											<!-- /.tab-pane -->
											<div class="tab-pane" id="tab_9">
												<input type="text" class="form-control" name="title_fr" value="<?php echo $get_video["title_fr"]; ?>" required>
											</div>
											<!-- /.tab-pane -->
											<div class="tab-pane" id="tab_10">
												<input style="direction: rtl;" type="text" class="form-control" name="title_ar" value="<?php echo $get_video["title_ar"]; ?>" required>
											</div>
											<!-- /.tab-pane -->
										</div>
										<!-- /.tab-content -->
									</div>
									<!-- nav-tabs-custom -->
								</div>

							</div>
							<button type="submit" name="video_title_update" class="btn btn-success"><i class="fa fa-refresh"></i> Başlık Güncelle</button>
						</form>
					</div>
				</div>
				
				<div class="box">
					<div class="box-body">
						<form action="assets/process.php" method="post">
							<div class="col-md-12" style="padding: 0">
							<h4>İçerik Yazı</h4>
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
									<textarea name="text_tr" id="editor1" cols="30" rows="10"><?php echo $get_video["text_tr"]; ?></textarea>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="tab_12">
									<textarea name="text_en" id="editor2" cols="30" rows="10"><?php echo $get_video["text_en"]; ?></textarea>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="tab_13">
									<textarea name="text_ger" id="editor3" cols="30" rows="10"><?php echo $get_video["text_ger"]; ?></textarea>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="tab_14">
									<textarea name="text_fr" id="editor4" cols="30" rows="10"><?php echo $get_video["text_fr"]; ?></textarea>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="tab_15">
									<textarea name="text_ar" id="editor5" cols="30" rows="10"><?php echo $get_video["text_ar"]; ?></textarea>
								</div>
								<!-- /.tab-pane -->
								</div>
								<!-- /.tab-content -->
							</div>
							<!-- nav-tabs-custom -->
							</div>
							<!-- Button Link -->
							<div class="col-md-12" style="padding: 0">
								<h4>Yönlenecek Sayfayı Seçin</h4>
								<div class="form-group col-md-12">
									<select class="form-control" id="sel1" name="button_link" required>
										<option disabled selected value="">Sayfayı Seçin</option>
										<option value="about.php">Hakkımızda</option>
										<option value="gallery.php">Galeri</option>
										<option value="contact.php">İletişim</option>
									</select>
								</div>
							</div>
							<button type="submit" name="video_text_update" class="btn btn-success"><i class="fa fa-refresh"></i> Yazıları Güncelle</button>
						</form>
					</div>
				</div>

				<div class="box">
					<div class="box-body">
						<form action="assets/process.php" method="post">
							<div class="box-header with-border">
								<h3 class="box-title">Video Linkini Girin</h3>
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" name="video_link" value="<?php echo $get_video["video_link"]; ?>" required>
							</div>
							<button type="submit" name="video_link_update" class="btn btn-success"><i class="fa fa-refresh"></i> Link Güncelle</button>
						</form>
					</div>
				</div>

				<?php
				if (isset($_SESSION['status']) && $_SESSION['status'] != '') { ?>
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


				if ($_SESSION['user_mail'] != $get_user['user_mail']) {
					unset($_SESSION['user_mail']);
					header("Location:login.php");
					exit();
				}
				?>
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

	<!-- CKeditor -->
	<script src="assets/vendor_plugins/ckeditor/ckeditor.js"></script>

	<!-- Cross Admin App -->
	<script src="js/template.js"></script>

	<!-- Cross Admin for demo purposes -->
	<script src="js/main.js"></script>

	<!-- Checkbox -->
	<script src="assets/vendor_plugins/iCheck/icheck.min.js"></script>

	<!-- CKeditor -->
	<script src="assets/vendor_plugins/ckeditor/ckeditor.js"></script>
	<script>
		$(function () {
			CKEDITOR.replace('editor1', {height:300})
			CKEDITOR.replace('editor2', {height:300})
			CKEDITOR.replace('editor3', {height:300})
			CKEDITOR.replace('editor4', {height:300})
			CKEDITOR.replace('editor5', {height:300})
		});
	</script>


</body>

</html>