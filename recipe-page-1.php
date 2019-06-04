<?php require "includes/head.php"; ?>
<body>

<!-- Wrapper -->
<div id="wrapper">


<!-- Header
================================================== -->
<?php require "includes/header.php"; ?>


<!-- Recipe Background -->
<div class="recipeBackground">
	<img src="images/recipeBackground.jpg" alt="" />
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
				<h2>Chunky Beef Stew</h2>
				<div class="rating five-stars">
					<div class="star-rating"></div>
					<div class="star-bg"></div>
				</div>
				<span><a href="#reviews">(4 reviews)</a></span>
			</div>
		</section>


		<!-- Slider -->
		<div class="recipeSlider rsDefault">
		    <img itemprop="image" class="rsImg" src="images/recipePhoto-01.jpg" alt="" />
		    <img itemprop="image" class="rsImg" src="images/recipePhoto-02.jpg" alt="" />
		</div>


		<!-- Details -->
		<section class="recipe-details" itemprop="nutrition">
			<ul>
				<li>Serves: <strong itemprop="recipeYield">4 people</strong></li>
				<li>Prep Time: <strong itemprop="prepTime">30 min</strong></li>
				<li>Cooking: <strong itemprop="cookTime">2 hours</strong></li>
				<li>Calories: <strong itemprop="calories">632 kcal</strong></li>
			</ul>
			<a href="#" class="print"><i class="fa fa-print"></i> Print</a>
			<div class="clearfix"></div>
		</section>


		<!-- Text -->
		<p itemprop="description">This is a very basic beef stew. It’s easy, delicious and inexpensive to make. While there are hundreds of variations of this traditional recipe, it’s hard to improve on this version’s savory and comforting goodness.</p>


		<!-- Ingredients -->
		<h3>Ingredients</h3>
		<ul class="ingredients">
			<li>
				<input id="check-1" type="checkbox" name="check" value="check-1">
				<label itemprop="ingredients" for="check-1">2 pounds cubed beef stew meat</label>
			</li>
		</ul>


		<!-- Directions -->
		<h3>Directions</h3>
		<ol class="directions" itemprop="recipeInstructions">
			<li >In a Dutch oven, heat oil over medium heat until hot, but not smoking. Pat the meat dry with paper towels and brown in batches, transferring the meat with a slotted spoon to a bowl as they are done.</li>
		</ol>


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
 		<h3 class="headline">You may also like</h3>
		<span class="line margin-bottom-35"></span>
		<div class="clearfix"></div>

		<div class="related-posts">
		<!-- Recipe #1 -->
			<div class="four recipe-box columns">

				<!-- Thumbnail -->
				<div class="thumbnail-holder">
					<a href="#">
						<img src="images/recipeThumb-01a.jpg" alt=""/>
						<div class="hover-cover"></div>
						<div class="hover-icon">View Recipe</div>
					</a>
				</div>

				<!-- Content -->
				<div class="recipe-box-content">
					<h3><a href="#">Mexican Grilled Corn Recipe</a></h3>

					<div class="rating five-stars">
						<div class="star-rating"></div>
						<div class="star-bg"></div>
					</div>

					<div class="recipe-meta"><i class="fa fa-clock-o"></i> 30 min</div>

					<div class="clearfix"></div>
				</div>
			</div>

			<!-- Recipe #2 -->
			<div class="four recipe-box columns">

				<!-- Thumbnail -->
				<div class="thumbnail-holder">
					<a href="#">
						<img src="images/recipeThumb-07a.jpg" alt=""/>
						<div class="hover-cover"></div>
						<div class="hover-icon">View Recipe</div>
					</a>
				</div>

				<!-- Content -->
				<div class="recipe-box-content">
					<h3><a href="#">Roast Chicken With Lemon Gravy</a></h3>

					<div class="rating five-stars">
						<div class="star-rating"></div>
						<div class="star-bg"></div>
					</div>

					<div class="recipe-meta"><i class="fa fa-clock-o"></i> 1 hr 20 min</div>

					<div class="clearfix"></div>
				</div>
			</div>

			<!-- Recipe #3 -->
			<div class="four recipe-box columns">

				<!-- Thumbnail -->
				<div class="thumbnail-holder">
					<a href="#">
						<img src="images/recipeThumb-03a.jpg" alt=""/>
						<div class="hover-cover"></div>
						<div class="hover-icon">View Recipe</div>
					</a>
				</div>

				<!-- Content -->
				<div class="recipe-box-content">
					<h3><a href="#">Thai Yellow Curry Chicken</a></h3>

					<div class="rating five-stars">
						<div class="star-rating"></div>
						<div class="star-bg"></div>
					</div>

					<div class="recipe-meta"><i class="fa fa-clock-o"></i> 45 min</div>

					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>


		<div class="margin-top-15"></div>


		<!-- Comments
		================================================== -->
		<h3 class="headline">Reviews <span class="comments-amount">(4)</span></h3><span class="line"></span><div class="clearfix"></div>

			<!-- Reviews -->
			<section class="comments" id="reviews">

				<ul>
					<li>
						<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
						<div class="comment-content"><div class="arrow-comment"></div>
							<div class="comment-by"><strong>John Doe</strong><span class="date">7th, October 2014</span>
								<a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
							</div>
							<p>Maecenas dignissim euismod nunc, in commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget just.</p>
							<div class="rating five-stars">
								<div class="star-rating"></div>
								<div class="star-bg"></div>
							</div>
						</div>

						<!-- Second Level -->
						<ul>
							<li>
								<div class="avatar"><img src="images/author-photo.png" alt="" /></div>
								<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by"><strong>Sandra Fortin</strong><span class="date">7th, October 2014</span>
								<a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
								</div>
								<p>Donec porttitor tortor sit amet tortor egestas, id suscipit magna cursus. Nam facilisis, mi vel elementum porttitor, sapien magna posuere lorem, sed consectetur.</p>
								</div>
							</li>
						</ul>

					</li>

					<li>
						<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
						<div class="comment-content"><div class="arrow-comment"></div>
							<div class="comment-by"><strong>Kathy Brown</strong><span class="date">12th, October 2014</span>
								<a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
							</div>
							<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
							<div class="rating ive-stars">
									<div class="star-rating"></div>
									<div class="star-bg"></div>
							</div>
						</div>
					</li>

					<li>
						<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
						<div class="comment-content"><div class="arrow-comment"></div>
							<div class="comment-by"><strong>John Doe</strong><span class="date">15th, October 2014</span>
								<a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
							</div>
							<p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
							<div class="rating four-stars">
								<div class="star-rating"></div>
								<div class="star-bg"></div>
							</div>
						</div>

					</li>
				 </ul>

			</section>
			<div class="clearfix"></div>
			<br>


		<!-- Add Comment
		================================================== -->

		<h3 class="headline">Add Review</h3><span class="line margin-bottom-35"></span><div class="clearfix"></div>

		<!-- Add Comment Form -->
		<form id="add-review" class="add-comment">
			<fieldset>

				<div>
					<label>Name:</label>
					<input type="text" value=""/>
				</div>

				<div>
					<label>Email: <span>*</span></label>
					<input type="text" value=""/>
				</div>

				<div>
					<label>Rating:</label>
					<span class="rate">
						<span class="star"></span>
						<span class="star"></span>
						<span class="star"></span>
						<span class="star"></span>
						<span class="star"></span>
					</span>
				</div>
				<div class="clearfix"></div>

				<div>
					<label>Comment: <span>*</span></label>
					<textarea cols="40" rows="3"></textarea>
				</div>

			</fieldset>

			<a href="#" class="button medium color">Add Review</a>
			<div class="clearfix"></div>

		</form>

	</div>
	</div>


