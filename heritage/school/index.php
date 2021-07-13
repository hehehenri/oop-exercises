<?php
require_once "People.php";
require_once "Student.php";
require_once "Teacher.php";
require_once "Employee.php";

$p = array();

$p[0] = new People("Juliano", 20, "M");
$p[1] = new Student("Henri", 19, "M");
$p[2] = new Teacher("Claudia", 26, "F");
$p[3] = new Employee("Maria", 45, "F");

$p[0]->haveBirthday(); //$p[0]->getAge() = 21

$p[1]->setEnrollment(true); //$p[1]->getEnrollment = true;
$p[1]->setClass("Math"); //$p[1]->getClass = "Math";

$p[2]->setSpecialty("Math");
$p[2]->salaryIncrease(2000); //$p[2]->getSalary() = 2000;

$p[3]->changeWorking(); //$p[3]->getWorking() = true;
$p[3]->setSetion("Storage");

for ($i = 0; $i < count($p); $i++) {
    print_r($p[$i]);
}