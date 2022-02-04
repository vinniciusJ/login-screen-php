<?php 
    class User{
        public $username, $password;

        public function __construct($username, $password){
            $this->username = $username;
            $this->password = $password;
        }
    }
?>