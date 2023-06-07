<?php

try {
	$pdo = new PDO('mysql:dbname=crud; host=localhost', 'crud', '1234');
} catch (PDOException $e) {
	die($e->getMessage());
}