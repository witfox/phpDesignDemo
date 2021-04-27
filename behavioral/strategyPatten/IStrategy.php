<?php

interface IStrategy
{
    public function createCampaign();

    public function createAdset();

    public function createAd();
}