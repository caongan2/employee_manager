<?php

include "vendor/autoload.php";
use Src\EmployeeManager;
$data = new EmployeeManager("data.json");
$employees = $data->getData();
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
<a href="view/add.php"><button>Add new</button></a>
    <table>
        <thead>
            <th>STT</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Location</th>
            <th></th>
        </thead>

        <tbody>
            <?php foreach ($employees as $key => $employee): ?>
            <tr>
                <td><?php echo $key+1 ?></td>
                <td><?php echo $employee->getName() ?></td>
                <td><?php echo $employee->getAge()?></td>
                <td><?php echo $employee->getAddress()?></td>
                <td><?php echo $employee->getLocation()?></td>
                <td>
                    <a href="action/delete.php"><button>Delete</button></a>
                    <a href="view/edit.php?index=<?php echo $key ?>"><button>Edit</button></a>
                </td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
