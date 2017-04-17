<?php

class User{

    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }


    public function is_logged_in($username){
        if(isset($username)){
            return true;
        }
    }

    private function get_user_hash($username){  

    try {

        $stmt = $this->_conn->prepare('SELECT password FROM Members WHERE username = :username');
        $stmt->execute(array('username' => $username));
        
        $row = $stmt->fetch();
        return $row['password'];

    } catch(PDOException $e) {
        echo '<p class="error">'.$e->getMessage().'</p>';
    }
}

}