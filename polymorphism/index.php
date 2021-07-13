<?php 
require_once "Mammal.php";
require_once "Reptile.php";
require_once "Fish.php";
require_once "Bird.php";

$m = new Mammal;
$r = new Reptile;
$f = new Fish;
$b = new Bird;

$m->move(); // Running
$r->move(); // Crawling
$f->move(); // Swimming
$b->move(); // Flying

echo PHP_EOL;

$m->eat(); // Drinking milk;
$r->eat(); // Eating eggs;
$f->eat(); // Eating worms;
$b->eat(); // Eating fruits

echo PHP_EOL;

$m->makeSound(); // Woof!!!
$r->makeSound(); // Reptile soud
$f->makeSound(); // Glub...Dropped a bubble
$b->makeSound(); // Singing a beautiful melody...