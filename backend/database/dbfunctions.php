<?php
require "dbcon.php";

//Veri Çekme
function getDB($tableName){
  $getDBs =  $GLOBALS['db']->query("SELECT * FROM $tableName")->fetchAll(PDO::FETCH_ASSOC);
  return $getDBs;
}

function getDBDESCcategory(){
  $getDB =  $GLOBALS['db']->query("SELECT * FROM categories ORDER BY category_NAME DESC")->fetchAll(PDO::FETCH_ASSOC);
  return $getDB;
}

//veri çekme son 9 Tarifler
function getDBLast(){
  $getDB =  $GLOBALS['db']->query("SELECT * FROM recides ORDER BY recides_ID DESC LIMIT 9")->fetchAll(PDO::FETCH_ASSOC);
  return $getDB;
}

//singlepage urlye göre listele
function getDBURL($url){
  $getDB =  $GLOBALS['db']->query("SELECT * FROM recides WHERE recides_URL='{$url}'")->fetchAll(PDO::FETCH_ASSOC);
  return $getDB;
}

//Sayfa her görüntülendiğinde +1 ekle..
function hitplus($recid){
  $query = $GLOBALS['db']->prepare("UPDATE recides SET recides_HIT = recides_HIT+1 WHERE recides_ID = ? ");
  $update = $query->execute(array($recid));
  $update=null;
}

//singlepage urlye göre listele
function getDBSEARCHRAND($get){
  $getDB =  $GLOBALS['db']->query("SELECT * FROM recides WHERE category_ID='{$get}' ORDER BY RAND() LIMIT 9")->fetchAll(PDO::FETCH_ASSOC);
  return $getDB;
}

//tarif tablosu  idye göre listele
function getDBid($id){
  $getDB =  $GLOBALS['db']->query("SELECT * FROM recides WHERE recides_ID='{$id}'")->fetchAll(PDO::FETCH_ASSOC);
  return $getDB;
}

//Tarifler tablosu azalan sıralama
function getDBDESC(){
  $getDB =  $GLOBALS['db']->query("SELECT * FROM recides ORDER BY recides_HIT DESC LIMIT 4")->fetchAll(PDO::FETCH_ASSOC);
  return $getDB;
}

//Categoru urlye göre category name çağırma fonksiyonu
function getCategoryName($catUrl){
  $getDB =  $GLOBALS['db']->query("SELECT * FROM categories WHERE category_URL = '{$catUrl}'")->fetchAll(PDO::FETCH_ASSOC);
  return $getDB;
}

//Hangi kategoride geziliyor ise ona göre rastgele listeleyerek 3 adet tarifi gösterme
function getDBHowCategory($category){
  $getDB =  $GLOBALS['db']->query("SELECT * FROM recides WHERE category_ID='{$category}' ORDER BY RAND() LIMIT 3")->fetchAll(PDO::FETCH_ASSOC);
  return $getDB;
}

//KATEGORİ İŞLEMLERİ
//********************************************************************************************************************
//Kategori Ekleme
function CategoryAdd($tableName,$categoryName){
  $replacetr=replace_tr($categoryName);
  $explode= multiexplode(array(",","|",'"','.',"{","!","#",">","<","/","*","+","-","=","%","&","*",";","}","[","]","(",")"," ","?"),$replacetr);
  foreach ($explode as $key => $value) {
      $submit.=$explode[$key]."-";
  }
  $submit=rtrim($submit,"-");
  mkdir('../tarifler/'.$submit);
  $query = $GLOBALS['db']->prepare("INSERT INTO $tableName SET category_NAME = ? , category_URL = ?");
  $insert = $query->execute(array($categoryName,$submit));
  $insert=null;
  header("location: /admin/categories.php");
}

//Kategori Güncelleme
function CategoryEdit($tableName,$categoryName,$categoryId,$categoryURL){
  $replacetr=replace_tr($categoryName);
  $explode= multiexplode(array(",","|",'"','.',"{","!","#",">","<","/","*","+","-","=","%","&","*",";","}","[","]","(",")"," ","?"),$replacetr);
  foreach ($explode as $key => $value) {
      $submit.=$explode[$key]."-";
  }
  $submit=rtrim($submit,"-");
  rename('../tarifler/'.$categoryURL, '../tarifler/'.$submit);
  $query = $GLOBALS['db']->prepare("UPDATE $tableName SET category_NAME = ? , category_URL = ? WHERE category_ID = ?");
  $update = $query->execute(array($categoryName,$submit,$categoryId));
  $update=null;
  header("location: /admin/categories.php");
}

