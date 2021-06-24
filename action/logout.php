<?php
session_start();
if (!isset($_SESSION['username'])) {
header('location: ../index2.php');
}
if (isset($_REQUEST['logOut'])) {
session_destroy();
header('location: ../index2.php');
}