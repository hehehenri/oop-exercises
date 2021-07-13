<?php

abstract class Animal
{
    private $weight;
    private $age;
    private $limbs;

    public function move()
    {

    }
    public function eat()
    {

    }
    public function makeSound()
    {
        
    }

    public function getWeight()
    {
        return $this->weight;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getLimbs()
    {
        return $this->limbs;
    }
    public function setLimbs($limbs)
    {
        $this->limbs = $limbs;
    }
}