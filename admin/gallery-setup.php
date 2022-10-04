<?php
ob_start();
session_start();

if(!$_SESSION['user_mail']){
	header("Location:login.php");
	exit();
}
$treeview="gallery";
$page="gallerylist";
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
	.dropzone{
		border:2px dashed #444;
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
        Öncesi Sonrası Galeri
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">
	  <!-- Default box -->
      <div class="box">
        <div class="box-body">
		<h3>Galeri Resim</h3>
			<form id="uploadImagesForm" role="form" class="dropzone" action="assets/galleryimageadd.php" method="post" enctype="multipart/form-data" style="width:100%;">
							
				<div class="dz-message" data-dz-message>
					<span><i class="fa fa-image fa-3x" ></i></span><br>
					<span>Yüklemek istediğiniz resimleri bu alana sürükleyip bırakın... (Veya tıklayın)</span>
				</div>

			</form>
		</div>
		<!-- /.box-body -->
		
		<!-- Gallery -->
		<div class="box">
			<form role="form" action="assets/process.php" method="post">
			<div class="box-body">
				<div class="row">
					  <?php 
					  $query=$db->prepare("SELECT * FROM gallery ORDER BY id ASC");
					  $query->execute();
					  $pics=$query->fetchAll();
					  $id=1;
					  foreach($pics as $pic){
					  ?>
					  <div class="col-md-4">
						<div class="thumbnail">
						    <img class="img-fluid" src="../<?php echo $pic["pic_url"]; ?>" alt="Lights" style="width:50%">
							<div class="checkbox">
								<input type="checkbox" id="md_checkbox<?php echo $id;?>" class="filled-in chk-col-red" name="delete_gallery[]" value="<?php echo $pic['id']; ?>" />
								<label for="md_checkbox<?php echo $id;?>">Silmek İçin Seçin</label>
							</div>
						</div>
					  </div>
					  <?php $id++; } ?>
				</div>
			</div>
			<div class="box-footer">
			  <button type="submit" class="btn btn-danger" name="delete_galleryimages"><i class="fa fa-trash"></i> Seçilen Resimleri Sil</button>
			</div>
			</form>	
		</div>
		  
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
		this.on('success', function(){
			if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
     				location.reload();
				}
	    	});
		}
	};
	</script>
	

</body>

</html>
