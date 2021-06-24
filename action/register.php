<?php

include "../vendor/autoload.php";

use Login\UserManager;
use Login\User;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User($username,$password);
    $data = new UserManager("../login/login.json");
    $data->addUser($user);
}


?>