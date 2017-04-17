<?php 
$pageTitle = "Category Blogs";
$section = null;

if (isset($_GET["cat"])) {
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
require('includes/config.php');

require_once('Templates/EditorPageHeaderBlogs.php');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$choosesection ="SELECT postid, subtitle,title,category, post, postdate FROM blogposts WHERE category like '$section'";
$cat = $conn->query($choosesection);
$categories=$cat->fetchAll(PDO::FETCH_ASSOC);

//$categories->execute(array('category' => $_GET['cat']));
foreach($categories as $categories2) {
             echo '<div>';
                        echo '<h1><a href="viewpost.php?id='.$categories2['postid'].'">'.$categories2['title'].'</a></h1>';
                        echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($categories2['postdate'])).'</p>';
                        echo '<p>'.$categories2['subtitle'].'</p>';
                        echo '<p><a href="viewpost.php?id='.$categories2['postid'].'">Read the complete blog here!</a></p>';
                    echo '</div>'; 
}

    
    /*if ($categories2['category'] == 'pampering') {
   header('Location:category.php?cat=pampering');
    
}
*/

//if post does not exists redirect user.
if($section == ''){
    header('Location: ./');
    exit;
    }