<?php
include_once("FacebookStrategyImpl.php");
include_once("GoogleStrategyImpl.php");
include_once("IStrategy.php");

class AdManager
{
    protected $strategy;

    public function index()
    {
        echo "campaign_";
        $this->strategy->createCampaign();
        echo "adset_";
        $this->strategy->createAdset();
        echo "ad_";
        $this->strategy->createAd();
    }

    public function setStrategy(IStrategy $iStrategy)
    {
        $this->strategy = $iStrategy;
    }
}

$admanager = new AdManager();
$strategy = new FacebookStrategyImpl();
$admanager->setStrategy($strategy);
$admanager->index();
$strategy = new GoogleStrategyImpl();
$admanager->setStrategy($strategy);
$admanager->index();