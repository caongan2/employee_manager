<?php


namespace Src;


class EmployeeManager
{
    protected  $employee;
    protected string $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    function getDataToFile()
    {
        $dataJson = file_get_contents($this->filePath);
        return json_decode($dataJson, true);
    }

    function getData(): array
    {
        $data = $this->getDataToFile();
        $this->employee = [];
        foreach ($data as $item) {
            $employees = new Employee($item);
            $this->employee[] = $employees;
        }
        return $this->employee;
    }

    public function saveDataToFile($newArray)
    {
        $dataJson = json_encode($newArray);
        file_put_contents($this->filePath, $dataJson);
    }

    public function addData($item)
    {
        $data = $this->getDataToFile();
        array_push($data, $item);
        $this->saveDataToFile($data);
    }

    public function deleteData($index)
    {
        $data = $this->getDataToFile();
        array_splice($data, $index, 1);
        $this->saveDataToFile($data);
    }

    public function editData($index, $item)
    {
        $data = $this->getDataToFile();
        $data[$index] = $item;
        $this->saveDataToFile($data);
    }

    public function detailsData($index): Employee
    {
        $data = $this->getDataToFile();
        $item = $data[$index];
        return new Employee($item);
    }
}