<?php

use Codeception\Util\Stub;
use devskyfly\cls\Container;
use devskyfly\cls\Item;

class ContainerCest
{
    public function _before(UnitTester $I)
    {
    }

    // tests
    public function tryToTest(UnitTester $I)
    {
        $itm = Stub::make(Item::class,['name'=> "Ivan", 'prop'=>"12"]);
        $container = new Container();
        $container->push($itm);
    }
}
