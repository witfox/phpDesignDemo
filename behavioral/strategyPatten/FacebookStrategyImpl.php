<?php
include_once("IStrategy.php");

class FacebookStrategyImpl implements IStrategy
{
    public function createCampaign()
    {
        echo "创建facebook广告系列";
    }

    public function createAdset()
    {
        echo "创建facebook广告组";
    }

    public function createAd()
    {
        echo "创建facebook广告";
    }

}