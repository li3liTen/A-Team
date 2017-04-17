<?php //include config
include "loginheader.php";
$pageTitle="Post Your Blog";
$section = null;
//require_once('includes/config.php');
include('Templates/EditorPageHeaderBlogs.php');

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

    <?php include('Admin/menu.php');?>
    <p><a href="./">Blog Admin Index</a></p>

    <h2>Add Post</h2>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $title = trim(filter_input(INPUT_POST,"title",FILTER_SANITIZE_STRING));
          $post = trim(filter_input(INPUT_POST,"post",FILTER_SANITIZE_EMAIL));
          $category = trim(filter_input(INPUT_POST,"category",FILTER_SANITIZE_STRING));

          if ($title == "" || $post == "" || $category == "") {
          echo "Please fill in the required fields: Title, Post and Category";
          exit;
    }

    //if form has been submitted process it
    if(isset($_POST['submit'])){

        $_POST = array_map( 'stripslashes', $_POST );

        //collect form data
        extract($_POST);

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

            try {

                //insert into database
                $stmt = $db->prepare('INSERT INTO blogposts (title,subtitle,post,postDate,category) VALUES (:title, :subtitle, :post, :postDate, :category)') ;
                $stmt->execute(array(
                    ':title' => $title,
                    ':subtitle' => $subtitle,
                    ':post' => $post,
                    ':postDate' => date('Y-m-d H:i:s'),
                    ':category' => $category
                ));

                //redirect to index page
                header('Location: index.php?action=added');
                exit;

            } catch(PDOException $e) {
                echo $e->getMessage();
            }

        }

    }

    //check for any errors
   /* if(isset($error)){
        foreach($error as $error){
            echo '<p class="error">'.$error.'</p>';
        }
    } */
    ?>

    <p><label>Select your image (Required!):</label><br />
    <form action="upload.php" method='post'enctype="multipart/form-data" >

            <h2>Upload Accompanying Image</h2>

              <input type="hidden"
           name="MAX_FILE_SIZE"
         value="10000000" />

  <input type="file" name="myfile" />
  <br />

       <p><label>What will your blog be about?! (Required!)</label><br />
       <select name="category">
       <option value="">Select One</option>
       <option value="pampering">Pampering</option>
       <option value="travel">Travel</option>
       <option value="furryfriends">Furry Friends</option>
       <option value="moviesandmusic">Movies and Music</option>
       </select>
       <br />
       <br />


        <p><label>Title (Required!)</label><br />
        <input type='text' name='title' required></p>
        <br />

        <p><label>Description</label><br />
            <input name='subtitle'input type='text'></p>
        <br />

        <p><label>Content (Required!)</label><br />
        <textarea name='post' input type='text'></textarea></p>
        <br />

        <p><input type='submit'></p>
        <br />

    </form>
</div>
</html>
<?php include "Templates/EditorPageFooter.php"; ?>