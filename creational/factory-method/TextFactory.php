<?php
include_once "Creator.php";
include_once "TextProduct.php";

class TextFactory extends Creator
{
    public function factoryMethod()
    {
        $tp = new TextProduct();
        return $tp->getProperties();
    }
}