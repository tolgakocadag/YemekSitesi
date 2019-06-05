
  <?php
   require "../../../backend/database/dbfunctions.php";
   require "../../../backend/generalfunctions.php";
    $allrecide=getDBURL("sutsuz-tatli-3257/sutsuz-tatli");
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
  <?php require "../../../includes/singlePage/recipebackground.php"; ?>


  <!-- Content
  ================================================== -->
  <?php require "../../../includes/singlePage/content.php"; ?>


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

  