<?php
$section ="Upload";
require "loginheader.php";
$pageTitle = "Upload";
include ('templates/EditorPageHeaderMain.php');

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myfile';
;

	if (empty($_FILES[InputKey])) {	//handle error
		throw new Exception("No file included");
	}

	if ($_FILES[InputKey]['error'] > 0) { //handle error
		throw new Exception("File Empty");;
	}


	if (!in_array($_FILES[InputKey]['type'], AllowedTypes)) {
		throw new Exception("Wrong Type");
	}


	$tmpFile = $_FILES[InputKey]['tmp_name'];

	//DOMAIN SPECIFIC:  eg., move the file
	$dstFile = 'images/uploads/' . $_FILES[InputKey]['name'];

	if (!move_uploaded_file($tmpFile, $dstFile)) {
		throw new Exception("error");
	}
		
	if (file_exists($tmpFile)) {
		unlink($tmp); 
	}
      

const DB_DSN = 'mysql:host=localhost;dbname=login';
const DB_USER = 'root';
const DB_PASS = '';

try {							
      $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
} catch (PDOException $e) {
	die($e->getMessage()); 
}

     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn="INSERT INTO blogposts (title,subtitle,post,picture,username,category) VALUES ('".$_POST["title"]."','".$_POST["subtitle"]."','".$_POST["post"]."','".$dstFile."', '".$_SESSION['username']."','".$_POST['category']."')";
$pdo->query($conn);
         if ($pdo->query($conn)) {
               echo "It worked!  Your blog has been uploaded!";
                exit;
         }
         
         else {

                echo $e->getMessage();
            }



 
 

    //check for any errors
   /* if(isset($error)){
        foreach($error as $error){
            echo '<p class="error">'.$error.'</p>';
        }
    }*/
            include ('Templates/EditorPagefooter.php');
            
    ?>

