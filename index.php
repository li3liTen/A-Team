<?php require('includes/config.php'); 

$pageTitle = "All blogs";
$section = null;

/*if (isset($_GET["cat"])) {
    if ($_GET["cat"] == "pampering") {
    $pageTitle = "Pampering";
    $section = "pampering";
  } else if ($_GET["cat"] == "travel") {
    $pageTitle = "Travel";
    $section = "travel";
  } else if ($_GET["cat"] == "furryfriends") {
    $pageTitle = "Furry Friends";
    $section = "furryfriends";
  } else if ($_GET["cat"] == "moviesandmusic") {
    $pageTitle = "Movies And Music";
    $section = "moviesandmusic";
  }
}

*/

require_once('Templates/EditorPageHeaderBlogs.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <!--<link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css"> -->
</head>
<body>

    

        <h1>Blog</h1>
        <hr /> 

        <?php
            try {

                $stmt = $conn->query('SELECT postID, Title, subtitle, postDate FROM blogPosts ORDER BY postID DESC');
                while($row = $stmt->fetch()){

                    echo '<div>';
                        echo '<h1><a href="viewpost.php?id='.$row['postID'].'">'.$row['Title'].'</a></h1>';
                        echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
                        echo '<p>'.$row['subtitle'].'</p>';
                        echo '<p><a href="viewpost.php?id='.$row['postID'].'">Read the complete blog here!</a></p>';
                    echo '</div>';

                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        ?>

   

<?php 
include('Templates/EditorPageFooter.php');
?>
</body>
</html>

