<?php
require_once 'RemoteControl.php';

$c = new RemoteControl;
$c->turnOn();
$c->volumeUp();
$c->play();
$c->openMenu();
$c->turnOff();