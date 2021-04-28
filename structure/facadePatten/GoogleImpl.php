<?php

include_once("IGoogle.php");

class GoogleImpl implements IGoogle
{
    public function add()
    {
        echo "创建google广告";
    }

    public function push()
    {
        echo "上传google广告";
    }
}