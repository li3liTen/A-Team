<?php require('includes/config.php'); 
require_once('Templates/EditorPageHeader.php');?>
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

                $stmt = $conn->query('SELECT postID, postTitle, postDesc, postDate FROM blogPosts ORDER BY postID DESC');
                while($row = $stmt->fetch()){

                    echo '<div>';
                        echo '<h1><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
                        echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
                        echo '<p>'.$row['postDesc'].'</p>';
                        echo '<p><a href="viewpost.php?id='.$row['postID'].'">Read the complete blog here!</a></p>';
                    echo '</div>';

                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        ?>

   

<?php 
require_once('Templates/EditorPageFooter.php');
?>
</body>
</html>

