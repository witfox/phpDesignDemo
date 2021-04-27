<?php declare(strict_types = 1);
include_once("IObserver.php");

abstract class PostAbstract
{
    private array $observers = [];

    public function addObserver(IObserver $iObserver)
    {
        $this->observers[] = $iObserver;
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
           echo $observer->update();
        }
    }
}