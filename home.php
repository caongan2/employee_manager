<?php

include "vendor/autoload.php";
use Src\EmployeeManager;
$data = new EmployeeManager("src/data.json");
$employees = $data->getData();

session_start();
if (!isset($_SESSION['username'])) {
    header('location: index.php');
}
if (isset($_REQUEST['logOut'])) {
    session_destroy();
    header('location: index.php');
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <a class="navbar-brand" href="">Codegym Moncity</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="view/add.php">Thêm Mới</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="post">
            <input type="submit" value="Logout" name="logOut" class="btn btn-success">
        </form>
    </div>
</nav>


<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Thư viện
        </div>
        <div class="card-body">
            <div class="col-12">
                <table class="table table-bordered">
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
                                <a onclick="return confirm('Are you sure?')" href="action/delete.php?index=<?php echo $key ?>"><button>Delete</button></a>
                                <a href="view/edit.php?index=<?php echo $key ?>"><button>Edit</button></a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>