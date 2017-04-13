<?php //include config
require_once('../includes/config.php');
include('../Templates/EditorPageHeader.php');

//if not logged in redirect to login page
//if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin - Edit Post</title>
  
  <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
  <script>
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>
</head>
<body>

<div id="wrapper">

    <?php include('menu.php');?>
    <p><a href="./">Blog Admin Index</a></p>

    <h2>Edit Post</h2>


    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $postTitle = trim(filter_input(INPUT_POST,"postTitle",FILTER_SANITIZE_STRING));
    $postDesc = trim(filter_input(INPUT_POST,"postDesc",FILTER_SANITIZE_STRING));
    $postCont = trim(filter_input(INPUT_POST,"postCont",FILTER_SANITIZE_SPECIAL_CHARS));

    if ($postTitle == "" || $postDesc == "" || $postCont == "") {
            echo "Please fill in the required fields: Title, Description and Post";
            exit;
        } else {
    //if form has been submitted process it
    if(isset($_POST['submit'])){

        $_POST = array_map( 'stripslashes', $_POST );

        //collect form data
        extract($_POST);

        //very basic validation
        /*if($postID ==''){
            $error[] = 'This post is missing a valid id!.';
        }

        if($postTitle ==''){
            $error[] = 'Please enter the title.';
        }

        if($postDesc ==''){
            $error[] = 'Please enter the description.';
        }

        if($postCont ==''){
            $error[] = 'Please enter the content.';
        }

        if(!isset($error)){*/

            try {

                //insert into database
                $stmt = $conn->prepare('UPDATE blogPosts SET postTitle = :postTitle, postDesc = :postDesc, postCont = :postCont WHERE postID = :postID') ;
                $stmt->execute(array(
                    ':postTitle' => $postTitle,
                    ':postDesc' => $postDesc,
                    ':postCont' => $postCont,
                    ':postID' => $postID
                ));

                //redirect to index page
                header('Location: index.php?action=updated');
                exit;

            } catch(PDOException $e) {
                echo $e->getMessage();
            }

        }

    }
}

    ?>


    <?php
    //check for any errors
    /*if(isset($error)){
        foreach($error as $error){
            echo $error.'<br />';
        }
    }*/

        try {

            $stmt = $conn->prepare('SELECT postID, postTitle, postDesc, postCont FROM blogPosts WHERE postID = :postID') ;
            $stmt->execute(array(':postID' => $_GET['id']));
            $row = $stmt->fetch(); 

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

    ?>

    <form action='' method='post'>
        <input type='hidden' name='postID'>

        <p><label>Title</label><br />
        <input type='text' name='postTitle'></p>

        <p><label>Description</label><br />
        <textarea name='postDesc' cols='60' rows='10'></textarea></p>

        <p><label>Content</label><br />
        <textarea name='postCont' cols='60' rows='10'></textarea></p>

        <p><input type='submit' name='submit' value='Update'></p>

    </form>

</div>

<?php 
include('../Templates/EditorPageFooter.php');
?>
</body>
</html>  
