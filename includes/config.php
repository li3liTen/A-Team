<?php
ob_start();
session_start();

//database credentials
$dsn = "mysql:host=localhost;dbname=grandmalifev2";
        $user = "root";
        $password = "";
        $options = null;

$conn = new PDO($dsn, $user, $password, $options);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//set timezone
date_default_timezone_set('Europe/London');

//load classes as needed
/*function __autoload($class) {

   $class = strtolower($class);

    //if call from within /assets adjust the path
   $classpath = 'classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }

    //if call from within admin adjust the path
   $classpath = '../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }

    //if call from within admin adjust the path
   $classpath = '../../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }

}

$user = new User($conn);*/
?>
