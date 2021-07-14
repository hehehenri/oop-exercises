<?php
require_once 'Animal.php';

class Bird extends Animal
{
    private $featherColor;

    public function move()
    {
        echo "Flying" . PHP_EOL;
    }
    public function eat()
    {
        echo "Eating birdseed" . PHP_EOL;
    }
    public function makeSound()
    {
        echo "Singing a beautiful melody..." . PHP_EOL;
    }

    public function nestle()
    {
        echo "Made a nest" . PHP_EOL;
    }

    public function getFeatherColor()
    {
        return $this->featherColor;
    }
    public function setFeatherColor(string $color)
    {
        $this->featherColor = $color;
    }
}