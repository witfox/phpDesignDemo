<?php

/**
 * 抽象工厂
 */
abstract class AbstractFactory {

    abstract static function createCamapign() : Campaign;

    abstract static function createAdset() : Adset;
}

class FacebookFactory extends AbstractFactory
{
    public static function createCamapign(): Campaign
    {
        return new FacebookCampaign();
    }

    public static function createAdset(): Adset
    {
        return new FacebookAdset();
    }
}

interface Campaign
{
    public function create();
    public function upload();
}

class FacebookCampaign implements Campaign
{
    public function create()
    {
        echo "创建 Facebook campaign";
    }

    public function upload()
    {
        echo "上传 Facebook campaign";
    }
}

interface Adset
{
    public function update();
}

class FacebookAdset implements Adset
{
    public function update()
    {
        echo "更新 Facebook adset";
    }
}

FacebookFactory::createCamapign()->upload();
echo "_";
FacebookFactory::createAdset()->update();