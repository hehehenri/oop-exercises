<?php
declare(strict_types=1);

require_once "People.php";
require_once "Book.php";

$p = array();
$p[0] = new People("Henri", 18, "M");
$p[1] = new People("Juliano", 19, "M");

$b = array();
$b[0] = new Book("Harry Potter", "J. K. Rowling", 300, $p[0]);
$b[1] = new Book("Clean Code", "Robert Cecil", 200, $p[1]);

$b[0]->open();
$b[0]->browse(50);
$b[0]->close();
$b[0]->details();

$b[1]->open();
$b[1]->browse(105);
$b[1]->nextPage();
$b[1]->details();