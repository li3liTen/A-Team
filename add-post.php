<?php //include config

$pageTitle="Post Your Blog";
//require_once('includes/config.php');
require_once('Templates/editorpageheader.php');
//if not logged in redirect to login page
//if(!$user->is_logged_in()){ header('Location: login.php'); }
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin - Add Post</title>
  
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
</html>
    <?php include('Admin/menu.php');?>
<html>
    <p><a href="./">Blog Admin Index</a></p>

    <h2>Add Post</h2>
</html>
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $postTitle = trim(filter_input(INPUT_POST,"postTitle",FILTER_SANITIZE_STRING));
    $postDesc = trim(filter_input(INPUT_POST,"postDesc",FILTER_SANITIZE_STRING));
    $postCont = trim(filter_input(INPUT_POST,"postCont",FILTER_SANITIZE_SPECIAL_CHARS));
    }

        

    //if form has been submitted process it
    /*if(isset($_POST['submit'])){

        $_POST = array_map( 'stripslashes', $_POST );

        //collect form data
    extract($_POST);;

        //very basic validation
        /*if($postTitle ==''){
            $error[] = 'Please enter the title.';
        }

        if($postDesc ==''){
            $error[] = 'Please enter the description.';
        }

        if($postCont ==''){
            $error[] = 'Please enter the content.';
        } 

        if(!isset($error)){*/  
?> 
<html>     
    <html>     
    <form action="upload.php" method='post'enctype="multipart/form-data" >

            <h2>Upload Accompanying Image</h2>
            
              <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000" />

  <input type="file" name="myfile" />
  
      <p><label>Title</label><br />
        <input type='text' name='Title' required></p>

        <p><label>Description</label><br />
        <input name='postDesc'input type='text'></textarea></p>

        <p><label>Content</label><br />
        <textarea name='post' input type='text'></textarea></p>

        <p><input type='submit'></p>

    </form>
</div> 
</html>
<?php include "editorpagefooter.php"; ?>