<?php


abstract class Creator
{
    abstract public function factoryMethod();

    public function startFactory()
    {
        return $this->factoryMethod();
    }

}