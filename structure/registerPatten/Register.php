<?php declare(strict_types = 1);

include_once("Channel.php");

class Register
{
    const FACEBOOK = 'facebook';
    const GOOGLE = ' google';

    //渠道树
    private static array $channels = [];

    //运行的渠道key
    private static array $allowedKeys = [
        self::FACEBOOK,
        self::GOOGLE
    ];

    public static function set(string $key, Channel $channel)
    {
        if(!in_array($key, self::$allowedKeys)) {
            throw new InvalidArgumentException("不支持此key");
        }

        self::$channels[$key] = $channel;
    }

    public static function get(string $key) : Channel
    {
        if(!isset(self::$channels[$key]) || !in_array($key, self::$allowedKeys)){
            throw new InvalidArgumentException("不存在的key");
        }

        return self::$channels[$key];
    }

    public static function __unset($key)
    {
        unset(self::$channels[$key]);
    }
}
Register::set("facebook", new Channel());
echo Register::get("facebook")->createCampaign();
echo "__";
echo Register::get("facebook")->createAdset();