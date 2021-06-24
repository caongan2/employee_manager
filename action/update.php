<?php
include "../vendor/autoload.php";
use Src\EmployeeManager;
$index = $_REQUEST['index'];

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
$data->editData($index, $item);
header("Location: ../home.php");



