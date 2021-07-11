<?php
include_once "Product.php";

class TextProduct implements Product
{

    public function getProperties()
    {
        return "This is Text Product";
    }
}