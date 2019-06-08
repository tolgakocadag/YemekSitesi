<!-- Header
================================================== -->
<header id="header">

<!-- Container -->
<div class="container">

	<!-- Logo / Mobile Menu -->
	<div class="three columns">
		<div id="logo">
			<h1><a href="/index"><img style="height:55px;width:100%" src="../../../images/logo/logo3.png" alt="Chow" /></a></h1>
		</div>
	</div>


<!-- Navigation
================================================== -->
<div class="thirteen columns navigation">

	<nav id="navigation" class="menu nav-collapse">
		<ul>
			<li><a href="/index" id="current">Anasayfa</a></li>

			<li><a href="#">Yemek Tarifleri</a>
				<ul>
				  <?php

					$categorymenuList=getDBDESCcategory();
					foreach ($categorymenuList as $key => $value) {
						$categorymenuName=$value['category_NAME'];
						$categorymenuUrl=$value['category_URL'];
						echo '<li><a href="/tarifler/index?kategori='.$categorymenuUrl.'">'.$categorymenuName.'</a></li>';
					}

					 ?>
				</ul>
			</li>

			<li><a href="/iletisim">İletişim</a></li>
		</ul>
	</nav>

</div>

</div>
<!-- Container / End -->
</header>
