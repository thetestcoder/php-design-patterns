<?php
include_once "Product.php";

class GraphicProduct implements Product
{

    public function getProperties()
    {
        return "THis is Graphic Product";
    }
}