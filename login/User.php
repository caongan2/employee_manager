<?php


namespace Login;


class User
{
    public string $username;
    public string $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

//    /**
//     * @param string $username
//     */
//    public function setUsername(string $username): void
//    {
//        $this->username = $username;
//    }
//
//    /**
//     * @param string $password
//     */
//    public function setPassword(string $password): void
//    {
//        $this->password = $password;
//    }
//
//    /**
//     * @return string
//     */
//    public function getUsername(): string
//    {
//        return $this->username;
//    }
//
//    /**
//     * @return string
//     */
//    public function getPassword(): string
//    {
//        return $this->password;
//    }
}