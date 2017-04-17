<?php
 require "PHP-Login/login/loginheader.php"; 
   include "templates/EditorPageHeader.php";
   
   include "templates/TextEditor.php";
  $myusername = $_SESSION['username'];
   ?>
Welcome <?php echo $myusername ;?>!
<form method="post" action="upload.php">
    
   Subject: <input type="text" name="subject">
   
   <h1>Post:</h1>
<input type="hidden" name="username" >
   <textarea name="blogpost" cols="100" rows="10"></textarea>
   
   <input type="submit">
   </form>
   <?php
   include "EditorPageFooter.php";
   ?>
	