//Kategori Silme
function CategoryDelete($tableName,$categoryId) {
  $query = $GLOBALS['db']->prepare("DELETE FROM $tableName WHERE category_ID = ?");
  $delete = $query->execute(array($categoryId));
  $delete=null;
  header("location: /admin/categories.php");
}

//KATEGORİ TABLOSU İÇİN İÇERİK SAYISI BULMA
function countCategory($categoryId){
  $stmt = $GLOBALS['db']->prepare("SELECT count(*) FROM recides WHERE category_ID = ?");
  $stmt->execute([$categoryId]);
  $count = $stmt->fetchColumn();
  return $count;
}

//TARİF İŞLEMLERİ
//**************************************************************************************

//Tarif ekleme
function RecideAdd($tableName,$title,$ingredients,$directions,$explanation,$cooking,$preptime,$serves,$categoryId,$frontexplanation,$description,$tags,$fileimage1,$fileimage2,$fileimage3,$fileimage4)
{
  require_once("../backend/php_watermark.php");
  $replacetr=replace_tr($title);
  $explode= multiexplode(array(",","|",'"','.',"{","!","#",">","<","/","*","+","-","=","%","&","*",";","}","[","]","(",")"," ","?"),$replacetr);
  foreach ($explode as $key => $value) {
      $submit.=$explode[$key]."-";
  }
  $submit=rtrim($submit,"-");
  $value=rand(1,30000);
  mkdir('../tarifler/'.$categoryId.'/'.$submit.'-'.$value);
  touch('../tarifler/'.$categoryId.'/'.$submit.'-'.$value.'/'.$submit.'.php');
  $image_url="../tarifler/{$categoryId}/{$submit}-{$value}";
  $post_image="";
  if(strlen($fileimage1)>0)
  {
    $post_images = $fileimage1;
    copy($post_images, $image_url.'/'. $_FILES['about_image1']['name']);
    $post_image.="{$image_url}/{$_FILES['about_image1']['name']}";
    $post_image2="{$image_url}/{$_FILES['about_image1']['name']}";
    $watermarkimage=new imageLib($post_image2);
    $watermarkimage->addWatermark('../images/logo/logo4.png','br',140);
    $watermarkimage->saveImage('../images/changeimg/newimg.png');
    rename('../images/changeimg/newimg.png', $image_url.'/'.$_FILES['about_image1']['name']);
    $post_image.=",";
  }
  if(strlen($fileimage2)>0)
  {
    $post_images = $fileimage2;
    copy($post_images, $image_url.'/'. $_FILES['about_image2']['name']);
    $post_image.="{$image_url}/{$_FILES['about_image2']['name']}";
    $post_image2="{$image_url}/{$_FILES['about_image2']['name']}";
    $watermarkimage=new imageLib($post_image2);
    $watermarkimage->addWatermark('../images/logo/logo4.png','br',40);
    $watermarkimage->saveImage('../images/changeimg/newimg.png');
    rename('../images/changeimg/newimg.png', $image_url.'/'.$_FILES['about_image2']['name']);
    $post_image.=",";
  }
  if(strlen($fileimage3)>0)
  {
    $post_images = $fileimage3;
    copy($post_images, $image_url.'/'. $_FILES['about_image3']['name']);
    $post_image.="{$image_url}/{$_FILES['about_image3']['name']}";
    $post_image2="{$image_url}/{$_FILES['about_image3']['name']}";
    $watermarkimage=new imageLib($post_image2);
    $watermarkimage->addWatermark('../images/logo/logo4.png','br',40);
    $watermarkimage->saveImage('../images/changeimg/newimg.png');
    rename('../images/changeimg/newimg.png', $image_url.'/'.$_FILES['about_image3']['name']);
    $post_image.=",";
  }
  if(strlen($fileimage4)>0)
  {
    $post_images = $fileimage4;
    copy($post_images, $image_url.'/'. $_FILES['about_image4']['name']);
    $post_image.="{$image_url}/{$_FILES['about_image4']['name']}";
    $post_image2="{$image_url}/{$_FILES['about_image4']['name']}";
    $watermarkimage=new imageLib($post_image2);
    $watermarkimage->addWatermark('../images/logo/logo4.png','br',40);
    $watermarkimage->saveImage('../images/changeimg/newimg.png');
    rename('../images/changeimg/newimg.png', $image_url.'/'.$_FILES['about_image4']['name']);
    $post_image.=",";
  }
  $fileurl=$submit.'-'.$value.'/'.$submit;
  $query = $GLOBALS['db']->prepare("INSERT INTO $tableName SET recides_TITLE = ? , recides_URL = ? , recides_INGREDIENTS = ? , recides_DIRECTIONS = ? , recides_EXPLANATION = ? ,
  recides_COOKING = ? , recides_PREPTIME = ? , recides_SERVES = ? , recides_IMAGE = ? , recides_FRONTEXPLANATION = ? , recides_DESCRIPTION = ? , recides_TAGS = ? , category_ID = ? , recides_EMPTY = ?");
  $insert = $query->execute(array($title,$fileurl,$ingredients,$directions,$explanation,$cooking,$preptime,$serves,$post_image,$frontexplanation,$description,$tags,$categoryId," "));
  $insert=null;
  $text=createPage($fileurl);
  $page=fopen('../tarifler/'.$categoryId.'/'.$submit.'-'.$value.'/'.$submit.'.php',"w");
  fwrite($page,$text);
  fclose($page);
  addOne($categoryId);
  header("location: /admin/recides.php");
}

//Tarif Düzenleme
function RecideEdit($title,$ingredients,$directions,$explanation,$cooking,$preptime,$serves,$image,$categories,$frontexplanation,$description,$tags,$url,$recidesurl,$id,$fileimage1,$fileimage2,$fileimage3,$fileimage4)
{
  $recidesurldefault=$recidesurl;
  $recidesurl=explode("/",$recidesurl);
  $image=rtrim($image,",");
  $newimage="";
  $image=explode(",",$image);
  foreach ($image as $key => $value) {
    $image2=explode("/",$image[$key]);
    foreach ($image2 as $key1 => $value1) {
      if ($key1==2) {
        $newimage.=$categories.'/';
      }
      else {
        $newimage.=$image2[$key1].'/';
      }
    }
  }
  $newimage=rtrim($newimage,'/');
  rename('../tarifler/'.$url.'/'.$recidesurl[0], '../tarifler/'.$categories.'/'.$recidesurl[0]);
  require_once("../backend/php_watermark.php");
  $image_url="../tarifler/{$categories}/{$recidesurldefault}";
  $post_image="";
  if(strlen($fileimage1)>0)
  {
    $post_images = $fileimage1;
    copy($post_images, $image_url.'/'. $_FILES['about_image1']['name']);
    $post_image.="{$image_url}/{$_FILES['about_image1']['name']}";
    $post_image2="{$image_url}/{$_FILES['about_image1']['name']}";
    $watermarkimage=new imageLib($post_image2);
    $watermarkimage->addWatermark('../images/logo/logo4.png','br',100);
    $watermarkimage->saveImage('../images/changeimg/newimg.png');
    rename('../images/changeimg/newimg.png', $image_url.'/'.$_FILES['about_image1']['name']);
    $post_image.=",";
  }
  if(strlen($fileimage2)>0)
  {
    $post_images = $fileimage2;
    copy($post_images, $image_url.'/'. $_FILES['about_image2']['name']);
    $post_image.="{$image_url}/{$_FILES['about_image2']['name']}";
    $post_image2="{$image_url}/{$_FILES['about_image2']['name']}";
    $watermarkimage=new imageLib($post_image2);
    $watermarkimage->addWatermark('../images/logo/logo4.png','br',40);
    $watermarkimage->saveImage('../images/changeimg/newimg.png');
    rename('../images/changeimg/newimg.png', $image_url.'/'.$_FILES['about_image2']['name']);
    $post_image.=",";
  }
  if(strlen($fileimage3)>0)
  {
    $post_images = $fileimage3;
    copy($post_images, $image_url.'/'. $_FILES['about_image3']['name']);
    $post_image.="{$image_url}/{$_FILES['about_image3']['name']}";
    $post_image2="{$image_url}/{$_FILES['about_image3']['name']}";
    $watermarkimage=new imageLib($post_image2);
    $watermarkimage->addWatermark('../images/logo/logo4.png','br',40);
    $watermarkimage->saveImage('../images/changeimg/newimg.png');
    rename('../images/changeimg/newimg.png', $image_url.'/'.$_FILES['about_image3']['name']);
    $post_image.=",";
  }
  if(strlen($fileimage4)>0)
  {
    $post_images = $fileimage4;
    copy($post_images, $image_url.'/'. $_FILES['about_image4']['name']);
    $post_image.="{$image_url}/{$_FILES['about_image4']['name']}";
    $post_image2="{$image_url}/{$_FILES['about_image4']['name']}";
    $watermarkimage=new imageLib($post_image2);
    $watermarkimage->addWatermark('../images/logo/logo4.png','br',40);
    $watermarkimage->saveImage('../images/changeimg/newimg.png');
    rename('../images/changeimg/newimg.png', $image_url.'/'.$_FILES['about_image4']['name']);
    $post_image.=",";
  }
  $newimage.=$post_image;
  $newimage=rtrim($newimage,',');
  $query = $GLOBALS['db']->prepare("UPDATE recides SET recides_TITLE = ? , recides_INGREDIENTS = ? , recides_DIRECTIONS = ? , recides_EXPLANATION = ? , recides_COOKING = ? ,
    recides_PREPTIME = ? , recides_SERVES = ? , recides_IMAGE = ? , category_ID = ? , recides_FRONTEXPLANATION = ? , recides_DESCRIPTION = ? , recides_TAGS = ? WHERE recides_ID = ?");
  $update = $query->execute(array($title,$ingredients,$directions,$explanation,$cooking,$preptime,$serves,$newimage,$categories,$frontexplanation,$description,$tags,$id));
  $update=null;
  header("location: /admin/recides_edit.php?editid=".$id);
}

//Tarif Düzenleme
function RecideEditdeleteimage($deleteimage,$recideid)
{
  $query = $GLOBALS['db']->prepare("UPDATE recides SET recides_IMAGE = ? WHERE recides_ID = ?");
  $update = $query->execute(array($deleteimage,$recideid));
  $update=null;
  header("location: /YemekSitesi/admin/recides_edit.php?editid=".$recideid);
}

//Tarif Silme
function RecideDelete($tableName,$recidesId) {
  $query = $GLOBALS['db']->prepare("DELETE FROM $tableName WHERE recides_ID = ?");
  $delete = $query->execute(array($recidesId));
  $delete=null;
  header("location: /admin/recides_list.php");
}

//META İŞLEMLERİ
//****************************************************************************

//Meta düzenleme
function metaEdit($content,$id){
  $query = $GLOBALS['db']->prepare("UPDATE metatags SET metatag_CONTENT = ? WHERE metatag_ID = ?");
  $update = $query->execute(array($content,$id));
  $update=null;
  header("location: /admin/metaTags.php");
}

//ALL TEXT İŞLEMLERİ
//*******************************************************************************

//ALL TEXT Düzenleme
function allTextEdit($content,$id){
  $query = $GLOBALS['db']->prepare("UPDATE alltexts SET alltexts_CONTENT = ? WHERE alltexts_ID = ?");
  $update = $query->execute(array($content,$id));
  $update=null;
  header("location: /admin/alltexts.php");
}

//TOP5 İŞLEMLERİ
//******************************************************************************

//TOP5 EDİR İŞLEMLERİ
function top5Edit($title,$image,$preptime,$serves,$url,$top5id,$top5_image){
  $post_image=$top5_image;
  if(strlen($image)>0)
  {
    $post_images = $image;
    $rand=rand(1,3000);
    copy($post_images, '../images/top5/'. $rand.'_'.$_FILES['about_image']['name']);
    $post_image="{$rand}_{$_FILES['about_image']['name']}";
  }
  $query = $GLOBALS['db']->prepare("UPDATE top5 SET top5_NAME = ? , top5_IMAGE = ? , top5_PREPTIME = ? , top5_SERVES = ? , top5_URL = ? WHERE top5_ID = ?");
  $update = $query->execute(array($title,$post_image,$preptime,$serves,$url,$top5id));
  $update=null;
  header("location: /admin/top5.php");
}

 ?>
