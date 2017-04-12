<?php
  error_reporting(E_ALL & ~E_NOTICE); //report all errors except E_NOTICE
?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>Simple Blog</title>
  </head>
  <body>
    <h1 style="text-align: center";>My GrandmaLife Blog</h1>
    <?php

    include_once("connection.php");

    try {
      $conn = new PDO($dsn, $user, $password, $options);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $statement = $conn->query("SELECT * FROM blogPosts");
        /*$stmt->bindParam(':title', $title); //I want to bind these parameters.
        $stmt->bindParam(':subtitle', $subtitle);
        $stmt->bindParam(':post', $post);
        $stmt->bindParam(':tags', $tags);*/

      foreach ($statement as $row) {
?>
    <h2><?php echo $row[1]; ?> - <small><?php echo $row[2]; ?></small></h2>
    <p><?php echo $row[3]; ?></p>
    <p><small><?php echo "Published on " . $row[5] ?></small></p>
    <hr />
<?php
    }
  }

    /*$sql = "SELECT * FROM blogPosts ORDER BY id DESC";
    $result = mysqli_query($dbCon, $sql);

    while ($row = mysqli_fetch_array($result)) {
      $title = $row['title'];
      $subtitle = $row['subtitle'];
      $post = $row['post'];
      $postDate = $row['postDate'];
      $owner_id = $row['owner_id'];*/

    catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
        }
    $conn = null;
    ?>

    <br />
    <a href="admin2.php">Click here to post another blog!</a>
    <br />
    
    <?php

    include_once("Comments.php");

    ?>


    
  </body>
  </html>
