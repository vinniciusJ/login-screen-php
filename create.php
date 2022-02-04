<?php 
    include("User.php");

    class CreateUserController{
        private $users;

        public function __construct(){
            $usersAsString = file_get_contents("users.json");

            $this->users = json_decode($usersAsString, true);   
        }

        public function createRecord($user){
            $user_as_array = array("username" => $user->username, "password" => $user->password);

            array_push($this->users, $user_as_array);

            file_put_contents("users.json", json_encode($this->users));
        }

        public static function initialize(){
            $user = new User($_POST["username"], $_POST["password"]);
            $create_user_controller = new CreateUserController();

            $create_user_controller->createRecord($user);

            header("Location: index.php");
        }
    }

    CreateUserController::initialize();
?>