<?php
	$client = new MongoDB\Client;
	$promptdb = $client->promptdb;
	$promptDocuments = $promptdb->promptDocuments;

	$mObj = $promptDocuments->find();

	foreach ($mObj as $row) {
		echo '<p>' . $row['content'] . '</p>';
	}
?>