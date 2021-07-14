<?php
require_once 'Mammal.php';

class Kangaroo extends Mammal
{
    public function move()
    {
        echo "Jumping around" . PHP_EOL;
    }
}