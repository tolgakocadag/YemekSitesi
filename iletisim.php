<?php require "includes/head.php"; ?>
<title>İletişim - Mükemmel Tarifler</title>
<meta name='title' content='İletişim - Mükemmel Tarifler'>
<meta name='keywords' content='iletişim,mükemmel tarifler iletişim,iletişim mükemmel tarifler,bana ulaşın,mükemmel tarifler bana ulaşın'>


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
			<span>Herhangi bir talep veya şikayetiniz için bize ulaşın!</span>
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
			<hr />
			<!-- Form -->
			<div class="row">
				<form class="" action="" method="post">
					<div class="form-group">
						<label for="">İsminiz...</label>
						<input class="form-control" type="text" name="contact_name" value="">
						<label for="">E-mail Adresiniz...</label>
						<input class="form-control" type="email" name="contact_email" value="">
						<label for="">Mesajınızın Konusu...</label>
						<input class="form-control" type="text" name="contact_subject" value="">
						<label for="">Mesajınız...</label>
						<textarea name="contact_message" rows="8" cols="80"></textarea>
						<script src="https://www.google.com/recaptcha/api.js" async defer></script>
						<center><div class="g-recaptcha" data-callback="enableBtn" data-sitekey="6LciqqcUAAAAAHyIj8xNNl0uTLUb2z-OWXIDa9Ue"></div></center>
						<center><button type="submit" id="recaptchaClicked" disabled name="submit" class="btn btn-success">Mesajı Gönder</button></center>
					</div>
				</form>
				<script type="text/javascript">
				function enableBtn() {
					document.getElementById("recaptchaClicked").disabled = false;
				}
				</script>
			</div>

			<?php

			if(isset($_POST['submit']))
			{
				$contact_name=$_POST['contact_name'];
				$contact_email=$_POST['contact_email'];
				$contact_subject=$_POST['contact_subject'];
				$contact_message=$_POST['contact_message'];
				include 'backend/class.phpmailer.php';
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->SMTPAuth = true;
				$mail->Host = 'mail.mukemmeltarifler.com';
				$mail->Port = 587;
				$mail->Username = 'iletisim@mukemmeltarifler.com';
				$mail->Password = 'p*Xylee7y$}E';
				$mail->SetFrom($mail->Username, $contact_name);
				$mail->AddAddress('iletisim@mukemmeltarifler.com', $contact_name);
				$mail->CharSet = 'UTF-8';
				$mail->Subject = $contact_subject;
				$mail->MsgHTML('İsim:'.$contact_name.'<br/>
				E-Posta:'.$contact_email.'<br/>
				Konu:'.$contact_subject.'<br/>
				Mesaj:'.$contact_message.'<br/>');
				if($mail->Send()) { echo 'Mesajınız başarıyla gönderildi.';}
				else { echo 'Mesaj gönderirken bir hata oluştu ve girmiş olduğunuz bilgiler alınamadı.' . $mail->ErrorInfo;}
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
<?php require "includes/footer.php"; ?>

<?php require "includes/foot.php"; ?>




</body>

<!-- Mirrored from www.vasterad.com/themes/chow/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2019 15:16:07 GMT -->
</html>
