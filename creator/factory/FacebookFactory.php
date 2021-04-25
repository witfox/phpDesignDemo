<?php

include_once "Factory.php";
include_once "Facebook.php";

class FacebookFactory implements Factory
{

    public static function createAdManager() : AdManager
    {
        return new Facebook();
    }
}