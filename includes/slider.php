<!-- Slider
================================================== -->
<div id="homeSlider" class="royalSlider rsDefaultInv">
	<?php

	$getSlider=getDB("top5");
	foreach ($getSlider as $key => $value) {
		$sliderTITLE=$value['top5_NAME'];
		$sliderIMAGE=$value['top5_IMAGE'];
		$sliderPREPTIME=$value['top5_PREPTIME'];
		$sliderSERVES=$value['top5_SERVES'];
		$sliderURL=$value['top5_URL'];
		echo '
		<div class="rsContent">
			<img style="width:100%;height:100%" src="images/top5/'.$sliderIMAGE.'" />
			<i class="rsTmb">'.$sliderTITLE.'</i>

			<!-- Slide Caption -->
			<div class="SlideTitleContainer rsABlock">
			<div class="CaptionAlignment">
				<div class="rsSlideTitle tags">
					<div class="clearfix"></div>
				</div>';
				if(strlen($sliderSERVES)>0){
					if(strstr($_SERVER['HTTP_USER_AGENT'],"Windows")){
						echo '<h2 class="rsSlideTitle title"><a href="tarifler/'.$sliderURL.'">'.$sliderTITLE.'</a></h2>';
					}
					else {
						$explodeslidertitle=explode(" ",$sliderTITLE);
						$newslidertitle="";
						foreach ($explodeslidertitle as $keys => $values) {
							if($keys==2)
							{
								$newslidertitle.='<br />'.$explodeslidertitle[$keys].' ';
							}
							else {
								$newslidertitle.=$explodeslidertitle[$keys].' ';
							}

						}
						echo '<h2 class="rsSlideTitle title"><a style="font-size:20px" href="tarifler/'.$sliderURL.'">'.$newslidertitle.'</a></h2>';
					}
				}
				echo '
				<div class="rsSlideTitle details">
					<ul>';
					if(strlen($sliderSERVES)>0)
					{
						echo '
						<li><i class="fa fa-cutlery"></i> '.$sliderSERVES.'</li>
						<li><i class="fa fa-clock-o"></i> '.$sliderPREPTIME.'</li>';
					}
					echo '
					</ul>
				</div>';
				if(strlen($sliderSERVES)>0)
				{
					echo '<a href="tarifler/'.$sliderURL.'" class="rsSlideTitle button">Tarife Git</a>';
				}
				echo '
			</div>
			</div>

		</div>
		';
	}

	 ?>

</div>
