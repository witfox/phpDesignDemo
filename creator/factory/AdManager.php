<?php declare(strict_types = 1);

interface Admanager
{
    public function createCampaign(string $msg): string;
}