<?php
/* SEO */
function seo($s) {
	$tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','Ä','ä','(',')','/',':',',');
	$eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','a','a','','','-','-','');
	$s = str_replace($tr,$eng,$s);
	$s = strtolower($s);
	$s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
	$s = preg_replace('/\s+/', '-', $s);
	$s = preg_replace('|-+|', '-', $s);
	$s = preg_replace('/#/', '', $s);
	$s = str_replace('.', '', $s);
	$s = trim($s, '-');
	return $s;
   }

/* Seçme */
function select($table_name, $setting, $id){
	include("connect.php");
	$query=$db->prepare("SELECT * FROM $table_name WHERE id=$id");
	$query->execute();
	$get_set=$query->fetch(PDO::FETCH_ASSOC);
	return $get_set["$setting"];
}
?>