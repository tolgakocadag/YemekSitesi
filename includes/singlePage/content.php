<div class="container" itemscope itemtype="http://schema.org/Recipe">

  <!-- Recipe -->
  <div class="twelve columns">
  <div class="alignment">

    <!-- Header -->
    <section class="recipe-header">
      <div class="title-alignment">
        <h2 style="font-family: 'Caveat', cursive;"><?php echo $title;?></h2>
        <div class="rating five-stars">
          <div class="star-rating"></div>
          <div class="star-bg"></div>
        </div>
      </div>
    </section>


    <!-- Slider -->
    <?php require "../../../includes/singlePage/slider.php"; ?>


    <!-- Details -->
    <section class="recipe-details" itemprop="nutrition">
      <ul>
        <li>Kaç Kişilik: <strong itemprop="recipeYield"><?php echo $serves;?></strong></li>
        <li>Hazırlama Süresi: <strong itemprop="prepTime"><?php echo $preptime;?></strong></li>
        <li>Pişirme Süresi: <strong itemprop="cookTime"><?php echo $cooking;?></strong></li>
      </ul>
      <a href="#" class="print"><i class="fa fa-print"></i> Print</a>
      <div class="clearfix"></div>
    </section>


    <!-- Text -->
    <p itemprop="description"><?php echo $frontexplanation;?></p>


    <!-- Ingredients -->
    <?php getIngredients($ingredients,$title); ?>


    <!-- Directions -->
    <?php getDirections($directions,$title); ?>

    <!-- Text -->
    <p itemprop="description"><?php echo $explanation;?></p>

    <!-- Share Post -->
    <ul class="share-post">
      <li><a href="#" class="facebook-share">Facebook</a></li>
      <li><a href="#" class="twitter-share">Twitter</a></li>
      <li><a href="#" class="google-plus-share">Google Plus</a></li>
      <li><a href="#" class="pinterest-share">Pinterest</a></li>

      <!-- <li><a href="#add-review" class="rate-recipe">Add Review</a></li> -->
    </ul>
    <div class="clearfix"></div>


    <!-- Meta -->
<!--  		<div class="post-meta">
      By <a href="#" itemprop="author">Sandra Fortin</a>, on
      <meta itemprop="datePublished" content="2014-30-10">30th November, 2014</meta>
    </div>  -->


    <div class="margin-bottom-40"></div>
