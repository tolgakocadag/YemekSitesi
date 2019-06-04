<!-- Slider -->
<div class="recipeSlider rsDefault">
    <?php
    $explodeimage=rtrim($image,",");
    $explodeimage=explode(",",$explodeimage);
    foreach ($explodeimage as $key => $value) {
      echo '<img itemprop="image" class="rsImg" src="../../'.$explodeimage[$key].'" alt="" />';
    }
     ?>
</div>
