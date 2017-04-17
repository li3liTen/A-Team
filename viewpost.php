
<?php
//used to display any post that has been clicked on
?>

<?php require('includes/config.php');
include('Templates/EditorPageHeaderBlogs.php');

//$stmt = $conn->prepare('SELECT postID, postTitle, postCont, postDate FROM blogPosts WHERE postID = :postID');

$stmt = $conn->prepare('SELECT postID, Title, post, postDate FROM blogPosts WHERE postID = :postID');

$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
    header('Location: ./');
    exit;
}

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

        <h1>Blog</h1>
        <hr />
        <p><a href="./">Blog Index</a></p>


        <?php
            echo '<div>';
                echo '<h1>'.$row['Title'].'</h1>';
                echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
                echo '<p>'.$row['post'].'</p>';
            echo '</div>';
        ?>

    </div>
<?php 
include('Templates/EditorPageFooter.php');
?>

</body>
</html>
