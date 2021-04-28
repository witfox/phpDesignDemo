<?php

include_once("IFacebook.php");

class FacebookImpl implements IFacebook
{

    public function create()
    {
        echo "创建Facebook广告";
    }

    public function upload()
    {
        echo "上传facebook广告";
    }

}