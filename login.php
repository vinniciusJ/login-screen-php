<?php
    session_start();

    include("User.php");

    class LoginController{
        private $users;

        public function __construct(){
            $usersAsString = file_get_contents("users.json");

            $this->users = json_decode($usersAsString, true);   
        }

        public function autenticate($user){
            $userAsArray = array("username" => $user->username, "password" => $user->password);

            return in_array($userAsArray, $this->users);
        }

        public static function initialize(){
            $user = new User($_POST["username"], $_POST["password"]);
            $login_controller = new LoginController();

            $is_user_autenticated = $login_controller->autenticate($user);

            if($is_user_autenticated == 1){
                unset($_SESSION["wrong-credentials"]);
                header("Location: sucess.php");

                exit();
            }
            else{
                $_SESSION["wrong-credentials"] = !$is_user_autenticated;

                header("Location: index.php");

                exit();
            }
        }
    }

    LoginController::initialize();
?>