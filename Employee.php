<?php


class Employee extends Person

{
    private $salary;
    public $department;

    public function getSalary()
    {
        echo "salary is " . $this->salary . '<br>';
        return $this->salary;
    }

    public function getDepartment(): string
    {
        echo "Person department is '{$this->department}' <br>";
        return $this->department;
    }

    public function setDepartment($department): void
    {
        $this->department = $department;
    }

    public function setSalary($salary): void
    {
        if (!is_int($salary)) throw new Exception('Please set valid salary.');
        $this->salary = $salary;
    }

    public function __toString()
    {
        $str =  "Name is ".parent::getName() . " salary is  {$this->salary}, department is '{$this->department}'<br>";
        return $str;
    }

}