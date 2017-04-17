<?php

  if (isset($_SESSION['username'])) {
      session_start();
      session_destroy();
  }
require "templates/editorpageheader.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
  </head>

  <body>
   

      <form id="usersignup" name="usersignup" method="post" action="PHP-Login\login\createuser.php">
        <h2 class="form-signup-heading">Register</h2>
        <br>
        Username
          <br>
        <input name="newuser" id="newuser" type="text" placeholder="Username" autofocus>
          <br>
     <p>   Email
           <br><input name="email" id="email" type="text" placeholder="Email"></p>
<br>
<p>Password
      <br><input name="password1" id="password1" type="password"></p>
<p>Repeat Password
      <br><input name="password2" id="password2" type="password"></p>
<br>
 Do you want to be a:
 <br>
   <input type="radio" name="usertype" value="Moderator"> Moderator<br>
  <input type="radio" name="usertype" value="normaluser"> Normal User<br>
        <button name="Submit" id="submit" type="submit">Sign up</button>

        <div id="message"></div>
      </form>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script src="js/signup.js"></script>


    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>

$( "#usersignup" ).validate({
  rules: {
	email: {
		email: true,
		required: true
	},
    password1: {
      required: true,
      minlength: 4
	},
    password2: {
      equalTo: "#password1"
    }
  }
});
</script>

  </body>
</html>

<?php include "editorpagefooter.php";