<?php
require_once('Templates/editorpageheader.php');
const DB_DSN = 'mysql:host=localhost;dbname=login';
const DB_USER = 'root';
const DB_PASS = '';

try {							
     $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
} catch (PDOException $e) {
	die($e->getMessage()); 
}



$q = 'test';
$search = $pdo->prepare("SELECT title,subtitle,post FROM `blogposts` WHERE `post` LIKE ?");
$search->execute(array("%$q%"));
foreach($search as $searchresults) {
   
   $post = substr($searchresults['post'],0,50);
  echo "<h2>". $searchresults['title']. "</h2>" ."\n". "<h3>".$searchresults['subtitle']."</h3>" . "\n" . $post . "...";
}

include('editorpagefooter.php');
?>
