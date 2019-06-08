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
			<form action="" method="post">
					<div class="row">
						<div class="form-group col-6">
								<input type="text" class="form-control" name="name" required id="contact-name" placeholder="Adınız...">
						</div>
					</div>
					<div class="form-group">
							<input type="email" class="form-control" name="email" required id="contact-email" placeholder="Email adresiniz...">
					</div>
					<div class="form-group">
							<input type="text" class="form-control" name="subject" required id="contact-website" placeholder="Mesajınızın Konusu...">
					</div>
					<div class="form-group">
							<textarea class="form-control" name="message" required id="message" cols="30" rows="10" placeholder="Mesajınız..."></textarea>
					</div>
					<script src="https://www.google.com/recaptcha/api.js" async defer></script>
					<center><div class="g-recaptcha" data-callback="enableBtn" data-sitekey="6LciqqcUAAAAAHyIj8xNNl0uTLUb2z-OWXIDa9Ue"></div></center>
					<center><button type="submit" id="recaptchaClicked" disabled name="submit" class="btn contact-btn">Mesajı Gönder</button></center>
			</form>
			<script type="text/javascript">
			function enableBtn() {
				document.getElementById("recaptchaClicked").disabled = false;
			}
			</script>
			<?php
			if(isset($_POST['message'])&&$_POST['message']!=""&&$_POST['name']!=""&&$_POST['surname']!=""&&$_POST['email']!=""&&$_POST['subject']!=""){
				$recaptcha = $_POST['g-recaptcha-response'];
				if (!empty($recaptcha)) {
					$google_url = "https://www.google.com/recaptcha/api/siteverify";
					$secret = '6LciqqcUAAAAAADBUQjHRr1bleSWKALZkUmPG7W9';
					//kullanıcının ip adresi
					$ip = $_SERVER['REMOTE_ADDR'];
					//istek adresini oluşturuyoruz
					$url = $google_url . "?secret=" . $secret . "&response=" . $recaptcha . "&remoteip=" . $ip;
					$res = curlKullan($url);
					$res = json_decode($res, true);

					//işlem başarılıysa çalışacak kısım
					if ($res['success']) {
						include "backend/class.phpmailer.php";
						$ip=GetIp();
						$name=$_POST['name'];
						$email=$_POST['email'];
						$subject=$_POST['subject'];
						$subject=replace_tr($subject);
						$message=$_POST['message'];
						$mail = new PHPMailer();
						$mail->IsSMTP();
						$mail->SMTPAuth = true;
						$mail->Host = 'mail.mukemmeltarifler.com';
						$mail->Port = 587;
						$mail->Username = 'iletisim@mukemmeltarifler.com';
						$mail->Password = 'p*Xylee7y$}E';
						$mail->SetFrom($mail->Username, $name);
						$mail->AddAddress('iletisim@mukemmeltarifler.com', 'mukemmeltarifler');
						$mail->CharSet = 'UTF-8';
						$mail->Subject = $subject;
						$mail->MsgHTML('İsim:   '.$name.'<br/>
						Konu:'.$subject.'<br/>
						E-Posta:   '.$email.'<br/>
						Mesaj:   '.$message.'<br/>
						IP Adresi:   '.$ip);
						if($mail->Send()) {
							echo '<br/><center>Mesajınız başarıyla gönderildi.</center>';
							$mail = new PHPMailer();
							$mail->IsSMTP();
							$mail->SMTPAuth = true;
							$mail->Host = 'mail.tolgakocadag.com';
							$mail->Port = 587;
							$mail->Username = 'iletisim@tolgakocadag.com';
							$mail->Password = 'Tlgkcdg3434';
							$mail->SetFrom($mail->Username, 'Tolga Kocadag Blog');
							$mail->AddAddress($email, ' ');
							$mail->CharSet = 'UTF-8';
							$mail->Subject = $subject;
							$mail->MsgHTML('Merhaba '.$name.',<br /><br />Mesajınızı aldık. En kısa sürede yetkili kişiler tarafından dönüş yapılacaktır.<br /><br />Teşekkür ederiz.<br />tolgakocadag.com');
							$mail->Send();
							$_POST['name']="";
							$_POST['email']="";
							$_POST['subject']="";
							$_POST['message']="";
						}
						else {
							echo '<br />Mesaj gönderirken bir hata oluştu ve girmiş olduğunuz bilgiler alınamadı.' . $mail->ErrorInfo;}
						}
						else {
							echo "<br /><center>Lütfen bot olmadığınızı doğrulayın</center>";
						}
					}
					else {
						echo "<br /><center>Lütfen bot olmadığınızı doğrulayın</center>";
					}
				}
			 ?>

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
