<div class="widget">
  <h4 class="headline">Kategoriler</h4>
  <span class="line margin-bottom-20"></span>
  <div class="clearfix"></div>

  <ul class="categories">
    <?php
          $category_list=getDB('categories');
          foreach ($category_list as $key => $value) {
            $categoryName=$value['category_NAME'];
            $categoryCount=$value['category_COUNT'];
            echo '<li><a href="#">'.$categoryName.' <span>('.$categoryCount.')</span></a></li>';
          }
     ?>
  </ul>
</div>
