<?php
const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myfile';

require "PHP-Login/login/loginheader.php"; 

function upload_file() {
	if (empty($_FILES[InputKey])) {	//handle error
		die("File Missing!");
	}

	if ($_FILES[InputKey]['error'] > 0) { //handle error
		die("Handle the error! " . $_FILES[InputKey]['error']);
	}


	if (!in_array($_FILES[InputKey]['type'], AllowedTypes)) {
		die("Handle File Type Not Allowed: " . $_FILES[InputKey]['type']);
	}


	$tmpFile = $_FILES[InputKey]['tmp_name'];

	$dstFile = 'uploads/' . $_FILES[InputKey]['name'];

	if (!move_uploaded_file($tmpFile, $dstFile)) {
		die("Handle Error");
	}
		
	if (file_exists($tmpFile)) {
		unlink($tmp); 
	}
};

const DB_DSN = 'mysql:host=localhost;dbname=login';
const DB_USER = 'root';
const DB_PASS = '';

try {							
      $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
} catch (PDOException $e) {
	die($e->getMessage()); 
}


                //insert into databaset
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn="INSERT INTO logIn.blogPosts (Title,username,post) VALUES ('".$_POST["subject"]."','".$_SESSION["username"]."','".$_POST["blogpost"]."')";
       //$pdo->query($conn);
         if ($pdo->query($conn)) {
               echo "It worked!";
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
    ?>

