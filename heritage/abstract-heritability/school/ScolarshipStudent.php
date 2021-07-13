<?php
require_once "Student.php";

class ScolarshipStudent extends Student
{
    private $scolarship;

    public function renewScolarship()
    {
        echo "Scolarship was renewed.";
    }

    public function payMonthlyFee($value)
    {    
        $this->setBill($this->getScolarshipBill($this->getBill()));
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

    public function __construct($name, $age, $sex, $enrollment, $class, $scolarship)
    {
        Parent::__construct($name, $age, $sex, $enrollment, $class);
        $this->scolarship = $scolarship;
    }

    public function getScolarship()
    {
        return $this->scolarship;
    }
    public function getScolarshipBill($value)
    {
        return $value - ($value*0.705);
    }
    public function setScolarship(float $scolarship)
    {
        $this->scolarship = $scolarship;
    }
    
}