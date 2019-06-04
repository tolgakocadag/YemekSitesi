<?php

//Türkçe karakterleri ingilizceye çeviren fonksiyon.
function replace_tr($text) {
   $text = trim($text);
   $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü');
   $replace = array('c','c','g','g','i','i','o','o','s','s','u','u');
   $new_text = str_replace($search,$replace,$text);
   return $new_text;
}

//Aradaki belirlenen harflerin yerine başka harf atama fonksiyonu
function multiexplode ($delimiters,$string) {

    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

//tarif eklerken kategori seçme
function getCategory(){
  $getCategory=getDB('categories');
  foreach ($getCategory as $key => $value) {
    echo "<option value='{$value['category_NAME']}'>
    {$value['category_NAME']}
    </option>";
  }
}
 ?>
