
<?php require "PHP-Login\login\loginheader.php"; 

error_reporting(E_ALL & ~E_NOTICE); //report all errors except E_NOTICE
session_start();



if (isset($_SESSION['username'])) {
  $username = ucfirst($_SESSION['username']); //returns a string with the first character of a string capitalised.
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim(filter_input(INPUT_POST,"title",FILTER_SANITIZE_STRING));
    $subtitle = trim(filter_input(INPUT_POST,"subtitle",FILTER_SANITIZE_STRING));
    $post = trim(filter_input(INPUT_POST,"post",FILTER_SANITIZE_SPECIAL_CHARS));

    /*if ($title == "" || $subtitle == "" || $post == "") {
            echo "Please fill in the required fields: Title, Subtitle and Post";
            exit;
        }*/
        header("location:admin2.php?status=thanks2");
} 

include "Templates/EditorPageHeader.php";
include "Templates/TextEditor.php";

include_once("connection.php");


try {
      $conn = new PDO($dsn, $user, $password, $options);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("INSERT INTO blogPosts (title, subtitle, post,username) VALUES (:title, :subtitle, :post, :username)"); //preparing a query

      if($_POST['submit']) {
      $stmt->bindParam(':title', $_POST['title']);
      $stmt->bindParam(':subtitle', $_POST['subtitle']);
      $stmt->bindParam(':post', $_POST['post']);
      $stmt->bindParam('username',$_SESSION['username']);

      $stmt->execute();
      //echo "Blog entry posted";
    }
}

catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>


<html>
  <head>
      <meta charset="UTF-8">
      <title>Admin Page</title>
  </head>
  <body>
      <?php if (isset($_GET["status"]) && $_GET["status"] == "thanks2" /*&& $_SERVER['REQUEST_METHOD'] == 'POST'*/) {
            echo "<p>Thanks for your blog post. You can check out your post by clicking on the 'Your Blogs' link below: </p>"; 
            echo "<a href=index.php>Your Blogs</a>";
              /* try {
     upload_file();
}

catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
};*/
            
        } else { ?>

    
    <form method="post" action="admin2.php">

   Title: <input type="text" name="title" required/><br />
   Subtitle: <input type="text" name="subtitle"  required/><br />
   
   <h1>Post:<h1>
   <input type="hidden" name="username" value= "$_SESSION['username']">
   <textarea name="post" cols="100" rows="10" required></textarea>

           
   <input type="submit" name="submit" value="Post Blog Entry"/>
        <?php } ?>
   <br />
   </form>

    <br />
    <a href="index.php">View Home Page</a> | <a href="logout.php">Logout</a>


 
   </body>
   
 <?php include "Templates/EditorPageFooter.php"; ?>
  <html>
  
