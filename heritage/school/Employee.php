<?php
require_once "People.php";

class Employee extends People
{
    private $setion;
    private $working;

    public function changeWorking()
    {
        $this->setWorking(!$this->getWorking());
    }

    public function getSetion()
    {
        return $this->setion;
    }
    public function getWorking()
    {
        return $this->working;
    }
    public function setSetion(string $setion)
    {
        $this->setion = $setion;
    }
    public function setWorking($working)
    {
        $this->working = $working;
    }
}