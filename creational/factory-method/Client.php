<?php
include_once "TextFactory.php";
include_once "GraphicFactory.php";

class Client
{
    public function __construct()
    {
        $tf = new TextFactory();
        echo $tf->startFactory();

        echo "<br>";

        $gf = new GraphicFactory();
        echo $gf->startFactory();
    }
}


$clientWorker = new Client();