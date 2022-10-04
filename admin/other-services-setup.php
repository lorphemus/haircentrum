<?php
ob_start();
session_start();

if (!$_SESSION['user_mail']) {
	header("Location:login.php");
	exit();
}
$treeview = "about";
$page = "otherserv";
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
					Diğer Hizmetler
				</h3>
			</section>

			<!-- Title -->
			<section class="content">
				<div class="box">
					<div class="box-body">
						<?php
						$query = $db->prepare("SELECT * FROM otherserv WHERE id=?");
						$query->execute(array(0));
						$get_data = $query->fetch(PDO::FETCH_ASSOC);
						?>
						<!-- Other Services Title -->
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
											<input type="text" class="form-control" name="up_title_tr" value="<?php echo $get_data["up_title_tr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_2">
											<input type="text" class="form-control" name="up_title_en" value="<?php echo $get_data["up_title_en"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_3">
											<input type="text" class="form-control" name="up_title_ger" value="<?php echo $get_data["up_title_ger"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_4">
											<input type="text" class="form-control" name="up_title_fr" value="<?php echo $get_data["up_title_fr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_5">
											<input style="direction: rtl;" type="text" class="form-control" name="up_title_ar" value="<?php echo $get_data["up_title_ar"]; ?>" required>
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
												<input type="text" class="form-control" name="main_title_tr" value="<?php echo $get_data["main_title_tr"]; ?>" required>
											</div>
											<!-- /.tab-pane -->
											<div class="tab-pane" id="tab_7">
												<input type="text" class="form-control" name="main_title_en" value="<?php echo $get_data["main_title_en"]; ?>" required>
											</div>
											<!-- /.tab-pane -->
											<div class="tab-pane" id="tab_8">
												<input type="text" class="form-control" name="main_title_ger" value="<?php echo $get_data["main_title_ger"]; ?>" required>
											</div>
											<!-- /.tab-pane -->
											<div class="tab-pane" id="tab_9">
												<input type="text" class="form-control" name="main_title_fr" value="<?php echo $get_data["main_title_fr"]; ?>" required>
											</div>
											<!-- /.tab-pane -->
											<div class="tab-pane" id="tab_10">
												<input style="direction: rtl;" type="text" class="form-control" name="main_title_ar" value="<?php echo $get_data["main_title_ar"]; ?>" required>
											</div>
											<!-- /.tab-pane -->
										</div>
										<!-- /.tab-content -->
									</div>
									<!-- nav-tabs-custom -->
								</div>

							</div>
							<button type="submit" name="other_serv_title_update" class="btn btn-success"><i class="fa fa-refresh"></i> Güncelle</button>
						</form>
					</div>
				</div>

				<!-- Box 1 -->
				<div class="box">
					<div class="box-body">
						<?php
						$query = $db->prepare("SELECT * FROM otherserv WHERE id=?");
						$query->execute(array(0));
						$get_data = $query->fetch(PDO::FETCH_ASSOC);
						?>
						<!-- Title -->
						<form action="assets/process.php" method="post">
							<div class="col-md-12" style="padding: 0">
								<h3>1. Hizmet Başlık</h3>
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
											<input type="text" class="form-control" name="box1_title_tr" value="<?php echo $get_data["box1_title_tr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_12">
											<input type="text" class="form-control" name="box1_title_en" value="<?php echo $get_data["box1_title_en"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_13">
											<input type="text" class="form-control" name="box1_title_ger" value="<?php echo $get_data["box1_title_ger"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_14">
											<input type="text" class="form-control" name="box1_title_fr" value="<?php echo $get_data["box1_title_fr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_15">
											<input style="direction: rtl;" type="text" class="form-control" name="box1_title_ar" value="<?php echo $get_data["box1_title_ar"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- nav-tabs-custom -->
								
								<h3>1. Hizmet Yazı</h3>
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
											<textarea class="form-control" row="5" name="box1_text_tr" required><?php echo $get_data["box1_text_tr"]; ?></textarea>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_17">
											<textarea class="form-control" row="5" name="box1_text_en" required><?php echo $get_data["box1_text_en"]; ?></textarea>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_18">
											<textarea class="form-control" row="5" name="box1_text_ger" required><?php echo $get_data["box1_text_ger"]; ?></textarea>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_19">
											<textarea class="form-control" row="5" name="box1_text_fr" required><?php echo $get_data["box1_text_fr"]; ?></textarea>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_20">
											<textarea class="form-control" style="direction: rtl;" row="5" name="box1_text_ar" required><?php echo $get_data["box1_text_ar"]; ?></textarea>
										</div>
										<!-- /.tab-pane -->
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- nav-tabs-custom -->
							</div>
							<button type="submit" name="box1_update" class="btn btn-success"><i class="fa fa-refresh"></i> Güncelle</button>
						</form>
					</div>
				</div>

				<!-- Box 2 -->
				<div class="box">
					<div class="box-body">
						<?php
						$query = $db->prepare("SELECT * FROM otherserv WHERE id=?");
						$query->execute(array(0));
						$get_data = $query->fetch(PDO::FETCH_ASSOC);
						?>
						<!-- Title -->
						<form action="assets/process.php" method="post">
							<div class="col-md-12" style="padding: 0">
								<h3>2. Hizmet Başlık</h3>
								<!-- Custom Tabs -->
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#tab_21" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
										<li><a href="#tab_22" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
										<li><a href="#tab_23" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
										<li><a href="#tab_24" data-toggle="tab">Fransızca <img src="img/fr.png"></a></li>
										<li><a href="#tab_25" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="tab_21">
											<input type="text" class="form-control" name="box2_title_tr" value="<?php echo $get_data["box2_title_tr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_22">
											<input type="text" class="form-control" name="box2_title_en" value="<?php echo $get_data["box2_title_en"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_23">
											<input type="text" class="form-control" name="box2_title_ger" value="<?php echo $get_data["box2_title_ger"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_24">
											<input type="text" class="form-control" name="box2_title_fr" value="<?php echo $get_data["box2_title_fr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_25">
											<input style="direction: rtl;" type="text" class="form-control" name="box2_title_ar" value="<?php echo $get_data["box2_title_ar"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- nav-tabs-custom -->

								<h3>2. Hizmet Yazı</h3>
								<!-- Custom Tabs -->
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#tab_26" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
										<li><a href="#tab_27" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
										<li><a href="#tab_28" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
										<li><a href="#tab_29" data-toggle="tab">Fransızca <img src="img/fr.png"></a></li>
										<li><a href="#tab_30" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="tab_26">
											<textarea class="form-control" row="5" name="box2_text_tr" required><?php echo $get_data["box2_text_tr"]; ?></textarea>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_27">
											<textarea class="form-control" row="5" name="box2_text_en" required><?php echo $get_data["box2_text_en"]; ?></textarea>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_28">
											<textarea class="form-control" row="5" name="box1_text_ger" required><?php echo $get_data["box1_text_ger"]; ?></textarea>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_29">
											<textarea class="form-control" row="5" name="box2_text_fr" required><?php echo $get_data["box2_text_fr"]; ?></textarea>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_30">
											<textarea class="form-control" style="direction: rtl;" row="5" name="box2_text_ar" required><?php echo $get_data["box2_text_ar"]; ?></textarea>
										</div>
										<!-- /.tab-pane -->
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- nav-tabs-custom -->
							</div>
							<button type="submit" name="box2_update" class="btn btn-success"><i class="fa fa-refresh"></i> Güncelle</button>
						</form>

					</div>
				</div>

				<!-- Box 3 -->
				<div class="box">
					<div class="box-body">
						<?php
						$query = $db->prepare("SELECT * FROM otherserv WHERE id=?");
						$query->execute(array(0));
						$get_data = $query->fetch(PDO::FETCH_ASSOC);
						?>
						<!-- Title -->
						<form action="assets/process.php" method="post">
							<div class="col-md-12" style="padding: 0">
								<h3>3. Hizmet Başlık</h3>
								<!-- Custom Tabs -->
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#tab_31" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
										<li><a href="#tab_32" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
										<li><a href="#tab_33" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
										<li><a href="#tab_34" data-toggle="tab">Fransızca <img src="img/fr.png"></a></li>
										<li><a href="#tab_35" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="tab_31">
											<input type="text" class="form-control" name="box3_title_tr" value="<?php echo $get_data["box3_title_tr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_32">
											<input type="text" class="form-control" name="box3_title_en" value="<?php echo $get_data["box3_title_en"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_33">
											<input type="text" class="form-control" name="box3_title_ger" value="<?php echo $get_data["box3_title_ger"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_34">
											<input type="text" class="form-control" name="box3_title_fr" value="<?php echo $get_data["box3_title_fr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_35">
											<input style="direction: rtl;" type="text" class="form-control" name="box3_title_ar" value="<?php echo $get_data["box3_title_ar"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- nav-tabs-custom -->

								<h3>3. Hizmet Yazı</h3>
								<!-- Custom Tabs -->
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#tab_36" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
										<li><a href="#tab_37" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
										<li><a href="#tab_38" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
										<li><a href="#tab_39" data-toggle="tab">Fransızca <img src="img/fr.png"></a></li>
										<li><a href="#tab_40" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="tab_36">
											<textarea class="form-control" row="5" name="box3_text_tr" required><?php echo $get_data["box3_text_tr"]; ?></textarea>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_37">
											<textarea class="form-control" row="5" name="box3_text_en" required><?php echo $get_data["box3_text_en"]; ?></textarea>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_38">
											<textarea class="form-control" row="5" name="box3_text_ger" required><?php echo $get_data["box3_text_ger"]; ?></textarea>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_39">
											<textarea class="form-control" row="5" name="box3_text_fr" required><?php echo $get_data["box3_text_fr"]; ?></textarea>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_40">
											<textarea class="form-control" style="direction: rtl;" row="5" name="box3_text_ar" required><?php echo $get_data["box3_text_ar"]; ?></textarea>
										</div>
										<!-- /.tab-pane -->
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- nav-tabs-custom -->

							</div>
							<button type="submit" name="box3_update" class="btn btn-success"><i class="fa fa-refresh"></i> Güncelle</button>
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

	<!-- DropeZone JS -->
	<script src="js/dropzone.js"></script>
	<script>
		Dropzone.options.uploadImagesForm = {
			maxFilesize: 3,
			acceptedFiles: '.jpg, .jpeg, .png, .bmp',
			init: function() {
				this.on('success', function() {
					if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
						location.reload();
					}
				});
			}
		};
	</script>


</body>

</html>