<?php
include "../vendor/autoload.php";
use Src\EmployeeManager;
$data = new EmployeeManager("../data.json");
$index = $_REQUEST['index'];
$data->deleteData($index);
header("Location: ../index.php");
