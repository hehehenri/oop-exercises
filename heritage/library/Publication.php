<?php

interface Publication
{
    public function open();
    public function close();
    public function browse(int $page);
    public function nextPage();
    public function lastPage();
}