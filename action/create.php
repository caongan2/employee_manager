<?php
include "../vendor/autoload.php";
use Src\EmployeeManager;

$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$location = $_POST['location'];

$item = [
    'name' => $name,
    'age' => $age,
    'address' => $address,
    'location' => $location
];

$data = new EmployeeManager("../src/data.json");
$data->addData($item);
header("Location: ../home.php");