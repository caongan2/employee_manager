<?php
include "../vendor/autoload.php";
use Src\EmployeeManager;
$data = new EmployeeManager("../src/data.json");
$index = $_REQUEST['index'];
$data->deleteData($index);
header("Location: ../home.php");
