<?php

/**
 * 抽象广告发布过程
 */
abstract class Builder
{
    protected $facebook;

    abstract  function uploadCampaign();

    abstract function uploadAdset();

    abstract function uploadAd();

    abstract function getObject();
}