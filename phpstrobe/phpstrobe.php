<html>
<head>
	<!-- METADATA -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Description" content="PHP/CSS Rave Strobe" />
	<meta name="Keywords" content="works, best, with, hardstyle" />
	<meta name="Author" content="Noq" />
	<title>Instant Rave</title>
	<!-- END OF METADATA -->
</head>

<body>

<style type="text/css">
p
{
	font-size: 12px;
	font-family:  "Calibri";
	color: #ffffff;
}

#infoboxa
{
	position: absolute;
	background-color: #5c595a;
	width: 300px;
	horizontal-align: middle;
    left: 50%;
	margin-left: -150px;
	top: 20px;
}

#infoboxb
{
	position: absolute;
	background-color: #5c595a;
	width: 300px;
	horizontal-align: middle;
    left: 50%;
	margin-left: -150px;
	bottom: 20px;
}
</style>




<?php

$redbg = rand(0,100);
$greenbg = rand(0,100);
$bluebg = rand(0,100);
$colorMinus = rand(30,40);

//Check for recurrence
if(isset($_POST['update_bpm']))
{
	//Check if bpm box was empty or a text string
	if (empty($_POST['bpm']))
	{
		//----- ACTIVATE DEMOMODE-----
		$beatsPerMinute = 132;
	
		echo '
		<div id="infoboxa">
		<center>
		<p>
		-DEMO MODE-
		<br />
		&#9835 : Noq - Pea Soup
		</p>
		</center>
	
		<audio controls autoplay>
		<source src="./peasoup.mp3" type="audio/mpeg" />
		</audio>
		</div>
		';
	}
	//Set maximum limit for bpm
	elseif ($_POST['bpm'] <= 600)
	{
		$beatsPerMinute = $_POST['bpm'];
	}
	//Set bpm to 90 is limit was exceeded
	else
	{
		$beatsPerMinute = 90;
	}
}
//If there was no recurrence...
else
{
	//----- ACTIVATE DEMOMODE-----
	$beatsPerMinute = 132;
	
	echo '
	<div id="infoboxa">
	<center>
	<p>
	-DEMO MODE-
	<br />
	&#9835 : Noq - Pea Soup
	</p>
	</center>
	
	<audio controls autoplay>
	<source src="./peasoup.mp3" type="audio/mpeg" />
	</audio>
	</div>
	';
}


