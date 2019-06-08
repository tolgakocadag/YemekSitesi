<?php require "includes/head.php"; ?>
<title>Mükemmel Tarifler</title>
<meta name='title' content='Mükemmel Tarifler'>
<meta name='keywords' content='Mükemmel Tarifler,mükemmel yemek tarifleri,yemek tarifleri,tatlı tarifleri,salata tarifleri'>

<?php require "includes/header.php"; ?>


<?php require "includes/slider.php"; ?>



<!-- Content
================================================== -->
<div class="container">

	<!-- Masonry -->
	<div class="twelve columns">

		<!-- Headline -->
 		<h3 class="headline">En Son Tarifler</h3>
		<span class="line rb margin-bottom-35"></span>
		<div class="clearfix"></div>

		<!-- Isotope -->
		<div class="isotope">

			<!-- SON 9 TARİF LİSTELEME -->
			<?php
				getLastRecide();
			 ?>

		</div>
		<div class="clearfix"></div>

		<?php require "includes/pagination.php"; ?>

	</div>


<?php require "includes/sidebar.php" ?>


</div>
<!-- Container / End -->

<div class="margin-top-5"></div>


</div>
<!-- Wrapper / End -->

<?php require "includes/footer.php"; ?>

<?php require "includes/foot.php"; ?>

</body>

<!-- Mirrored from www.vasterad.com/themes/chow/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2019 15:14:55 GMT -->
</html>
