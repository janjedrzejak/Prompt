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
	<body>
		<div class="center-box">
			<a href="index.php?page=home"><img src="img/logo.png"></a>
			<form action="index.php?page=add_prompt_text" method="POST">
				<textarea name="content" class="input-text" placeholder=
"Witaj
To jest prompter telewizyjno - konferencyjny. 
W tym oknie umieść tekst, który chcesz wyświetlić."
				></textarea>
				<input type="text" name="nick"  class="nick" placeholder="nick">
				<input type="submit" name="submit" class="submit" value="wyślij na prompter">
			</form>
		</div>
	</body>
</html>