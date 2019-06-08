<?php

$ip=GetIP();
if($_SESSION[$ip]!=$recid)
{
  $_SESSION[$ip]=$recid;
  hitplus($recid);
}

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

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--Title-->
<title><?php echo $title; ?></title>

<!-- Meta Tags -->

<?php
$sql_list=getDB('metatags');
foreach ($sql_list as $key => $value) {
  $metatag_name=$value['metatag_NAME'];
  $metatag_content=$value['metatag_CONTENT'];
  if($metatag_name!='copyright'&&$metatag_name!='title'&&$metatag_name!='description'&&$metatag_name!='keywords'){
    echo "<meta name='{$metatag_name}' content='{$metatag_content}'>";
  }
}
 ?>
    <meta name='title' content='<?php echo $title; ?>'>
    <meta name='description' content='<?php echo $description; ?>' />
    <meta name='keywords' content='<?php echo $tags; ?>'>

<!-- CSS
================================================== -->
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/colors/green.css" id="colors">
<!--H2 SİNGLE PAGE FONT-->
<link href="https://fonts.googleapis.com/css?family=Caveat:700&display=swap" rel="stylesheet">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">
