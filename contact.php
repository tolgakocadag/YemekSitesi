<?php require "includes/head.php"; ?>

<body>

<!-- Wrapper -->
<div id="wrapper">


<!-- Header
================================================== -->
<?php require "includes/header.php"; ?>


<!-- Titlebar
================================================== -->
<section id="titlebar">
	<!-- Container -->
	<div class="container">

		<div class="eight columns">
			<h2>Bize Ulaşın</h2>
		</div>

		<div class="eight columns">
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Anasayfa</a></li>
					<li>Contact</li>
				</ul>
			</nav>
		</div>

	</div>
	<!-- Container / End -->
</section>



<!-- Content
================================================== -->

<!-- Container -->
<div class="container">
	<div class="sixteen columns">
		<div class="image-with-caption contact">
			<img class="rsImg" src="images/contact.jpg" alt="" />
			<span>Herhangi bir sorunuz için bize ulaşın!</span>
		</div>
	</div>
</div>
<!-- Container / End -->


<div class="margin-top-10"></div>


<!-- Container -->
<div class="container">

<!-- Contact Form -->
<div class="twelve columns">
		<h3 class="headline">İletişim Formu</h3><span class="line margin-bottom-25"></span><div class="clearfix"></div>

		<!-- Contact Form -->
		<section id="contact">

			<!-- Success Message -->
			<mark id="message"></mark>

			<!-- Form -->
			<form method="post" name="contactform" id="contactform">

				<fieldset>

					<div class="form-group">
						<label>Name:</label>
						<input class="form-control" name="name" type="text" id="name" />
					</div>

					<div class="form-group">
						<label >Email: <span>*</span></label>
						<input class="form-control" name="email" type="email" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" />
					</div>

					<div class="form-group">
						<label>Message: <span>*</span></label>
						<textarea class="form-control" name="comment" cols="40" rows="3" id="comment" spellcheck="true"></textarea>
					</div>

				</fieldset>
				<div id="result"></div>
				<input type="submit" class="submit" id="submit" value="GÖNDER" />
				<div class="clearfix"></div>
			</form>

		</section>
		<!-- Contact Form / End -->
		<div class="margin-bottom-50"></div>
</div>


<div class="four columns">

	<!-- Share -->
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
<script src="scripts/jquery-1.11.0.min.js"></script>
<script src="scripts/jquery-migrate-1.2.1.min.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.royalslider.min.js"></script>
<script src="scripts/responsive-nav.js"></script>
<script src="scripts/hoverIntent.js"></script>
<script src="scripts/isotope.pkgd.min.js"></script>
<script src="scripts/chosen.jquery.min.js"></script>
<script src="scripts/jquery.tooltips.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/jquery.pricefilter.js"></script>
<script src="scripts/custom.js"></script>




</body>

<!-- Mirrored from www.vasterad.com/themes/chow/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2019 15:16:07 GMT -->
</html>
