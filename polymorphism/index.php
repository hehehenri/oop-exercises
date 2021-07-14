<?php 
require_once "Mammal.php";
require_once "Reptile.php";
require_once "Fish.php";
require_once "Bird.php";
require_once "Kangaroo.php";
require_once "Dog.php";
require_once "Snake.php";
require_once "Turtle.php";
require_once "GoldFish.php";
require_once "Parrot.php";

$m = new Mammal;
$r = new Reptile;
$f = new Fish;
$b = new Bird;
$k = new Kangaroo;
$d = new Dog;
$s = new Snake;
$t = new Turtle;
$g = new GoldFish;
$p = new Parrot;


//Same function but verry different outputs...
//That's polymorphism!

$m->move(); // Running
$k->move(); // Jumping around
$d->move(); // Running
$t->move(); // Walking really slowly
// $r->move(); // Crawling
// $f->move(); // Swimming
// $b->move(); // Flying

echo PHP_EOL;

$m->eat(); // Drinking milk;
$r->eat(); // Eating eggs;
$f->eat(); // Eating worms;
$b->eat(); // Eating fruits

echo PHP_EOL;

$m->makeSound(); // Mammal random noise
$r->makeSound(); // Reptile soud
$f->makeSound(); // Glub...Dropped a bubble
$b->makeSound(); // Singing a beautiful melody...
$d->makeSound(); // Woof! Woof!