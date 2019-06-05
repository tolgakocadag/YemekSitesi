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

//S0N 9 TARİF LİSTELEME
function getLastRecide(){
  $GETLastRecide=getDBLast();
  foreach ($GETLastRecide as $key => $value) {
    $lasttitle=$value['recides_TITLE'];
    $lastpreptime=$value['recides_PREPTIME'];
    $lasturl=$value['recides_URL'];
    $categoryId=$value['category_ID'];
    echo '
    <div class="four recipe-box columns">

      <!-- Thumbnail -->
      <div class="thumbnail-holder">
        <a href="/YemekSitesi/tarifler/'.$categoryId.'/'.$lasturl.'.php">
          <img src="images/recipeThumb-01.jpg" alt=""/>
          <div class="hover-cover"></div>
          <div class="hover-icon">Tarifi Gör</div>
        </a>
      </div>

      <!-- Content -->
      <div class="recipe-box-content">
        <h3 style="font-family: Caveat, cursive;"><a href="/YemekSitesi/tarifler/'.$categoryId.'/'.$lasturl.'.php">'.$lasttitle.'</a></h3>

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
