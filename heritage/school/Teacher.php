<?php
require_once "People.php";

class Teacher extends People
{
    private $specialty;
    private $salary;

    public function salaryIncrease(int $increase)
    {
        $this->setSalary($this->getSalary() + $increase);
    }

    public function getSpecialty()
    {
        return $this->specialty;
    }
    public function getSalary()
    {
        return $this->salary;
    }

    public function setSpecialty(string $specialty)
    {
        $this->specialty = $specialty;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}