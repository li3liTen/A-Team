<?php
error_reporting(E_ALL & ~E_NOTICE); //report all errors except E_NOTICE
session_start();
include_once("connection.php");

try {
      $conn = new PDO($dsn, $user, $password, $options);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("INSERT INTO blogComments2 (firstname, commentPost) VALUES (:firstname, :commentPost)"); //preparing a query

      if($_POST['submit']) {
      $stmt->bindParam(':firstname', $_POST['firstname']);
      $stmt->bindParam(':commentPost', $_POST['commentPost']);

      $stmt->execute();
    }
    $statement = $conn->query("SELECT * FROM blogComments2");

foreach ($statement as $row) {
	echo $row[0] . " " . $row[1] ." ". $row[2] ." ". $row[3] . "<br>";
}
}
        catch(PDOException $e)
            {
            echo "Error: " . $e->getMessage();
            }
        $conn = null;
?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>Your Comments</title>
  </head>
  <body>
<h4>Your comments</h4>

    <form action="index.php" method="post">
        <input type="text" name="firstname" autofocus required placeholder="Type username." /><br />
        <textarea name="commentPost" cols="50" rows="2" placeholder="Tell us your feedback here."></textarea>
    <input type="submit" name="submit" value="Comment">
    </form>
  </body>
</html>
