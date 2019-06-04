
  <?php
   require "../../../backend/database/dbfunctions.php";
   require "../../../backend/generalfunctions.php";
    $allrecide=getDBURL("test2-4179/test2");
    foreach ($allrecide as $key => $value) {
      $title=$value["recides_TITLE"];
      $serves=$value["recides_SERVES"];
      $preptime=$value["recides_PREPTIME"];
      $cooking=$value["recides_COOKING"];
      $ingredients=$value["recides_INGREDIENTS"];
      $directions=$value["recides_DIRECTIONS"];
      $frontexplanation=$value["recides_FRONTEXPLANATION"];
      $explanation=$value["recides_EXPLANATION"];
      $image=$value["recides_IMAGE"];
      $categoryurl=$value["category_ID"];
      $description=$value["recides_DESCRIPTION"];
      $tags=$value["recides_TAGS"];
    }
  ?>
  <?php require "../../../includes/singlePage/head.php"; ?>.
  <body>

  <!-- Wrapper -->
  <div id="wrapper">


  <!-- Header
  ================================================== -->
  <?php require "../../../includes/singlePage/header.php"; ?>


  <!-- Recipe Background -->
  <div class="recipeBackground">
  	<img src="../../../images/recipeBackground.jpg" alt="" />
  </div>


  <!-- Content
  ================================================== -->
  <div class="container" itemscope itemtype="http://schema.org/Recipe">

  	<!-- Recipe -->
  	<div class="twelve columns">
  	<div class="alignment">

  		<!-- Header -->
  		<section class="recipe-header">
  			<div class="title-alignment">
  				<h2><?php echo $title;?></h2>
  				<div class="rating five-stars">
  					<div class="star-rating"></div>
  					<div class="star-bg"></div>
  				</div>
  				<span><a href="#reviews">(4 reviews)</a></span>
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


  		<!-- Headline -->
   		<?php require "../../../includes/singlePage/headline.php"; ?>


  		<!-- Comments
  		================================================== -->
  		<?php require "../../../includes/singlePage/comments.php"; ?>

  	</div>
  	</div>


  <!-- Sidebar
  ================================================== -->
  <div class="four columns">

  	<!-- Search Form -->
  	<?php require "../../../includes/singlePage/search.php"; ?>


    <!-- Categories -->
  	<?php require "../../../includes/singlePage/categories.php"; ?>


  	<!-- Popular Recipes -->
  	<?php require "../../../includes/singlePage/populerrecipes.php"; ?>


  	<!-- Popular Social Recipes -->
    <?php require "../../../includes/singlePage/populersocialrecipes.php"; ?>

    <!-- Ads Post -->
    <?php require "../../../includes/singlePage/adskutu/ads1.php"; ?>

  </div>


  </div>
  <!-- Container / End -->


  </div>
  <!-- Wrapper / End -->


  <!-- Footer
  ================================================== -->
  <?php require "../../../includes/singlePage/footer.php"; ?>
  <!-- Footer Bottom / End -->

  <!-- Back To Top Button -->
  <div id="backtotop"><a href="#"></a></div>



  <!-- Java Script
  ================================================== -->
  <?php require "../../../includes/singlePage/foot.php"; ?>


  </body>

  </html>

  