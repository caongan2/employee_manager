<?php

include "../vendor/autoload.php";
use Src\EmployeeManager;
$data = new EmployeeManager("data.json");
//$employees = $data->getData();
$index = $_REQUEST['index'];
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
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type="number" name="age"></td>
        </tr>
        <tr>
            <td>Addess:</td>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <td>Location:</td>
            <td><input type="text" name="location"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="index" value="<?php echo $index ?>"></td>
        </tr>
    </table>
    <input type="submit" value="Submit">
</form>
</body>
</html>