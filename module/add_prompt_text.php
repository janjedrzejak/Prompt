<?php

	if(isset($_POST['content']) && isset($_POST['nick'])) {
		$content = htmlspecialchars($_POST['content']);
		$nick = htmlspecialchars($_POST['nick']);

		$date=date('Y:m:d h:i:s');
		$client = new MongoDB\Client;
		$promptdb = $client->promptdb;
		$promptDocuments = $promptdb->promptDocuments;

		$insertResult = $promptDocuments->insertOne(
			['nick' => $nick, 'date' => $date, 'content' => $content]
		);
		header('Location:index.php?page=prompter');
	}
	
?>