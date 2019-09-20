<?php
namespace devskyfly\cls;

class Item 
{
    public $name;
    public $prop;

    public function __construct($name, $prop)
    {
        $this->name = $name;
        $this->prop = $prop;
    }

    public function concat() 
    {
        return $this->name."-".$this->prop;
    }
}