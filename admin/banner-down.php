<?php
ob_start();
session_start();

if (!$_SESSION['user_mail']) {
	header("Location:login.php");
	exit();
}
$treeview = "home";
$page = "down-slider";
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
					Slider Alt Alan
				</h3>
			</section>
			<!-- Main content -->
			<section class="content">

				<!-- Card box 1 -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Öne Çıkarılan Hizmet 1</h3>
					</div>

					<?php 
					$query=$db->prepare("SELECT * FROM banner_down WHERE id=?");
					$query->execute(array(1));
					$get_data=$query->fetch(PDO::FETCH_ASSOC);
					?>
					<form action="assets/process.php" method="post">
						<div class="box-body">
							<div class="col-md-12" style="padding: 0">
								<!-- Custom Tabs -->
								<h3>Başlık</h3>
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#tab_1" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
										<li><a href="#tab_2" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
										<li><a href="#tab_3" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
										<li><a href="#tab_4" data-toggle="tab">Fransızca <img src="img/fr.png"></a></li>
										<li><a href="#tab_5" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
									</ul>
									<div class="tab-content">
										<!-- /.tab-pane -->
										<div class="tab-pane active" id="tab_1">
											<input type="text" class="form-control" name="title_tr" value="<?php echo $get_data["title_tr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_2">
											<input type="text" class="form-control" name="title_en" value="<?php echo $get_data["title_en"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_3">
											<input type="text" class="form-control" name="title_ger" value="<?php echo $get_data["title_ger"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_4">
											<input type="text" class="form-control" name="title_fr" value="<?php echo $get_data["title_fr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_5">
											<input style="direction: rtl;" type="text" class="form-control" name="title_ar" value="<?php echo $get_data["title_ar"]; ?>" required>
										</div>
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- nav-tabs-custom -->
							</div>

							<div class="col-md-12" style="padding: 0">
								<!-- Custom Tabs -->
								<h3>Kısa Açıklama</h3>
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#tab_6" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
										<li><a href="#tab_7" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
										<li><a href="#tab_8" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
										<li><a href="#tab_9" data-toggle="tab">Fransızca <img src="img/fr.png"></a></li>
										<li><a href="#tab_10" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
									</ul>
									<div class="tab-content">
										<!-- /.tab-pane -->
										<div class="tab-pane active" id="tab_6">
											<input type="text" class="form-control" name="text_tr" value="<?php echo $get_data["text_tr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_7">
											<input type="text" class="form-control" name="text_en" value="<?php echo $get_data["text_en"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_8">
											<input type="text" class="form-control" name="text_ger" value="<?php echo $get_data["text_ger"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_9">
											<input type="text" class="form-control" name="text_fr" value="<?php echo $get_data["text_fr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_10">
											<input style="direction: rtl;" type="text" class="form-control" name="text_ar" value="<?php echo $get_data["text_ar"]; ?>" required>
										</div>
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- nav-tabs-custom -->
							</div>
						</div>
						<!-- /.box-body -->

						<div class="box-body">
							<div class="demo-radio-button">
								<div class="col-md-3">
									<img src="../assets/img/icon/1.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_1" class="with-gap radio-col-teal" value="1" required/>
									<label for="radio_1">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/2.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_2" class="with-gap radio-col-teal" value="2" required/>
									<label for="radio_2">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/3.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_3" class="with-gap radio-col-teal" value="3" required/>
									<label for="radio_3">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/4.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_4" class="with-gap radio-col-teal" value="4" required/>
									<label for="radio_4">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/5.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_5" class="with-gap radio-col-teal" value="5" required/>
									<label for="radio_5">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/6.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_6" class="with-gap radio-col-teal" value="6" required/>
									<label for="radio_6">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/7.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_7" class="with-gap radio-col-teal" value="7" required/>
									<label for="radio_7">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/8.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_8" class="with-gap radio-col-teal" value="8" required/>
									<label for="radio_8">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/9.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_9" class="with-gap radio-col-teal" value="9" required/>
									<label for="radio_9">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/10.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_10" class="with-gap radio-col-teal" value="10" required/>
									<label for="radio_10">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/11.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_11" class="with-gap radio-col-teal" value="11" required/>
									<label for="radio_11">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/12.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_12" class="with-gap radio-col-teal" value="12" required/>
									<label for="radio_12">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/13.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_13" class="with-gap radio-col-teal" value="13" required/>
									<label for="radio_13">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/14.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_14" class="with-gap radio-col-teal" value="14" required/>
									<label for="radio_14">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/15.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_15" class="with-gap radio-col-teal" value="15" required/>
									<label for="radio_15">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/16.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_16" class="with-gap radio-col-teal" value="16" required/>
									<label for="radio_16">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/17.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_17" class="with-gap radio-col-teal" value="17" required/>
									<label for="radio_17">Ikonu Seçin</label>
								</div>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-xody">
							<div class="box-header with-border">
								<h3 class="box-title">Yönlenecek Sayfayı Seçin</h3>
							</div>
							<div class="form-group col-md-12">
								<select class="form-control" id="sel1" name="box_link" required>
									<option disabled selected value="">Hizmet Seçin</option>
									<?php 
									$query=$db->prepare("SELECT * FROM services ORDER BY service_rank ASC");
									$query->execute();
									$services=$query->fetchAll();
									foreach($services as $service){
									?>
									<option value="<?php echo $service["id"]; ?>"><?php echo $service["service_title_tr"]; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="box-footer">
							<a href="home.php" class="btn btn-danger"><i class="fa fa-arrow-circle-o-left"></i> Vazgeç</a>
							<button type="submit" name="card_update1" class="btn btn-success"><i class="fa fa-refresh"></i> Güncelle</button>
						</div>
					</form>	<!-- /.box-footer-->
				</div>
				<!-- /.Card box -->

				<!-- Card box 2 -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Öne Çıkarılan Hizmet 2</h3>
					</div>

					<?php 
					$query=$db->prepare("SELECT * FROM banner_down WHERE id=?");
					$query->execute(array(2));
					$get_data=$query->fetch(PDO::FETCH_ASSOC);
					?>
					<form action="assets/process.php" method="post">
						<div class="box-body">
							<div class="col-md-12" style="padding: 0">
								<!-- Custom Tabs -->
								<h3>Başlık</h3>
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#tab_11" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
										<li><a href="#tab_12" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
										<li><a href="#tab_13" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
										<li><a href="#tab_14" data-toggle="tab">Fransızca <img src="img/fr.png"></a></li>
										<li><a href="#tab_15" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
									</ul>
									<div class="tab-content">
										<!-- /.tab-pane -->
										<div class="tab-pane active" id="tab_11">
											<input type="text" class="form-control" name="title_tr" value="<?php echo $get_data["title_tr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_12">
											<input type="text" class="form-control" name="title_en" value="<?php echo $get_data["title_en"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_13">
											<input type="text" class="form-control" name="title_ger" value="<?php echo $get_data["title_ger"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_14">
											<input type="text" class="form-control" name="title_fr" value="<?php echo $get_data["title_fr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_15">
											<input style="direction: rtl;" type="text" class="form-control" name="title_ar" value="<?php echo $get_data["title_ar"]; ?>" required>
										</div>
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- nav-tabs-custom -->
							</div>

							<div class="col-md-12" style="padding: 0">
								<!-- Custom Tabs -->
								<h3>Kısa Açıklama</h3>
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#tab_16" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
										<li><a href="#tab_17" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
										<li><a href="#tab_18" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
										<li><a href="#tab_19" data-toggle="tab">Fransızca <img src="img/fr.png"></a></li>
										<li><a href="#tab_20" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
									</ul>
									<div class="tab-content">
										<!-- /.tab-pane -->
										<div class="tab-pane active" id="tab_16">
											<input type="text" class="form-control" name="text_tr" value="<?php echo $get_data["text_tr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_17">
											<input type="text" class="form-control" name="text_en" value="<?php echo $get_data["text_en"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_18">
											<input type="text" class="form-control" name="text_ger" value="<?php echo $get_data["text_ger"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_19">
											<input type="text" class="form-control" name="text_fr" value="<?php echo $get_data["text_fr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_20">
											<input style="direction: rtl;" type="text" class="form-control" name="text_ar" value="<?php echo $get_data["text_ar"]; ?>" required>
										</div>
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- nav-tabs-custom -->
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-body">
							<div class="demo-radio-button">
								<div class="col-md-3">
									<img src="../assets/img/icon/1.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_18" class="with-gap radio-col-teal" value="1" required/>
									<label for="radio_18">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/2.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_19" class="with-gap radio-col-teal" value="2" required/>
									<label for="radio_19">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/3.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_20" class="with-gap radio-col-teal" value="3" required/>
									<label for="radio_20">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/4.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_21" class="with-gap radio-col-teal" value="4" required/>
									<label for="radio_21">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/5.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_22" class="with-gap radio-col-teal" value="5" required/>
									<label for="radio_22">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/6.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_23" class="with-gap radio-col-teal" value="6" required/>
									<label for="radio_23">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/7.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_24" class="with-gap radio-col-teal" value="7" required/>
									<label for="radio_24">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/8.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_25" class="with-gap radio-col-teal" value="8" required/>
									<label for="radio_25">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/9.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_26" class="with-gap radio-col-teal" value="9" required/>
									<label for="radio_26">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/10.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_27" class="with-gap radio-col-teal" value="10" required/>
									<label for="radio_27">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/11.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_28" class="with-gap radio-col-teal" value="11" required/>
									<label for="radio_28">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/12.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_29" class="with-gap radio-col-teal" value="12" required/>
									<label for="radio_29">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/13.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_30" class="with-gap radio-col-teal" value="13" required/>
									<label for="radio_30">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/14.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_31" class="with-gap radio-col-teal" value="14" required/>
									<label for="radio_31">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/15.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_32" class="with-gap radio-col-teal" value="15" required/>
									<label for="radio_32">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/16.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_33" class="with-gap radio-col-teal" value="16" required/>
									<label for="radio_33">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/17.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_34" class="with-gap radio-col-teal" value="17" required/>
									<label for="radio_34">Ikonu Seçin</label>
								</div>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-xody">
							<div class="box-header with-border">
								<h3 class="box-title">Yönlenecek Sayfayı Seçin</h3>
							</div>
							<div class="form-group col-md-12">
								<select class="form-control" id="sel1" name="box_link" required>
									<option disabled selected value="">Hizmet Seçin</option>
									<?php 
									$query=$db->prepare("SELECT * FROM services ORDER BY service_rank ASC");
									$query->execute();
									$services=$query->fetchAll();
									foreach($services as $service){
									?>
									<option value="<?php echo $service["id"]; ?>"><?php echo $service["service_title_tr"]; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="box-footer">
							<a href="home.php" class="btn btn-danger"><i class="fa fa-arrow-circle-o-left"></i> Vazgeç</a>
							<button type="submit" name="card_update2" class="btn btn-success"><i class="fa fa-refresh"></i> Güncelle</button>
						</div>
					</form>	<!-- /.box-footer-->
				</div>
				<!-- /.Card box -->

				<!-- Card box 3 -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Öne Çıkarılan Hizmet 3</h3>
					</div>

					<?php 
					$query=$db->prepare("SELECT * FROM banner_down WHERE id=?");
					$query->execute(array(3));
					$get_data=$query->fetch(PDO::FETCH_ASSOC);
					?>
					<form action="assets/process.php" method="post">
						<div class="box-body">
							<div class="col-md-12" style="padding: 0">
								<!-- Custom Tabs -->
								<h3>Başlık</h3>
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#tab_21" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
										<li><a href="#tab_22" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
										<li><a href="#tab_23" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
										<li><a href="#tab_24" data-toggle="tab">Fransızca <img src="img/fr.png"></a></li>
										<li><a href="#tab_25" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
									</ul>
									<div class="tab-content">
										<!-- /.tab-pane -->
										<div class="tab-pane active" id="tab_21">
											<input type="text" class="form-control" name="title_tr" value="<?php echo $get_data["title_tr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_22">
											<input type="text" class="form-control" name="title_en" value="<?php echo $get_data["title_en"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_23">
											<input type="text" class="form-control" name="title_ger" value="<?php echo $get_data["title_ger"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_24">
											<input type="text" class="form-control" name="title_fr" value="<?php echo $get_data["title_fr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_25">
											<input style="direction: rtl;" type="text" class="form-control" name="title_ar" value="<?php echo $get_data["title_ar"]; ?>" required>
										</div>
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- nav-tabs-custom -->
							</div>

							<div class="col-md-12" style="padding: 0">
								<!-- Custom Tabs -->
								<h3>Kısa Açıklama</h3>
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#tab_26" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
										<li><a href="#tab_27" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
										<li><a href="#tab_28" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
										<li><a href="#tab_29" data-toggle="tab">Fransızca <img src="img/fr.png"></a></li>
										<li><a href="#tab_30" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
									</ul>
									<div class="tab-content">
										<!-- /.tab-pane -->
										<div class="tab-pane active" id="tab_26">
											<input type="text" class="form-control" name="text_tr" value="<?php echo $get_data["text_tr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_27">
											<input type="text" class="form-control" name="text_en" value="<?php echo $get_data["text_en"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_28">
											<input type="text" class="form-control" name="text_ger" value="<?php echo $get_data["text_ger"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_29">
											<input type="text" class="form-control" name="text_fr" value="<?php echo $get_data["text_fr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_30">
											<input style="direction: rtl;" type="text" class="form-control" name="text_ar" value="<?php echo $get_data["text_ar"]; ?>" required>
										</div>
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- nav-tabs-custom -->
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-body">
							<div class="demo-radio-button">
								<div class="col-md-3">
									<img src="../assets/img/icon/1.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_35" class="with-gap radio-col-teal" value="1" required/>
									<label for="radio_35">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/2.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_36" class="with-gap radio-col-teal" value="2" required/>
									<label for="radio_36">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/3.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_37" class="with-gap radio-col-teal" value="3" required/>
									<label for="radio_37">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/4.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_38" class="with-gap radio-col-teal" value="4" required/>
									<label for="radio_38">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/5.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_39" class="with-gap radio-col-teal" value="5" required/>
									<label for="radio_39">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/6.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_40" class="with-gap radio-col-teal" value="6" required/>
									<label for="radio_40">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/7.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_41" class="with-gap radio-col-teal" value="7" required/>
									<label for="radio_41">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/8.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_42" class="with-gap radio-col-teal" value="8" required/>
									<label for="radio_42">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/9.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_43" class="with-gap radio-col-teal" value="9" required/>
									<label for="radio_43">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/10.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_44" class="with-gap radio-col-teal" value="10" required/>
									<label for="radio_44">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/11.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_45" class="with-gap radio-col-teal" value="11" required/>
									<label for="radio_45">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/12.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_46" class="with-gap radio-col-teal" value="12" required/>
									<label for="radio_46">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/13.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_47" class="with-gap radio-col-teal" value="13" required/>
									<label for="radio_47">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/14.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_48" class="with-gap radio-col-teal" value="14" required/>
									<label for="radio_48">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/15.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_49" class="with-gap radio-col-teal" value="15" required/>
									<label for="radio_49">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/16.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_50" class="with-gap radio-col-teal" value="16" required/>
									<label for="radio_50">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/17.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_51" class="with-gap radio-col-teal" value="17" required/>
									<label for="radio_51">Ikonu Seçin</label>
								</div>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-xody">
							<div class="box-header with-border">
								<h3 class="box-title">Yönlenecek Sayfayı Seçin</h3>
							</div>
							<div class="form-group col-md-12">
								<select class="form-control" id="sel1" name="box_link" required>
									<option disabled selected value="">Hizmet Seçin</option>
									<?php 
									$query=$db->prepare("SELECT * FROM services ORDER BY service_rank ASC");
									$query->execute();
									$services=$query->fetchAll();
									foreach($services as $service){
									?>
									<option value="<?php echo $service["id"]; ?>"><?php echo $service["service_title_tr"]; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="box-footer">
							<a href="home.php" class="btn btn-danger"><i class="fa fa-arrow-circle-o-left"></i> Vazgeç</a>
							<button type="submit" name="card_update3" class="btn btn-success"><i class="fa fa-refresh"></i> Güncelle</button>
						</div>
					</form>	<!-- /.box-footer-->
				</div>
				<!-- /.Card box -->

				<!-- Card box 4 -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Öne Çıkarılan Hizmet 4</h3>
					</div>

					<?php 
					$query=$db->prepare("SELECT * FROM banner_down WHERE id=?");
					$query->execute(array(4));
					$get_data=$query->fetch(PDO::FETCH_ASSOC);
					?>
					<form action="assets/process.php" method="post">
						<div class="box-body">
							<div class="col-md-12" style="padding: 0">
								<!-- Custom Tabs -->
								<h3>Başlık</h3>
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#tab_31" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
										<li><a href="#tab_32" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
										<li><a href="#tab_33" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
										<li><a href="#tab_34" data-toggle="tab">Fransızca <img src="img/fr.png"></a></li>
										<li><a href="#tab_35" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
									</ul>
									<div class="tab-content">
										<!-- /.tab-pane -->
										<div class="tab-pane active" id="tab_31">
											<input type="text" class="form-control" name="title_tr" value="<?php echo $get_data["title_tr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_32">
											<input type="text" class="form-control" name="title_en" value="<?php echo $get_data["title_en"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_33">
											<input type="text" class="form-control" name="title_ger" value="<?php echo $get_data["title_ger"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_34">
											<input type="text" class="form-control" name="title_fr" value="<?php echo $get_data["title_fr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_35">
											<input style="direction: rtl;" type="text" class="form-control" name="title_ar" value="<?php echo $get_data["title_ar"]; ?>" required>
										</div>
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- nav-tabs-custom -->
							</div>

							<div class="col-md-12" style="padding: 0">
								<!-- Custom Tabs -->
								<h3>Kısa Açıklama</h3>
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#tab_36" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
										<li><a href="#tab_37" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
										<li><a href="#tab_38" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
										<li><a href="#tab_39" data-toggle="tab">Fransızca <img src="img/fr.png"></a></li>
										<li><a href="#tab_40" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
									</ul>
									<div class="tab-content">
										<!-- /.tab-pane -->
										<div class="tab-pane active" id="tab_36">
											<input type="text" class="form-control" name="text_tr" value="<?php echo $get_data["text_tr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_37">
											<input type="text" class="form-control" name="text_en" value="<?php echo $get_data["text_en"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_38">
											<input type="text" class="form-control" name="text_ger" value="<?php echo $get_data["text_ger"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_39">
											<input type="text" class="form-control" name="text_fr" value="<?php echo $get_data["text_fr"]; ?>" required>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="tab_40">
											<input style="direction: rtl;" type="text" class="form-control" name="text_ar" value="<?php echo $get_data["text_ar"]; ?>" required>
										</div>
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- nav-tabs-custom -->
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-body">
							<div class="demo-radio-button">
								<div class="col-md-3">
									<img src="../assets/img/icon/1.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_52" class="with-gap radio-col-teal" value="1" required/>
									<label for="radio_52">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/2.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_53" class="with-gap radio-col-teal" value="2" required/>
									<label for="radio_53">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/3.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_54" class="with-gap radio-col-teal" value="3" required/>
									<label for="radio_54">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/4.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_55" class="with-gap radio-col-teal" value="4" required/>
									<label for="radio_55">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/5.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_56" class="with-gap radio-col-teal" value="5" required/>
									<label for="radio_56">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/6.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_57" class="with-gap radio-col-teal" value="6" required/>
									<label for="radio_57">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/7.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_58" class="with-gap radio-col-teal" value="7" required/>
									<label for="radio_58">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/8.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_59" class="with-gap radio-col-teal" value="8" required/>
									<label for="radio_59">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/9.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_60" class="with-gap radio-col-teal" value="9" required/>
									<label for="radio_60">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/10.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_61" class="with-gap radio-col-teal" value="10" required/>
									<label for="radio_61">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/11.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_62" class="with-gap radio-col-teal" value="11" required/>
									<label for="radio_62">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/12.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_63" class="with-gap radio-col-teal" value="12" required/>
									<label for="radio_63">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/13.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_64" class="with-gap radio-col-teal" value="13" required/>
									<label for="radio_64">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/14.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_65" class="with-gap radio-col-teal" value="14" required/>
									<label for="radio_65">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/15.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_66" class="with-gap radio-col-teal" value="15" required/>
									<label for="radio_66">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/16.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_67" class="with-gap radio-col-teal" value="16" required/>
									<label for="radio_67">Ikonu Seçin</label>
								</div>

								<div class="col-md-3">
									<img src="../assets/img/icon/17.png" class="img-fluid" width="40px;">
									<input name="icon" type="radio" id="radio_68" class="with-gap radio-col-teal" value="17" required/>
									<label for="radio_68">Ikonu Seçin</label>
								</div>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-xody">
							<div class="box-header with-border">
								<h3 class="box-title">Yönlenecek Sayfayı Seçin</h3>
							</div>
							<div class="form-group col-md-12">
								<select class="form-control" id="sel1" name="box_link" required>
									<option disabled selected value="">Hizmet Seçin</option>
									<?php 
									$query=$db->prepare("SELECT * FROM services ORDER BY service_rank ASC");
									$query->execute();
									$services=$query->fetchAll();
									foreach($services as $service){
									?>
									<option value="<?php echo $service["id"]; ?>"><?php echo $service["service_title_tr"]; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="box-footer">
							<a href="home.php" class="btn btn-danger"><i class="fa fa-arrow-circle-o-left"></i> Vazgeç</a>
							<button type="submit" name="card_update4" class="btn btn-success"><i class="fa fa-refresh"></i> Güncelle</button>
						</div>
					</form>	<!-- /.box-footer-->
				</div>
				<!-- /.Card box -->
			</section>
		</div>
		<!-- /.content-wrapper -->

		<!-- Footer -->
		<?php include("assets/footer.php"); ?>
		<!-- Footer END -->

		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->

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