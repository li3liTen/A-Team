<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:../index.php");
}
?>
<?php
require_once('Templates/editorpageheader.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>


    <meta charset="utf-8">
    
    <title>Login</title>

  <body>

      <form class="form-signin" name="form1" method="post" action="PHP-Login/login/checklogin.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
        <!-- The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
        <button name="Submit" type="submit">Sign in</button>
        <h2>Don't have an account?  <a href="signup.php">Register!</a></h2>
        <div id="message"></div>
      </form>

    </div> <!-- /container -->
  </body>
</html>

<?php include "editorpagefooter.php"; ?>

