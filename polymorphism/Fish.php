<?php
require_once 'Animal.php';

class Fish extends Animal
{
    private $scaleColor;

    public function move()
    {
        echo "Swimming" . PHP_EOL;
    }
    public function eat()
    {
        echo "Eating worms" . PHP_EOL;
    }
    public function makeSound()
    {
        echo "Glub...";
        $this->dropBubble();
    }

        
    public function dropBubble()
    {
        echo "Dropped a bubble" . PHP_EOL;
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