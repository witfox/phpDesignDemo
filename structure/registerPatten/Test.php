<?php

include_once("Register.php");

class Test
{
    private Channel $channel;
    public function registerTest()
    {
        Register::set("facebook", $this->channel);
        echo Register::get("facebook")->createCampaign();
    }
}