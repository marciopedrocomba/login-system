<?php

include_once '../autoload.php';

use \Dao\User as User;

if(isset($_POST['register'])) {
    
    $data = array(
        "firstname" => $_POST["firstname"],
        "lastname" => $_POST["lastname"],
        "email" => $_POST["email"],
        "password" => $_POST["password"]
    );

    $user = new User();
    $user->setFirstname($data['firstname']);
    $user->setLastname($data['lastname']);
    $user->setEmail($data['email']);
    $user->setPassword($data['password']);

    $user->register($data);

}else if(isset($_POST['login'])) {
    
    $data = array(
        "email" => $_POST["email"],
        "password" => $_POST["password"]
    );

    $user = new User();
    $user->setEmail($data['email']);
    $user->setPassword($data['password']);

    $user->login();

}else if(isset($_GET['logout']) && $_GET['logout'] == true) {

    User::logout();

}else if(isset($_POST['btn-post'])) {
    $data = array(
        "message" => $_POST['message'],
        "images" => $_FILES['images']
    );

    print_r($data);
}


/*else if(isset($_POST['logout'])) {
    
    User::logout();
    
}*/

