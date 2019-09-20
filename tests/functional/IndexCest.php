<?php


class IndexCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage("/");
        $I->see("SERVER");
        $I->pause();
        $I->dontSee("HELL");
    }
}
