<?php
ob_start();
session_start();

if(!$_SESSION['user_mail']){
	header("Location:login.php");
	exit();
}
$page="contactsetup";
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
        Site İletişim Ayarları
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">
	<?php 
	$contact_query=$db->prepare("SELECT * FROM contact_settings WHERE id=?");
	$contact_query->execute(array(0));
	$get_contact=$contact_query->fetch(PDO::FETCH_ASSOC);
	?>
      <!-- Default box -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Genel İletişim Bilgileri</h3>
		</div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
				<form action="assets/process.php" method="post">
					<div class="form-group clearfix">
					  <label class="col-sm-2 col-form-label"><i class="fa fa-phone"></i> Telefon</label>
					  <div class="col-sm-10">
						<input class="form-control" name="phone" type="tel" value="<?php echo $get_contact["phone"]; ?>" required>
					  </div>
					</div>
					<div class="form-group clearfix">
					  <label class="col-sm-2 col-form-label"><i class="fa fa-whatsapp"></i> Whatsapp</label>
					  <div class="col-sm-10">
						<input class="form-control" name="whatsapp" type="tel" value="<?php echo $get_contact["whatsapp"]; ?>" required>
					  </div>
					</div>
					<div class="form-group clearfix">
					  <label class="col-sm-2 col-form-label"><i class="fa fa-envelope"></i> Email</label>
					  <div class="col-sm-10">
						<input class="form-control" name="mail" type="email" value="<?php echo $get_contact["mail"]; ?>" required>
					  </div>
					</div>
					<div class="form-group clearfix">
					  <label class="col-sm-2 col-form-label"><i class="fa fa-map-pin"></i> Adres</label>
					  <div class="col-sm-10">
						<input class="form-control" type="text" name="address" value="<?php echo $get_contact["address"]; ?>" required>
					  </div>
					</div>
					<div class="form-group clearfix">
					  <label class="col-sm-2 col-form-label"><i class="fa fa-map"></i> Google Map | <small>Iframe kodunu girin</small></label>
					  <div class="col-sm-10">
						<textarea name="google_map" class="form-control" cols="30" rows="10" required><?php echo $get_contact["google_map"]; ?></textarea>
					  </div>
					</div>
					<button type="submit" name="contact_update" class="btn btn-success"><i class="fa fa-check"></i> Güncelle</button>
				</form>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
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

<!-- Sweet Alert Sessions -->
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
