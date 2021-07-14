<?php
require_once 'Animal.php';

class Mammal extends Animal
{
    private $furColor;

    public function move() 
    {
        echo "Running" . PHP_EOL;
    }
    public function eat()
    {
        echo "Drinking milk" . PHP_EOL;
    }
    public function makeSound()
    {
        echo "Mammal random noise" . PHP_EOL;
    }
    
    public function getFurColor()
    {
    return $this->furColor;
    }
    public function setFurColor($furColor)
    {
    $this->furColor = $furColor;
    }
}