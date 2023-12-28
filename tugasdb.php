<?php
	require'vendor/autoload.php';

	$client = new MongoDB\Client;

	$TugasPrakPAW = $client->Prak;

	$result1 = $Prak->createCollection('restaurant');
	var_dump($result1);
?>