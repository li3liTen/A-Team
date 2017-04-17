<?php
require_once('includes/config.php');
include 'templates/EditorPageHeader.php';
include "loginheader.php";
//include "connection.php";



//show message from add / edit page


?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <!--<link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">-->
  <script language="JavaScript" type="text/javascript">
 function delpost(id, title)
  {
     if (confirm("Are you sure you want to delete '" + title + "'"))
      {
         window.location.href = 'index.php?delpost=' + id;
      }
  }
  </script>
  <?php


?>
</head>
<body>

    <div id="wrapper">

    <?php include('admin/menu.php');?>

    <?php
    //show message from add / edit page
    if(isset($_GET['action'])){
        echo '<h3>Post '.$_GET['action'].'.</h3>';
    }
    
      if(isset($_GET['delpost'])){

    $stmt = $conn->prepare('DELETE FROM blogPosts WHERE postID = :postID') ;
    $stmt->execute(array(':postID' => $_GET['delpost']));

    header('Location: index.php?action=deleted');
    exit;
}
    ?>

    <table>
    <tr>
        <th>Title</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
    <?php
    $username = $_SESSION['username'];
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$selectallblogs = "SELECT blogposts.username,blogposts.title,members.usertype from blogposts inner join members on blogposts.username=members.username where blogposts.username like '$username'";
$viewallblogs = $conn->query($selectallblogs);
$selectallblogs2=$viewallblogs->fetchAll(PDO::FETCH_ASSOC);

 foreach($selectallblogs2 as $allrows){
     if ($allrows['usertype'] == 'Moderator') {
        $showallblogs = $conn->query("select postid, title, postdate FROM blogposts ORDER BY postid DESC"); 
     $allblogs = $showallblogs->fetchAll(PDO::FETCH_ASSOC);
     
     foreach ($allblogs as $allrows2) {
         
   
         
                echo '<tr>';
                echo '<td>'.'</td>';
                echo '<td>'.date('jS M Y', strtotime($allrows2['postdate'])).'</td>'; 
                ?>
  <td>
                   <td>
                    <a href="edit-post.php?id=<?php echo $allrows2['postid'];?>">Edit</a> |
                    <a href="javascript:delpost('<?php echo $allrows2['postid'];?>','<?php echo $allrows2['title'];?>')">Delete</a>
                </td>
            </td>
                
                </td> 

                <?php
                echo '</tr>';
     }
           

        }
 

else {


        $selectblogs = "SELECT postid,title,postdate,username FROM blogposts where username like '$username'";
$viewblogs = $pdo->query($selectblogs);
$selectblogs2=$viewblogs->fetchAll(PDO::FETCH_ASSOC);

 foreach($selectblogs2 as $row){

                echo '<tr>';
                echo '<td>'.$row['title'].'</td>';
                echo '<td>'.date('jS M Y', strtotime($row['postdate'])).'</td>';
                ?>

             <td>
                    <a href="edit-post.php?id=<?php echo $row['postid'];?>">Edit</a> |
                    <a href="javascript:delpost('<?php echo $row['postid'];?>','<?php echo $row['title'];?>')">Delete</a>
                </td> 

                <?php
                echo '</tr>';

 }

        }
 
         }

    ?>
    </table>

    <p><a href='add-post.php'>Add Post</a></p>

</div>
<?php 
//include('Templates/EditorPageFooter.php');
?>
</body>
</html>



