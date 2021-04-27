<?php

/**
 * 抽象广告发布过程
 */
abstract class Builder
{
    protected $facebook;

    //定义一系列操作
    
    abstract  function uploadCampaign();

    abstract function uploadAdset();

    abstract function uploadAd();

    abstract function getObject();
}