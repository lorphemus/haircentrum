<?php
ob_start();
session_start();
include 'connect.php';

if(!empty($_FILES))
{
  $uploads_dir = '../../img/gallery';
	@$tmp_name = $_FILES['file']["tmp_name"];
	@$name = $_FILES['file']["name"];
	$name=preg_replace("/[^a-zA-Z0-9.]/", "", $name);
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$kaydet=$db->prepare("INSERT INTO gallery SET

		pic_url=:resimyol");

	$insert=$kaydet->execute(array(

		'resimyol' => $refimgyol

		));
}
?>
