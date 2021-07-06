<?php

require_once 'Cafeteira.php';

$nespresso = new Cafeteira("Nespresso", "ESSENZA", "Black");

$nespresso->setOn(true);
$nespresso->setTotalWater(100);
$nespresso->setTotalCapsules(0);
echo $nespresso->makeCoffe();
print_r($nespresso);

