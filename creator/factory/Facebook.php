<?php declare(strict_types = 1);

include_once "AdManager.php";

class Facebook implements Admanager
{

    public function createCampaign(string $msg): string
    {
        return $msg;
    }
}