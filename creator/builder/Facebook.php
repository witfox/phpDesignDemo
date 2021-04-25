<?php

/**
 * 具体实现类
 */
class Facebook
{
    protected $campaign;

    protected $adset;

    protected $ad;

    public function createCampaign($message)
    {
        $this->campaign = $message;
    }

    public function createAdset($message)
    {
        $this->adset = $message;
    }

    public function createAd($message)
    {
        $this->ad = $message;
    }

    public function getResult()
    {
        echo $this->campaign . " is upload; ".$this->adset . " is upload; ". $this->ad . " is upload;";
    }
}