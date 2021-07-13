<?php
require_once "People.php";
require_once "Visitor.php";
require_once "Student.php";
require_once "ScolarshipStudent.php";
require_once "Teacher.php";

$p = array();

$p[0] = new Visitor("Henri", 19, "M");
$p[1] = new Student("Julia", 17, "F", 0001, "Math");
$p[2] = new ScolarshipStudent("Maria", 12, "F", 0002, "Math", 70.5);
$p[3] = new Teacher("Tom", 45, "M", "Math", 2000);

// Paying the Julia monthly fee.
$p[1]->payMonthlyFee(3000);
// Julia monthly fee: $2000
// You are paying: 3000
// Your change: $1000
// Bill payed :)

// Paying the Maria monthly fee.
$p[2]->payMonthlyFee(3000);
// Maria monthly fee: $590
// You are paying: 3000
// Your change: $2410
// Bill payed :)