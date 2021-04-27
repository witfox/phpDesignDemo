<?php

include_once("PostAbstract.php");
include_once("UserObserverImpl.php");
include_once("TopicObserverImpl.php");

class Post extends PostAbstract
{
    public function end()
    {
        echo "success";
    }
}

$post = new Post();
$post->addObserver(new UserObserverImpl);
$post->addObserver(new TopicObserverImpl);
$post->notify();

$post->end();