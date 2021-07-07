<?php
require_once 'Controller.php';

class RemoteControl implements Controller
{
    private $volume;
    private $power;
    private $playing;

    //Methods

    //Constructor
    public function __construct()
    {
        $this->volume = 50;
        $this->power = false;
        $this->playing = false;
    }

    //Getters:
    private function getVolume()
    {
        return $this->volume;
    }
    private function getPower()
    {
        return $this->power;
    }
    private function getPlaying()
    {
        return $this->playing;
    }

    //Setters:
    private function setVolume($volume)
    {
        $this->volume = $volume;
    }
    private function setPower($power)
    {
        $this->power = $power;
    }
    private function setPlaying($playing)
    {
        $this->playing = $playing;
    }

    //Controller Methods

    public function turnOn()
    {
        $this->setPower(true);
    }
    public function turnOff()
    {
        $this->setPower(false);
    }
    public function openMenu()
    {
        echo PHP_EOL . "-------- MENU --------" . PHP_EOL;
        echo PHP_EOL . "Power: ";
        echo ($this->getPower()) ? "On" : "Off";

        echo PHP_EOL . "Status: "; 
        echo ($this->getPlaying()) ? "Playing" : "Not Playing";

        echo PHP_EOL . "Volume: " . ($this->getVolume()) . " ";
        for ($i = 0; $i <= $this->getVolume(); $i += 10) {
            echo "|";
        }
        echo PHP_EOL;
    }
    public function closeMenu()
    {
        echo "\nClosing Menu...";
    }
    public function volumeUp()
    {
        if ($this->getPower()) {
            $this->setVolume($this->getVolume() + 10);
        }
    }
    public function volumeDown()
    {
        if ($this->getPower()) {
            $this->setVolume($this->getVolume() - 10);
        }
    }
    public function mute()
    {
        if ($this->getPower() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }
    public function unmute()
    {
        if ($this->getPower() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }
    public function play()
    {
        if ($this->getPower() && !($this->getPlaying())) {
            $this->setPlaying(true);
        }
    }
    public function pause()
    {
        if ($this->getPower() && $this->getPlaying()) {
            $this->setPlaying(false);
        }
    }
}