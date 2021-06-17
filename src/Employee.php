<?php


namespace Src;


class Employee
{
    public string $name;
    public string $age;
    public string $address;
    public string $location;

    public function __construct($array)
    {
        $this->name = $array['name'];
        $this->age = $array['age'];
        $this->address = $array['address'];
        $this->location = $array['location'];
    }

    /**
     * @return mixed|string
     */
    public function getName(): mixed
    {
        return $this->name;
    }

    /**
     * @return mixed|string
     */
    public function getAge(): mixed
    {
        return $this->age;
    }

    /**
     * @return mixed|string
     */
    public function getAddress(): mixed
    {
        return $this->address;
    }

    /**
     * @return mixed|string
     */
    public function getLocation(): mixed
    {
        return $this->location;
    }
}