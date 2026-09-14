<?php

$host = '127.0.0.1';
$port = '5432';
$dbname = 'postgres';
$user = 'postgres';
$pass = '022009';

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";

try {
	$pdo = new PDO($dsn, $user, $pass);
	
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	echo "Connected to the PostgreSQL database successfully!";
} catch (PDOException $e) {
	die("Connection failed: " . $e->getMessage());
}

?>