<?php

include_once("IStrategy.php");

class GoogleStrategyImpl implements IStrategy
{
    public function createCampaign()
    {
        echo "创建google广告系列";
    }

    public function createAdset()
    {
        echo "创建google广告组";
    }

    public function createAd()
    {
        echo "创建google广告";
    }

}