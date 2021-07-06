<?php
class Cafeteira
{
    private $model;
    private $brand;
    private $color;
    private $totalWater;
    private $totalCapsules;
    private $on;

    public function __construct($brand, $model, $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->on = false;
    }

    //Getter -> Total Water
    public function getTotalWater()
    {
        return $this->totalWater;
    }
    //Setter -> Total Water
    public function setTotalWater($totalWater)
    {
        $this->totalWater = $totalWater;
    }

    //Getter -> Total Capsules;
    public function getTotalCapsules()
    {
        return $this->totalCapsules;
    }
    //Setter -> Total Capsules
    public function setTotalCapsules($totalCapsules)
    {
        $this->totalCapsules = $totalCapsules;
    }

    //Getter -> On
    public function getOn()
    {
        return $this->on;
    }
    //Setter -> On
    public function setOn($on)
    {
        $this->on = $on;
    }

    public function makeCoffe()
    {
        if ($this->on && $this->totalCapsules < 90 && $this->totalWater > 25)
        {
            $this->setTotalCapsules($this->getTotalCapsules() + 10);
            $this->setTotalWater($this->getTotalWater() - 10);
            return "Hmm... It smells good!";
        }
        else return "xereca";
    }
}
