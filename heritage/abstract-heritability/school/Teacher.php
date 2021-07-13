<?php
require_once 'People.php';

final class Teacher extends People
{
    private $specialty;
    private $salary;
    
    public function __construct(string $name, int $age, string $sex, string $specialty, int $salary)
    {
        parent::__construct($name, $age, $sex);
        $this->specialty = $specialty;
        $this->salary = $salary;
    }

    public function incraseSalary($incrase)
    {
        $this->setSalary($this->getSalary() + $incrase);
    }

    public function getSpecialty()
    {
        return $this->specialty;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}