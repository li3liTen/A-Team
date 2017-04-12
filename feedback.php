<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $feedback = trim(filter_input(INPUT_POST, "feedback", FILTER_SANITIZE_SPECIAL_CHARS));



    if ($name == "" || $email == "" || $feedback == "" ){
        $error_message = "Please fill in the required fields: Name, Email, Feedback";
    }

    if (!isset($error_message) && $_POST["address"] != ""){
        $error_message = "Bad form input";
    }

//this needs to be connected to the phpmailer we're using for the login form
    require "Include/phpmailer/class.phpmailer.phpmailer";

// what is the variable for the PHP mailer for the login form?
    $mail = new PHPMailer;

    if (!isset($error_message) && !$mail -> ValidateAddress($email)) {
        $error_message = "Invalid Email Address";
    }

    if (!isset($error_message)) {

        $email_body = "";
        $email_body .= "Name " . $name . "\n";
        $email_body .= "Email " . $email . "\n";
        $email_body .= "Feedback " . $feedback . "\n";

// need to change the email address we are sending the feedback to

        $mail->setFrom($email, $name);
        $mail->addAddress('stefania-andreeapopescu@localhost', 'Stefi Popescu');

        $mail->isHTML(false);                                  // Set email format to HTML

        $mail->Subject = 'Feedback for GrandmaLife' . $name;
        $mail->Body = $email_body;

        if ($mail->send()) {
            header("location:suggest.php?status=thanks");
            exit;
        }
        $error_message = 'Message could not be sent.';
        $error_message .= 'Mailer Error: ' . $mail->ErrorInfo;
    }
}

include "Templates/EditorPageHeader.php";
$pageTitle = "Tell us what you think";
$section = "suggest";

?>

<div class="section page">
    <div class="wrapper">
    <h1>Tell us what you think about us and what we can improve!</h1>
    <?php
    if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
        echo "<p>Thank you for the email! We really value your feedback!</p>";
    } else {

    if (isset($error_message)) {
            echo "<p class='message'>" . $error_message . "</p>";
        } else {
            echo "<p>If you think there is something we are missing, let us know! Complete the form with your feedback.</p>";
        }
        ?>
    <form method="post" action="suggest.php">
        <table>
            <tr>
                <th><label for="name">Name (required)</label></th>
                <td><input type="text" id="name" name="name" value="<?php if (isset($name)) { echo $name; } ?>" /></td>
            </tr>
            <tr>
                <th><label for="email">Email (required)</label></th>
                <td><input type="text" id="email" name="email" value="<?php if (isset($email)) { echo $email; } ?>" /></td>
            </tr>
            <tr>
                <th><label for="name">Leave your feedback here</label></th>
                <td><textarea name="feedback" id="feedback"><?php if (isset($feedback)) { echo htmlspecialchars($_POST["feedback"]); } ?></textarea></td>
            </tr>
            <tr>
              <th><label for="rating">On a scale from 1 to 5, with 5 being the best, how do you think we are doing?</label></th>
              <span class="star-cb-group">
                <input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1">1</label>
                <input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2">2</label>
                <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3</label>
                <input type="radio" id="rating-4" name="rating" value="4" /><label for="rating-4">4</label>
                <input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5">5</label>
              </span>
            </tr>
          </table>
          <input type="submit" value="Send" />

      </form>
      <?php } include("Templates/EditorPageFooter.php");?>
      </div>
  </div>
