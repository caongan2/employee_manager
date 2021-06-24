<?php


namespace Login;


class UserManager
{
    public static string $path;

    public function __construct($path)
    {
        self::$path = $path;
    }

    public function convertData($data)
    {
        $users = [];
        foreach ($data as $item) {
            $user = new  User($item->username, $item->password);
            array_push($users, $user);
        }
        return $users;
    }

    public function loadData()
    {
        $dataJson = file_get_contents(self::$path);
        $data = json_decode($dataJson);
        return $this->convertData($data);
    }

    public function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents(self::$path, $dataJson);
    }

    public function chechRegister($user)
    {
        $users = $this->loadData();
        foreach ($users as $item) {
            if ($user->username == $item->username) {
                return false;
            }
        }
        return true;

    }

    public function addUser($user)
    {
        $users = $this->loadData();
        if ($this->chechRegister($user)) {
            array_push($users, $user);
            $this->saveData($users);
            header("Location: ../index2.php");
        } else {
            echo "<h1>User da ton tai</h1>";
            include "../view/register.php";
        }

    }

    public function checkLogin($user)
    {
        $users = $this->loadData();
        foreach ($users as $item) {
            if ($user->username == $item->username && $user->password == $item->password) {
                return true;
            }
        }
        return false;
    }

    public function login($username, $password)
    {
        $user = new User($username, $password);
        if ($this->checkLogin($user)) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            if(isset($_SESSION['page'])){
                $page = $_SESSION['page'];
                switch ($page){
                    case 'add':
                        header("Location: ../view/add.php");
                        return;
                    default:
                        header("location: ../home.php");
                        break;
                }
            }
            header("Location: ../home.php");
        } else {
            echo "sai thong tin dang nhap";
        }
    }


    public static function errors(): array
    {
        $errors = [];
        $fields = ['username', 'password'];
        foreach ($fields as $field) {
            if (empty($_POST[$field])) {
                $errors[$field] = "Do that die.";
            }
        }
        return $errors;
    }

}