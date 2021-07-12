<?php


abstract class CompanyDepartment
{

    private $name;
    private $department;

    public function setDetails($name, $dpt)
    {
        $this->setName($name);
        $this->setDepartment($dpt);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDepartment($dept)
    {
        $this->department = $dept;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    abstract public function __clone();

}