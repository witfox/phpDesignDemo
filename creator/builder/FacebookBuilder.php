<?php
include_once "Builder.php";
include_once "Facebook.php";

class FacebookBuilder extends Builder
{

    public function __construct()
    {
        $this->facebook = new Facebook();
    }

    public  function uploadCampaign()
    {
        $this->facebook->createCampaign("campaign");
    }

    public function uploadAdset()
    {
        $this->facebook->createAdset("adset");
    }

    public function uploadAd()
    {
        $this->facebook->createAd("ad");
    }

    public function getObject()
    {
        return $this->facebook;
    }
}