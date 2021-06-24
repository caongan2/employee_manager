<?php
include "../vendor/autoload.php";
include_once 'header2.php';

use Login\UserManager;

if ($_SERVER['REQUEST_METHOD'] == "GET") {

    include "../index.php";
} else {
    $errors = UserManager::errors();
    if (empty($errors)) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data = new UserManager("../login/login.json");
        $data->login($username, $password);
    } else {
        include "index2.php";
    }
}
include_once 'footer2.php';





//
//if (isset($_POST['login'])) {
//    $username = $_POST['username'];
//    $password = $_POST['password'];
//
//    if (empty($username) || empty($password)) {
//        echo "thieu thong tin";
//    } else {
//        $data = new \Login\UserManager("../login/login.json");
//        $data->login($username, $password);
//    }
//
//}




