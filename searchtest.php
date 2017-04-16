<?php


const DB_DSN = 'mysql:host=localhost;dbname=login';
const DB_USER = 'root';
const DB_PASS = '';

try {							
     $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
} catch (PDOException $e) {
	die($e->getMessage()); 
}

if (isset($_POST["search"])) {

$searchtext = $_POST["search"];
$search = $pdo->prepare("SELECT 'title','subtitle',post FROM `blogposts` WHERE `post` LIKE ?");
$search->execute(array("%$searchtext%"));
foreach($search as $searchresults) {
   
   $post = substr($searchresults['post'],0,200);
  echo $searchresults['title'] ."\n". $searchresults['subtitle'] . "\n" . $post . "...";
}
}

else {
    
    echo "Search field empty!";
}
?>
