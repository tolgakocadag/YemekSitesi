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

//site organic arama tutucu googleden çıkmaya başlıyınca yapılacak
/*function organicSearch(){
  $referans=$_SERVER["HTTP_REFERER"];
  if(preg_match("#^http://www.google.com.*................../#i",$referans)){
      $organicurl=parse_url(urldecode($referans));
      parse_str($organicurl["query"], $sorgu);
      $kelime=$sorgu["q"]."\r\n";
      $fp=fopen("kelimeler.txt","a+");
      fwrite($fp,$kelime);
      fclose($fp);
  }
  else{
      $referans=$_SERVER["HTTP_REFERER"];

      echo $referans;
  }
  ?>
}*/

//recaptcha doğrulama
function curlKullan($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
    $curlData = curl_exec($curl);
    curl_close($curl);
    return $curlData;
}

//İP ALAN FONKSİYON
function GetIP(){
 if(getenv("HTTP_CLIENT_IP")) {
 $ip = getenv("HTTP_CLIENT_IP");
 } elseif(getenv("HTTP_X_FORWARDED_FOR")) {
 $ip = getenv("HTTP_X_FORWARDED_FOR");
 if (strstr($ip, ',')) {
 $tmp = explode (',', $ip);
 $ip = trim($tmp[0]);
 }
 } else {
 $ip = getenv("REMOTE_ADDR");
 }
 return $ip;
}

//S0N 9 TARİF LİSTELEME
function getLastRecide(){
  $GETLastRecide=getDBLast();
  foreach ($GETLastRecide as $key => $value) {
    $lasttitle=$value['recides_TITLE'];
    $lastimage=$value['recides_IMAGE'];
    $lastimage=explode(',',$lastimage);
    $lastpreptime=$value['recides_PREPTIME'];
    $lasturl=$value['recides_URL'];
    $categoryId=$value['category_ID'];
    echo '
    <div class="four recipe-box columns">

      <!-- Thumbnail -->
      <div class="thumbnail-holder">
        <a href="tarifler/'.$categoryId.'/'.$lasturl.'.php">
          <img src="'.$lastimage[0].'" alt=""/>
          <div class="hover-cover"></div>
          <div class="hover-icon">Tarifi Gör</div>
        </a>
      </div>

      <!-- Content -->
      <div class="recipe-box-content">
        <h3 style="font-family: Caveat, cursive;"><a href="tarifler/'.$categoryId.'/'.$lasturl.'.php">'.$lasttitle.'</a></h3>

        <div class="rating five-stars">
          <div class="star-rating"></div>
          <div class="star-bg"></div>
        </div>

        <div class="recipe-meta"></div>

        <div class="clearfix"></div>
      </div>
    </div>
    ';
  }
}

//tarif eklerken kategori seçme
function getCategory(){
  $getCategory=getDB('categories');
  foreach ($getCategory as $key => $value) {
    echo "<option value='{$value['category_URL']}'>
    {$value['category_URL']}
    </option>";
  }
}

//Tarif eklerken kategoride +1 yapma
function addOne($catURL){
  $query = $GLOBALS['db']->prepare("UPDATE categories SET category_COUNT = category_COUNT+1 WHERE category_URL = '{$catURL}'");
  $update = $query->execute(array());
  $update=null;
}

//tarif düzenlerken kategori seçme
function getCategoryurl($category){
  $getCategory=getDB('categories');
  foreach ($getCategory as $key => $value) {
    if($category==$value['category_URL'])
    {
      echo "<option selected value='{$value['category_URL']}'>
      {$value['category_URL']}
      </option>";
      continue;
    }
    echo "<option value='{$value['category_URL']}'>
    {$value['category_URL']}
    </option>";
  }
}

//recides edit $serves
function editrecidesserves($serves){
  if($serves=='1 Kişilik'){echo '<option selected value="1 Kişilik">1 Kişilik</option><option value="2 Kişilik">2 Kişilik</option><option value="3 Kişilik">3 Kişilik</option><option value="4 Kişilik">4 Kişilik</option><option value="5 Kişilik">5 Kişilik</option><option value="6+ Kişilik">6+ Kişilik</option>';}
    elseif($serves=='2 Kişilik'){echo '<option value="1 Kişilik">1 Kişilik</option><option selected value="2 Kişilik">2 Kişilik</option><option value="3 Kişilik">3 Kişilik</option><option value="4 Kişilik">4 Kişilik</option><option value="5 Kişilik">5 Kişilik</option><option value="6+ Kişilik">6+ Kişilik</option>';}
      elseif($serves=='3 Kişilik'){echo '<option value="1 Kişilik">1 Kişilik</option><option value="2 Kişilik">2 Kişilik</option><option selected value="3 Kişilik">3 Kişilik</option><option value="4 Kişilik">4 Kişilik</option><option value="5 Kişilik">5 Kişilik</option><option value="6+ Kişilik">6+ Kişilik</option>';}
        elseif($serves=='4 Kişilik'){echo '<option value="1 Kişilik">1 Kişilik</option><option value="2 Kişilik">2 Kişilik</option><option value="3 Kişilik">3 Kişilik</option><option selected value="4 Kişilik">4 Kişilik</option><option value="5 Kişilik">5 Kişilik</option><option value="6+ Kişilik">6+ Kişilik</option>';}
          elseif($serves=='5 Kişilik'){echo '<option value="1 Kişilik">1 Kişilik</option><option value="2 Kişilik">2 Kişilik</option><option value="3 Kişilik">3 Kişilik</option><option value="4 Kişilik">4 Kişilik</option><option selected value="5 Kişilik">5 Kişilik</option><option value="6+ Kişilik">6+ Kişilik</option>';}
            else{echo '<option value="1 Kişilik">1 Kişilik</option><option value="2 Kişilik">2 Kişilik</option><option value="3 Kişilik">3 Kişilik</option><option value="4 Kişilik">4 Kişilik</option><option value="5 Kişilik">5 Kişilik</option><option selected value="6+ Kişilik">6+ Kişilik</option>';}
}

//malzeme listeleme
function getIngredients($ingredients,$title)
{
  $checkcount=1;
  echo '<h3>'.$title.' İçin Gereken Malzemeler</h3>
  <ul class="ingredients">';
  $explodeingredients=explode('+',$ingredients);
  foreach ($explodeingredients as $key => $value) {
    echo '<li>
            <input id="check-'.$checkcount.'" type="checkbox" name="check" value="check-'.$checkcount.'">
            <label itemprop="ingredients" for="check-'.$checkcount.'">'.$explodeingredients[$key].'</label>
          </li>';
    $checkcount++;
  }
  echo '</ul>';
}

//talimatları listeleme
function getDirections($directions,$title)
{
  echo '<h3>'.$title.' Nasıl Yapılır?</h3>
  <ol class="directions" itemprop="recipeInstructions">';
  $explodedirections=explode('+',$directions);
  foreach ($explodedirections as $key => $value) {
    echo '    <li >'.$explodedirections[$key].'</li>';
  }
  echo '</ol>';
}

//Share kısmının altındaki reklam
function ads1()
{
  echo '<div style="width:auto;height:auto;border:2px solid black">
   DENEME
  </div>';
}
 ?>
