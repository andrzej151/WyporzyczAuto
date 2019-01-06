<?php

$config = require_once 'config.php';

try {
	
	$db = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password, [
		PDO::ATTR_EMULATE_PREPARES => false, 
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	]);
	
} catch (PDOException $error) {
	
	echo $error->getMessage();
	exit('Database error');
	
}

