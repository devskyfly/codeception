<?php
namespace devskyfly\cls;

class Container
{
    protected $list = [];
    
    public function __construct()
    {
        
    }

    public function push(Item $item)
    {
        array_push($this->list, $item);
        return $this;
    }

    /**
     * 
     * @return Item | null
     */
    public function pop()
    {
        return array_pop($this->list);
    }
} 