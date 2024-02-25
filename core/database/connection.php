<?php 
	$dsn = 'mysql:host=127.0.0.1;port=3308;dbname=tweety'; // Assuming port 3306
	$user = 'root';
	$password = '';
 

	try {
		$pdo = new PDO($dsn, $user, $password);
	} catch(PDOException $e) {
		echo 'Connection error! ' . $e->getMessage();
	}	
?>

