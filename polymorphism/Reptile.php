<?php
require_once 'Animal.php';

class Reptile extends Animal
{
    private $scaleColor;

    public function move()
    {
        echo "Crawling" . PHP_EOL;
    }
    public function eat()
    {
        echo "Eating eggs" . PHP_EOL;
    }
    public function makeSound()
    {
        echo "Reptile soud" . PHP_EOL;
    }

    
    public function getScaleColor()
    {
        return $this->scaleColor;
    }
    public function setScaleColor($scaleColor)
    {
        $this->scaleColor = $scaleColor;
    }
}