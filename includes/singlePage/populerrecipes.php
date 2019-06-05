<div class="widget">
  <h4 class="headline">Popüler Tarifler</h4>
  <span class="line margin-bottom-30"></span>
  <div class="clearfix"></div>

  <!-- Recipe #1 -->
  <?php
    $populerrecipelist=getDBDESC();
    foreach ($populerrecipelist as $key => $value) {
      $poptitle=$value['recides_TITLE'];
      $image=$value['recides_IMAGE'];
      $image=explode(",",$image);
      $popurl=$value['recides_URL'];
      $popcategory=$value['category_ID'];
      echo '
        <a href="/YemekSitesi/tarifler/'.$popcategory.'/'.$popurl.'.php" class="featured-recipe">
        <img style="height:100px" src="../../'.$image[0].'" alt="">

        <div class="featured-recipe-content">
          <h4>'.$poptitle.'</h4>

          <div class="rating five-stars">
            <div class="star-rating"></div>
            <div class="star-bg"></div>
          </div>
        </div>
        <div class="post-icon"></div>
      </a>
      ';
    }
   ?>


  <div class="clearfix"></div>
</div>
