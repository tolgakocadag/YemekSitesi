<?php session_start();ob_start();
 require "../backend/database/dbfunctions.php";
 require "../backend/generalfunctions.php";
  ?>

<!DOCTYPE html>
<html lang="tr">

<?php

if(isset($_GET['kategori']))
{
  $getCategoryName=getCategoryName($_GET['kategori']);
  foreach ($getCategoryName as $key => $value) {
    $subextitle=$value['category_NAME'];
    $subtitle=$value['category_NAME']." - Mükemmel Tarifler";
  }
}
else {
  $subextitle="Arama Sonucu";
  $subtitle="Arama Sonucu - Mükemmel Tarifler";
}

 ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-86060213-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-86060213-4');
</script>
<title><?php echo $subtitle; ?></title>
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/colors/green.css" id="colors">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
