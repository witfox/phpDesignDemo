<?php
/**
 * 建造者模式
 */
include_once "Builder.php";
include_once "FacebookBuilder.php";

class AdManager
{
    public $adManagerBuilder;

    public function startUpload()
    {
        $this->adManagerBuilder->uploadCampaign();

        $this->adManagerBuilder->uploadAdset();

        $this->adManagerBuilder->uploadAd();

        return $this->adManagerBuilder->getObject();
    }

    public function setBuilder(Builder $builder)
    {
        $this->adManagerBuilder = $builder;
    }
}

$facebookBuilder = new FacebookBuilder();
$admanager = new AdManager();
$admanager->setBuilder($facebookBuilder);
$facebook = $admanager->startUpload();
$facebook->getResult();