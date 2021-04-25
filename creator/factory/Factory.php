<?php

/**
 * 工厂方法
 */
include_once "FacebookFactory.php";
include_once "GoogleFactory.php";

interface Factory 
{
   public static function createAdManager() : Admanager;
}

echo FacebookFactory::createAdManager()->createCampaign("facebook");
echo "_";
echo GoogleFactory::createAdManager()->createCampaign("google");

