<!-- Sidebar
================================================== -->
<div class="four columns">

	<!-- Search Form -->
	<div class="widget search-form">
		<nav class="search">
			<form action="#" method="get">
				<button><i class="fa fa-search"></i></button>
				<input class="search-field" type="text" placeholder="Yemek Tarifini Ara" value=""/>
			</form>
		</nav>
		<div class="clearfix"></div>
	</div>


	<!-- Categories -->
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


	<!-- Popular Recipes -->
	<div class="widget">
		<h4 class="headline">Popüler Yemek Tarifleri</h4>
		<span class="line margin-bottom-30"></span>
		<div class="clearfix"></div>

		<!-- Recipe #1 -->
		<a href="recipe-page-1.html" class="featured-recipe">
			<img src="images/featuredRecipe-01.jpg" alt="">

			<div class="featured-recipe-content">
				<h4>Choclate Cake With Green Tea Cream</h4>

				<div class="rating five-stars">
					<div class="star-rating"></div>
					<div class="star-bg"></div>
				</div>
			</div>
			<div class="post-icon"></div>
		</a>

		<!-- Recipe #2 -->
		<a href="recipe-page-1.html" class="featured-recipe">
			<img src="images/featuredRecipe-02.jpg" alt="">

			<div class="featured-recipe-content">
				<h4>Mexican Grilled Corn Recipe</h4>

				<div class="rating five-stars">
					<div class="star-rating"></div>
					<div class="star-bg"></div>
				</div>
			</div>
			<div class="post-icon"></div>
		</a>

		<!-- Recipe #3 -->
		<a href="recipe-page-1.html" class="featured-recipe">
			<img src="images/featuredRecipe-03.jpg" alt="">

			<div class="featured-recipe-content">
				<h4>Pollo Borracho With Homemade Tortillas</h4>

				<div class="rating five-stars">
					<div class="star-rating"></div>
					<div class="star-bg"></div>
				</div>
			</div>
			<div class="post-icon"></div>
		</a>

		<div class="clearfix"></div>
	</div>


	<!-- Share -->
	<div class="widget">
		<h4 class="headline">Paylaş</h4>
		<span class="line margin-bottom-30"></span>
		<div class="clearfix"></div>

		<ul class="share-buttons">
			<li class="facebook-share">
				<a href="#">
					<span class="counter">1,234</span>
					<span class="counted">Fans</span>
					<span class="action-button">Like</span>
				</a>
			</li>

			<li class="twitter-share">
				<a href="#">
					<span class="counter">863</span>
					<span class="counted">Followers</span>
					<span class="action-button">Follow</span>
				</a>
			</li>

			<li class="google-plus-share">
				<a href="#">
					<span class="counter">902</span>
					<span class="counted">Followers</span>
					<span class="action-button">Follow</span>
				</a>
			</li>

<!-- 			<li class="behance-share">
				<a href="#">
					<span class="counter">902</span>
					<span class="counted">Followers</span>
					<span class="action-button">Follow</span>
				</a>
			</li>

			<li class="instagram-share">
				<a href="#">
					<span class="counter">902</span>
					<span class="counted">Followers</span>
					<span class="action-button">Follow</span>
				</a>
			</li>

			<li class="dribbble-share">
				<a href="#">
					<span class="counter">902</span>
					<span class="counted">Followers</span>
					<span class="action-button">Follow</span>
				</a>
			</li>

			<li class="linkedin-share">
				<a href="#">
					<span class="counter">902</span>
					<span class="counted">Followers</span>
					<span class="action-button">Follow</span>
				</a>
			</li>


			<li class="github-share">
				<a href="#">
					<span class="counter">902</span>
					<span class="counted">Followers</span>
					<span class="action-button">Follow</span>
				</a>
			</li>


			<li class="youtube-share">
				<a href="#">
					<span class="counter">902</span>
					<span class="counted">Followers</span>
					<span class="action-button">Follow</span>
				</a>
			</li>

			<li class="pinterest-share">
				<a href="#">
					<span class="counter">902</span>
					<span class="counted">Followers</span>
					<span class="action-button">Follow</span>
				</a>
			</li>
 -->
		</ul>
		<div class="clearfix"></div>
	</div>

</div>
