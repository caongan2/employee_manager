<?php

include "../vendor/autoload.php";
use Src\EmployeeManager;
$data = new EmployeeManager("../src/data.json");
$index = $_REQUEST['index'];
$employees = $data->detailsData($index);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="../action/update.php" method="post">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="<?php echo $employees->getName()?>"></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type="number" name="age" value="<?php echo $employees->getAge()?>"></td>
        </tr>
        <tr>
            <td>Addess:</td>
            <td><input type="text" name="address" value="<?php echo $employees->getAddress()?>"></td>
        </tr>
        <tr>
            <td>Location:</td>
            <td><input type="text" name="location" value="<?php echo $employees->getLocation()?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="index" value="<?php echo $index ?>"></td>
        </tr>
    </table>
    <input type="submit" value="Submit">
</form>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['page'] = 'edit';
    header('location: ../index2.php');
}else{
    include_once "edit.php";
}
//}else{
//    header('location: ../index2.php');
//}
if (isset($_REQUEST['logOut'])) {
    session_destroy();
    header('location: ../index2.php');
}