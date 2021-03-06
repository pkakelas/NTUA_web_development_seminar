<?php

    class UserController {
    
        public static function create($name, $surname, $age, $email, $username, $password) {
            function register_validation($name, $surname, $age, $username, $password, $email) {
                $exist = UserModel::username_exists($username);
                $problems = array();
                if ($name == "" || $surname == "" || $age == "" || $password == "" || $username == "" || $email == "") {
                    $problems[] = "All forms are required";
                }
                if (!is_numeric($age)) {
                    $problems[] = "Age must be a number";
                }
                else if ($age < 13) {
                    $problems[] = "You are to young to register to Boom Uploader.. Wait some years, until you are 13 and then discover the imagine world of  Boom Uploader !!";
                } 
                else if ($age > 90) {
                    $problems[] = "You are to old to register to Boom Uploader.. Wait some years, until you die and then discover the imagine world of heaven!!";
                } 
                if ($exist) {
                    $problems[] = "The username exists. Please try another username.";
                }    
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
                    $problems[] = "E-mail is not valid.";
                }
                return $problems;
            }
            include 'models/user.php';
            $problems = register_validation($name, $surname, $age, $username, $password, $email);
            $arrlength = count($problems);
            if (count($problems)) {
                view(
                    "register_problems", 
                    array('problems' => $problems), 
                    "html"
                );
            }
            else {
                $result = UserModel::register($name, $surname, $age, $username, $password, $email); 
                if ($result) {
                    $_SESSION['username'] = $username2;
                    view(
                        "home", 
                        array('username' => $_SESSION['username']),
                        "html"
                    );
                }
                else {
                    view("register_false_query", array(), "html");                }
            }
        }
        
        public static function create_view() {
           view("user_create", array(), "html"); 
        }
    }

?>    
    
