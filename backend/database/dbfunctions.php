<?php
require "dbcon.php";

//Veri Çekme
function getDB($tableName){
  $getDB =  $GLOBALS['db']->query("SELECT * FROM $tableName")->fetchAll(PDO::FETCH_ASSOC);
  return $getDB;
}

//Veri Çekme (idli)
function getDBid($tableName,$submit){
  echo $submit;
  $getDB =  $GLOBALS['db']->query("SELECT * FROM $tableName WHERE category_ID=$submit")->fetchAll(PDO::FETCH_ASSOC);
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
  header("location: /YemekSitesi/admin/categories.php");
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
  header("location: /YemekSitesi/admin/categories.php");
}

//Kategori Silme
function CategoryDelete($tableName,$categoryId,$categoryURL) {
  $query = $GLOBALS['db']->prepare("DELETE FROM $tableName WHERE category_ID = ?");
  $delete = $query->execute(array($categoryId));
  $delete=null;
  header("location: /YemekSitesi/admin/categories.php");
}

//TARİF İŞLEMLERİ
//**************************************************************************************
function RecideAdd($tableName,$title,$ingredients,$directions,$explanation,$cooking,$preptime,$serves,$categoryId,$post_image)
{
  $query = $GLOBALS['db']->prepare("INSERT INTO $tableName SET recides_TITLE = ? , recides_INGREDIENTS = ? , recides_DIRECTIONS = ? , recides_EXPLANATION = ? ,
  recides_COOKING = ? , recides_PREPTIME = ? , recides_SERVES = ? , recides_IMAGE = ? , category_ID = ?");
  $insert = $query->execute(array($title,$ingredients,$directions,$explanation,$cooking,$preptime,$serves,$post_image,$categoryId));
  $insert=null;
  header("location: /YemekSitesi/admin/recides.php");
}
 ?>
