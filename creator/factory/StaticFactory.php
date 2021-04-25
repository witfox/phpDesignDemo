<?php
/**
 * 静态工厂
 */

include_once "Facebook.php";
include_once "Google.php";

final class StaticFactory
{
    public static function getFactory(string $type): Admanager
    {
       if($type == "facebook") {

           return new Facebook();

       }elseif($type == "google") {

           return new Google();

       }

       throw new InvalidArgumentException("Unknow type given");
    }
}

echo StaticFactory::getFactory("facebook")->createCampaign("facebook");