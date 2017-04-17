
<?php
  const DB_DSN = 'mysql:host=localhost;dbname=login';
const DB_USER = 'root';
const DB_PASS = '';
try {							
      $comments = new PDO(DB_DSN, DB_USER, DB_PASS);
} catch (PDOException $e) {
	die($e->getMessage()); 
}

?>

<?php require('includes/config.php');
include('Templates/EditorPageHeaderBlogs.php');



$stmt = $conn->prepare('SELECT postID, Title, subtitle,post, picture, postDate,username FROM blogPosts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
    header('Location: ./');
    exit;
}

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog - <?php echo $row['Title'];?></title>
    <!--<link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">-->
</head>
<body>

    <div id="wrapper">
        <h1><?php echo $_GET['id'];?></h1>
        <h1>Blog</h1>
        <hr />
        <p><a href="./">Blog Index</a></p>


        <?php
        
        
            echo '<div>';
            
            //echo $row['picture'];
            //print $row['picture'] ."<br />";
echo '<img src="'.$row['picture'].'" alt="'.$row['Title'].'" width = "400"/>'."<br /><br />";


                echo '<h1>'.$row['Title'].'</h1>';
                   echo 'By ' .$row['username'];
                echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
                echo '<p>'.$row['post'].'</p>';
            echo '</div>';
            ?>
            <h4>Your comments</h4>

    <form action="" method="post">
        <input type="text" name="author" autofocus required placeholder="Type username." /><br />
        <textarea name="commentpost" cols="50" rows="2" placeholder="Let us know what you think!"></textarea>

    <input type="submit" name="submit" value="Comment">
    </form>
            
             <h2>Comments</h2>

  
    </div>

<?php

$postid = "SELECT postid FROM blogposts where title = '".$row['Title']."'";
if (isset($_POST["submit"])) {

     $comments->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $comconn="INSERT INTO comments (url,author,comment) VALUES ('".$id."','".$_POST["author"]."','".$_POST["commentpost"]."')";
$comments->query($comconn);
    
};
$comments2="SELECT url,author,comment FROM comments WHERE url like $id";
$echocomment = $comments->query($comments2);
$printcomment=$echocomment->fetchAll(PDO::FETCH_ASSOC);

   foreach ($printcomment as $lotsofcomments) {
echo "<br>". "Comment" . "<br>". $lotsofcomments["author"] . '<br>' . $lotsofcomments["comment"] ;

   }
include('Templates/EditorPageFooter.php');
?>

</body>
</html>
