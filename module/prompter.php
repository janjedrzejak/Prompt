<html>
	<head>
		<meta charset="utf-8">

	<title>Prompt</title>
	<meta name="author" content="Jan Jędrzejak">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="icon" href="img/favicon.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/src.js"></script>

	</head>
	<body id="body">
		<div class="navibar">
			<a href="index.php?page=home"><img src="img/logo.png" class="logo"></a>
			<div class="media-controls">
				<a id="on-start" href="#"><img src="img/svg/icon_start.svg" class="media-button"></a>
				<a id="play" href="#"><img src="img/svg/icon_play.svg" class="media-button" id="play-button"></a>
				<a id="on-end" href="#"><img src="img/svg/icon_end.svg" class="media-button"></a>
				<a id="full-screen" href="#"><img src="img/svg/icon_full.svg" class="media-button" id="full-screen-button"></a>
				<a id="flip-screen" href="#"><img src="img/svg/icon_flip.svg" class="media-button" id="flip-screen-button"></a>
			</div>
			<div class="speed-control">
					<input type="range" id="speed" min="0" max="10000" value="1000" onchange="change_speed()">
			</div>
			<div class="additonal-controls">
					<a id="" href="index.php?page=home">DODAJ AKAPIT</a>
					<a id="" href="index.php?page=clear_prompt_text">CZYŚĆ</a>
			</div>
		</div>

		<div class="prompter" id="prompter">
		<div id="start"></div>
			<?php
				require 'read_prompt_text.php';
			?>	
		<div id="end"></div>
		</div>
		
	
	</body>
</html>