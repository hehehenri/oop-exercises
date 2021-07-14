<?php
require_once 'Mammal.php';

class Dog extends Mammal
{
    public function makeSound()
    {
        echo "Woof! Woof!";
    }
}