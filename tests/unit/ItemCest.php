<?php

use Codeception\Stub;
use devskyfly\cls\Item;

use function PHPSTORM_META\type;

class ItemCest
{
    public function _before(UnitTester $I)
    {
    }

    // tests
    public function createItem(UnitTester $I)
    {
        $itm = Stub::make(Item::class,['name'=> "Ivan", 'prop'=>"12"]);
        $I->assertEquals($itm->name, "Ivan");
        $I->assertEquals($itm->prop, "12");

        verify($itm->concat())->equals("Ivan-12");
    }

    public function createDummy()
    {
        //$itm = Stub::makeEmpty(Item::class);
        $itm = Stub::make(Item::class,['name'=> "Ivan", 'prop'=>"12"]);
        codecept_debug(print_r($itm, true));
        
    }
}
