<?php

include_once 'Designing.php';
include_once 'Development.php';
include_once 'Marketing.php';


class Client
{

    private $designing;
    private $development;
    private $marketing;

    public function __construct()
    {
        $this->initProto();

        $manojDesigner = clone $this->designing;
        $manojDesigner->setDetails("Manoj", "App Designer");

        $sandeepDesigner = clone $this->designing;
        $sandeepDesigner->setDetails("Sandeep", "Website Designer");

        var_dump($manojDesigner);
        var_dump($sandeepDesigner);

    }

    public function initProto()
    {
        $this->marketing = new Marketing();
        $this->designing = new Designing();
        $this->development = new Development();
    }
}

$worker = new Client();