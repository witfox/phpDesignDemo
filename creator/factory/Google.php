<?php declare(strict_types = 1);

include_once "Admanager.php";

class Google implements Admanager
{
    public function createCampaign(string $msg): string
    {
        return $msg;
    }
}