<?php
declare(strict_types = 1);
require_once "Fighter.php";
require_once "Fight.php";

$f = array();
$f[0] = new Fighter("Henri Borges", 18, 70, 1.88, "Brazilian", 0, 0, 0);
$f[1] = new Fighter("Juliano Putão", 19, 70, 1.30, "Brazilian", 0, 0, 0);


$fight = new Fight($f[0], $f[1]);
$fight->startFight();