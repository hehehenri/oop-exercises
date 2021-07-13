<?php
require_once "People.php";

class Student extends People
{
    private $enrollment;
    private $class;

    public function cancelEnrollment()
    {
        if($this->getEnrollment() !== null) {
            $this->setEnrollment(false);
            $this->class = null;
        }
    }

    public function getEnrollment()
    {
        return $this->enrollment;
    }
    public function getClass()
    {
        return $this->class;
    }
    public function setEnrollment(bool $enrollment)
    {
        $this->enrollment = $enrollment;
    }
    public function setClass(string $class)
    {
        $this->class = $class;
    }
}