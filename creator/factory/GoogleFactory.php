<?php

include_once "Factory.php";
include_once "Google.php";

class GoogleFactory implements Factory
{

    public static function createAdManager(): Admanager
    {
        return new Google();
    }
}