<h3 class="headline">Şunlar da hoşunuza gidebilir</h3>
<span class="line margin-bottom-35"></span>
<div class="clearfix"></div>

<div class="related-posts">
  <?php
      $recipecategorylist=getDBHowCategory($categoryurl);
      $isAdd="1";
      foreach ($recipecategorylist as $key => $value) {
        $randtitle=$value['recides_TITLE'];
        $randpreptime=$value['recides_PREPTIME'];
        $randurl=$value['recides_URL'];
        $randcategory=$value['category_ID'];
        echo '
        <div class="four recipe-box columns">

          <!-- Thumbnail -->
          <div class="thumbnail-holder">
            <a href="/tarifler/'.$randcategory.'/'.$randurl.'">
              <img src="../../../images/recipeThumb-01a.jpg" alt=""/>
              <div class="hover-cover"></div>
              <div class="hover-icon">Tarife Git</div>
            </a>
          </div>

          <!-- Content -->
          <div class="recipe-box-content">
            <h3 style="font-family: Caveat, cursive;"><a href="#">'.$randtitle.'</a></h3>

            <div class="rating five-stars">
              <div class="star-rating"></div>
              <div class="star-bg"></div>
            </div>

            <div class="clearfix"></div>
          </div>
        </div>
        ';
      }
   ?>
<!-- Recipe #1 -->


</div>
<div class="clearfix"></div>


<div class="margin-top-15"></div>
