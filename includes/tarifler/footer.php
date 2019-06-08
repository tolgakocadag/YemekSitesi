<div id="footer">

	<!-- Container -->
	<div class="container">

    <?php

    $alltext=getDB('alltexts');
    foreach ($alltext as $key => $value) {
      if($value['alltexts_NAME']=='Hakkımızda')
      {
        $hakkimizdatext=$value['alltexts_CONTENT'];
      }
      if($value['alltexts_NAME']=='Bülten')
      {
        $bultentext=$value['alltexts_CONTENT'];
      }
      if($value['alltexts_NAME']=='Copyright')
      {
        $copyrighttext=$value['alltexts_CONTENT'];
      }
    }

     ?>

    <div class="five columns">
      <!-- Headline -->
      <h3 class="headline footer">Hakkımızda</h3>
      <span class="line"></span>
      <div class="clearfix"></div>
      <p><?php echo $hakkimizdatext; ?></p>
    </div>

		<!--<div class="three columns">


      <h3 class="headline footer">Archives</h3>
      <span class="line"></span>
      <div class="clearfix"></div>

      <ul class="footer-links">
        <li><a href="#">June 2014</a></li>
        <li><a href="#">July 2014</a></li>
        <li><a href="#">August 2014</a></li>
        <li><a href="#">September 2014</a></li>
        <li><a href="#">November 2014</a></li>
      </ul>

    </div>

    <div class="three columns">


      <h3 class="headline footer">Recipes</h3>
      <span class="line"></span>
      <div class="clearfix"></div>

      <ul class="footer-links">
        <li><a href="browse-recipes.html">Browse Recipes</a></li>
        <li><a href="recipe-page-1.html">Recipe Page</a></li>
        <li><a href="submit-recipe.html">Submit Recipe</a></li>
      </ul>

    </div>-->

    <div class="five columns">

      <!-- Headline -->
      <h3 class="headline footer">Bülten</h3>
      <span class="line"></span>
      <div class="clearfix"></div>
      <p><?php echo $bultentext; ?></p>

      <form action="#" method="get">
        <input class="newsletter" type="text" placeholder="mail@example.com" value=""/>
        <button class="newsletter-btn" type="submit">Abone Ol</button>

      </form>
    </div>

  </div>
	<!-- Container / End -->

</div>
