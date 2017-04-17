<?php
  //$dbCon = mysqli_connect("localhost", "root", "password", "learnlearn") or die(mysqli_error());

const DB_DSN = 'mysql:host=localhost;dbname=login';
const DB_USER = 'root';
const DB_PASS = '';

try {							
     $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
} catch (PDOException $e) {
	die($e->getMessage()); 
}
