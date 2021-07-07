<?php
interface Controller
{
    public function turnOn();
    public function turnOff();
    public function openMenu();
    public function closeMenu();
    public function volumeUp();
    public function volumeDown();
    public function mute();
    public function unmute();
    public function play();
    public function pause();
}