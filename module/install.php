<?php

	$client = new MongoDB\Client;

	$promptdb = $client->promptdb;

	$result1 = $promptdb->createCollection('promptDocuments');

	var_dump($result1);
	echo '<br>Utworzono bazę do przechowywania wpisów';
?>