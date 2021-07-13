<?php
require_once "People.php";

class Student extends People
{
    private $enrollment;
    private $class;
    private $bill;

    public function payMonthlyFee($value)
    {
        echo $this->getName() . " monthly fee: $" . $this->getBill();
        echo PHP_EOL . "You are paying: " . $value;
        if($value >= $this->getBill()) {
            echo PHP_EOL;
            echo "Your change: $" . ($value - $this->getBill());
            echo PHP_EOL;
            $this->setBill(0);
            echo "Bill payed :)" . PHP_EOL;
        }
        else {
            echo "You need more $" . ($this->getBill() - $value) . " to pay the bill.";
        }
    }

    public function __construct(string $name, int $age, string $sex, int $enrollment, string $class)
    {
        Parent::__construct($name, $age, $sex);
        $this->enrollment = $enrollment;
        $this->class = $class;
        $this->bill = 2000;
    }

    public function getEnrollment()
    {
        return $this->enrollment;
    }
    public function getClass()
    {
        return $this->class;
    }
    public function getBill()
    {
        return $this->bill;
    }
    public function setEnrollment(int $enrollment)
    {
        $this->enrollment = $enrollment;
    }
    public function setClass(string $class)
    {
        $this->class = $class;
    }
    public function setBill(int $bill)
    {
        $this->bill = $bill;
    }
}