$animInterval = 60/$beatsPerMinute;


		echo '
		<style type="text/css">
		@keyframes rave
		{
			0%		{background-color: rgb(' . $redbg . ',' . $greenbg . ',' . $bluebg .  ');}
			25%		{background-color: rgb(' . ($redbg-($colorMinus*1)) . ',' . ($greenbg-($colorMinus*1)) . ',' . ($bluebg-($colorMinus*1)) .  ');}
			50%		{background-color: rgb('  . ($redbg-($colorMinus*2)) . ',' . ($greenbg-($colorMinus*2)) . ',' . ($bluebg-($colorMinus*2)) .  ');}
			75%		{background-color: rgb('  . ($redbg-($colorMinus*3)) . ',' . ($greenbg-($colorMinus*3)) . ',' . ($bluebg-($colorMinus*3)) .  ');}
			100%	{background-color: rgb('  . ($redbg-($colorMinus*4)) . ',' . ($greenbg-($colorMinus*4)) . ',' . ($bluebg-($colorMinus*4)) .  ');}
			
		}

		body
		{
		background-color: rgb(' . $redbg . ',' . $greenbg . ',' . $bluebg .  ');
		animation-name: rave;
		animation-duration: '.$animInterval.'s;
		animation-iteration-count: infinite;
		animation-timing-function: ease-in;
		}
		';
		
				
		$red = rand(130,255);
		$green = rand(130,255);
		$blue = rand(130,255);
		$colorMinus = rand(30,40);
		
		echo'
		@keyframes raveboxa
		{
			0%		{background-color: rgb(' . $red . ',' . $green . ',' . $blue .  ');}
			25%		{background-color: rgb(' . ($red-($colorMinus*2)) . ',' . ($green-($colorMinus*2)) . ',' . ($blue-($colorMinus*2)) .  ');}
			50%		{background-color: rgb('  . ($red-($colorMinus*4)) . ',' . ($green-($colorMinus*4)) . ',' . ($blue-($colorMinus*4)) .  ');}
			75%		{background-color: rgb('  . ($red-($colorMinus*6)) . ',' . ($green-($colorMinus*6)) . ',' . ($blue-($colorMinus*6)) .  ');}
			100%	{background-color: rgb('  . ($red-($colorMinus*8)) . ',' . ($green-($colorMinus*8)) . ',' . ($blue-($colorMinus*8)) .  ');}
			
		}
		
		#raveboxa
		{
		width: 10%;
		height: 50%;
		left: 24%;
		top: 25%;
		position: absolute;
		background-color: rgb(' . $red . ',' . $green . ',' . $blue .  ');
		animation-name: raveboxa;
		animation-duration: '.($animInterval*4).'s;
		animation-delay: '.($animInterval*1).'s;
		animation-iteration-count: infinite;
		animation-timing-function: linear;	
		}
		';
		
		$red = rand(130,255);
		$green = rand(130,255);
		$blue = rand(130,255);
		$colorMinus = rand(30,40);
		
		echo'
		@keyframes raveboxb
		{
			0%		{background-color: rgb(' . $red . ',' . $green . ',' . $blue .  ');}
			25%		{background-color: rgb(' . ($red-($colorMinus*2)) . ',' . ($green-($colorMinus*2)) . ',' . ($blue-($colorMinus*2)) .  ');}
			50%		{background-color: rgb('  . ($red-($colorMinus*4)) . ',' . ($green-($colorMinus*4)) . ',' . ($blue-($colorMinus*4)) .  ');}
			75%		{background-color: rgb('  . ($red-($colorMinus*6)) . ',' . ($green-($colorMinus*6)) . ',' . ($blue-($colorMinus*6)) .  ');}
			100%	{background-color: rgb('  . ($red-($colorMinus*8)) . ',' . ($green-($colorMinus*8)) . ',' . ($blue-($colorMinus*8)) .  ');}
			
		}
		
		#raveboxb
		{
		width: 10%;
		height: 50%;
		left: 38%;
		top: 25%;
		position: absolute;
		background-color: rgb(' . $red . ',' . $green . ',' . $blue .  ');
		animation-name: raveboxb;
		animation-duration: '.($animInterval*4).'s;
		animation-delay: '.($animInterval*2).'s;
		animation-iteration-count: infinite;
		animation-timing-function: linear;	
		}
		';
		
		$red = rand(130,255);
		$green = rand(130,255);
		$blue = rand(130,255);
		$colorMinus = rand(30,40);
		
		echo'
		@keyframes raveboxc
		{
			0%		{background-color: rgb(' . $red . ',' . $green . ',' . $blue .  ');}
			25%		{background-color: rgb(' . ($red-($colorMinus*2)) . ',' . ($green-($colorMinus*2)) . ',' . ($blue-($colorMinus*2)) .  ');}
			50%		{background-color: rgb('  . ($red-($colorMinus*4)) . ',' . ($green-($colorMinus*4)) . ',' . ($blue-($colorMinus*4)) .  ');}
			75%		{background-color: rgb('  . ($red-($colorMinus*6)) . ',' . ($green-($colorMinus*6)) . ',' . ($blue-($colorMinus*6)) .  ');}
			100%	{background-color: rgb('  . ($red-($colorMinus*8)) . ',' . ($green-($colorMinus*8)) . ',' . ($blue-($colorMinus*8)) .  ');}
			
		}
		
		#raveboxc
		{
		width: 10%;
		height: 50%;
		left: 52%;
		top: 25%;
		position: absolute;
		background-color: rgb(' . $red . ',' . $green . ',' . $blue .  ');
		animation-name: raveboxc;
		animation-duration: '.($animInterval*4).'s;
		animation-delay: '.($animInterval*3).'s;
		animation-iteration-count: infinite;
		animation-timing-function: linear;	
		}
		';
		
		$red = rand(130,255);
		$green = rand(130,255);
		$blue = rand(130,255);
		$colorMinus = rand(30,40);
		
		echo'
		@keyframes raveboxd
		{
			0%		{background-color: rgb(' . $red . ',' . $green . ',' . $blue .  ');}
			25%		{background-color: rgb(' . ($red-($colorMinus*2)) . ',' . ($green-($colorMinus*2)) . ',' . ($blue-($colorMinus*2)) .  ');}
			50%		{background-color: rgb('  . ($red-($colorMinus*4)) . ',' . ($green-($colorMinus*4)) . ',' . ($blue-($colorMinus*4)) .  ');}
			75%		{background-color: rgb('  . ($red-($colorMinus*6)) . ',' . ($green-($colorMinus*6)) . ',' . ($blue-($colorMinus*6)) .  ');}
			100%	{background-color: rgb('  . ($red-($colorMinus*8)) . ',' . ($green-($colorMinus*8)) . ',' . ($blue-($colorMinus*8)) .  ');}
			
		}
		
		#raveboxd
		{
		width: 10%;
		height: 50%;
		left: 66%;
		top: 25%;
		position: absolute;
		background-color: rgb(' . $red . ',' . $green . ',' . $blue .  ');
		animation-name: raveboxd;
		animation-duration: '.($animInterval*4).'s;
		animation-delay: '.($animInterval*4).'s;
		animation-iteration-count: infinite;
		animation-timing-function: linear;	
		}
		';
		
		echo'
		</style>
		';
		

		
		
		echo '
		<div id="raveboxa"></div>
		<div id="raveboxb"></div>
		<div id="raveboxc"></div>
		<div id="raveboxd"></div>
		
		
		<div id="infoboxb">
		<center><p>PHP/CSS Rave Strobe v1.2 by Noq</p></center>
		<hr>

		
		<form action="./phpstrobe.php" method="post">
		<p>
		<center>
		<input type="text" name="bpm" size="3" value="" />
		<input type="submit" name="update_bpm" value="Update BPM" />
		</center>
		</p>
		
		<center><p>Currently animating at <b>'.$beatsPerMinute.'&nbspBPM</p></b></center>

		</form>
		</div>
		';

?>



</body>
</html>