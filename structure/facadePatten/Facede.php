<?php

include_once("IFacebook.php");
include_once("IGoogle.php");
include_once("FacebookImpl.php");
include_once("GoogleImpl.php");

class Facede
{
    private $iFacebook;
    private $iGoogle;

    public function __construct(IFacebook $iFacebook, IGoogle $iGoogle)
    {
        $this->iFacebook = $iFacebook;
        $this->iGoogle = $iGoogle;
    }

    public function create()
    {
        $this->iFacebook->create();
        $this->iGoogle->add();
    }

    public function upload()
    {
        $this->iFacebook->upload();
        $this->iGoogle->push();
    }
}

$manager = new Facede(new FacebookImpl, new GoogleImpl);
$manager->create();
echo PHP_EOL;
$manager->upload();


