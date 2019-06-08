<?php session_start();ob_start();
 require "backend/database/dbfunctions.php";
 require "backend/generalfunctions.php";
  ?>

<!DOCTYPE html>
<html lang="tr">
<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-86060213-4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-86060213-4');
  </script>


<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Mükemmel Tarifler</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Meta Tags -->

<?php
$sql_list=getDB('metatags');
foreach ($sql_list as $key => $value) {
  $metatag_name=$value['metatag_NAME'];
  $metatag_content=$value['metatag_CONTENT'];
  echo "<meta name='{$metatag_name}' content='{$metatag_content}'>";
}
 ?>

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/green.css" id="colors">
<!--H2 SİNGLE PAGE FONT-->
<link href="https://fonts.googleapis.com/css?family=Caveat:700&display=swap" rel="stylesheet">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
