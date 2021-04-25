<?php

class Singleton
{
    private static $instance;

    //设置为private,防止被 new创建对象
    private function __construct()
    {
        
    }

    private function __clone()
    {
        
    }

    public static function getInstance()
    {
        if(!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function createCampaign()
    {
        echo "创建 campaign";
    }
}

//这边执行会保存
//$instance = new Singleton();
$instance = Singleton::getInstance();
$instance->createCampaign();
$instance2 = Singleton::getInstance();

var_dump($instance === $instance2);