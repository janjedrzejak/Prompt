<?php
	$client = new MongoDB\Client;
	$promptdb = $client->promptdb;
	$promptDocuments = $promptdb->promptDocuments;

	$mObj = $promptDocuments->drop();
	header('Location:index.php?page=prompter');
	
?>