<!-- Sidebar
================================================== -->
<div class="four columns">

	<!-- Search Form -->
	<div class="widget search-form">
		<nav class="search">
			<form action="#" method="get">
				<button><i class="fa fa-search"></i></button>
				<input class="search-field" type="text" placeholder="Search for recipes" value=""/>
			</form>
		</nav>
		<div class="clearfix"></div>
	</div>


	<!-- Author Box -->
	<div class="widget">
		<div class="author-box">
			<span class="title">Author</span>
			<span class="name">Sandra <br> Fortin</span>
			<span class="contact"><a href="http://www.vasterad.com/cdn-cgi/l/email-protection#ef9c8e818b9d8eaf8c878098c18c8082"><span class="__cf_email__" data-cfemail="4330222d27312203202b2c346d202c2e">[email&#160;protected]</span></a></span>
			<img src="images/author-photo.png" alt="">
			<p>I'm Sandra and this is where I share my stuff. I am madly in love with food. You will find a balance of healthy recipes, comfort food and indulgent desserts.</p>
		</div>
	</div>


	<!-- Popular Recipes -->
	<div class="widget">
		<h4 class="headline">Popular Recipes</h4>
		<span class="line margin-bottom-30"></span>
		<div class="clearfix"></div>

		<!-- Recipe #1 -->
		<a href="#" class="featured-recipe">
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
		<a href="#" class="featured-recipe">
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
		<a href="#" class="featured-recipe">
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


	<!-- Popular Recipes -->
	<div class="widget">
		<h4 class="headline">Share</h4>
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
		</ul>
		<div class="clearfix"></div>
	</div>

</div>


</div>
<!-- Container / End -->


</div>
<!-- Wrapper / End -->


<!-- Footer
================================================== -->
<div id="footer">

	<!-- Container -->
	<div class="container">

		<div class="five columns">
			<!-- Headline -->
			<h3 class="headline footer">About</h3>
			<span class="line"></span>
			<div class="clearfix"></div>
			<p>Cras at ultrices erat, sed vulputate eros. Nunc at augue gravida est fermentum vulputate. Pellentesque et ipsum in dui malesuada tempus.</p>
		</div>

		<div class="three columns">

			<!-- Headline -->
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

			<!-- Headline -->
			<h3 class="headline footer">Recipes</h3>
			<span class="line"></span>
			<div class="clearfix"></div>

			<ul class="footer-links">
				<li><a href="browse-recipes.html">Browse Recipes</a></li>
				<li><a href="recipe-page-1.html">Recipe Page</a></li>
				<li><a href="submit-recipe.html">Submit Recipe</a></li>
			</ul>

		</div>

		<div class="five columns">

			<!-- Headline -->
			<h3 class="headline footer">Newsletter</h3>
			<span class="line"></span>
			<div class="clearfix"></div>
			<p>Sign up to receive email updates on new product announcements, gift ideas, sales and more.</p>

			<form action="#" method="get">
				<input class="newsletter" type="text" placeholder="mail@example.com" value=""/>
				<button class="newsletter-btn" type="submit">Subscribe</button>

			</form>
		</div>

	</div>
	<!-- Container / End -->

</div>
<!-- Footer / End -->

<!-- Footer Bottom / Start -->
<div id="footer-bottom">

	<!-- Container -->
	<div class="container">

		<div class="eight columns">© Copyright 2014 by <a href="#">Chow</a>. All Rights Reserved.</div>

	</div>
	<!-- Container / End -->

</div>
<!-- Footer Bottom / End -->

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>



<!-- Java Script
================================================== -->
<?php require "includes/foot.php"; ?>


</body>

<!-- Mirrored from www.vasterad.com/themes/chow/recipe-page-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2019 15:15:57 GMT -->
</html>
