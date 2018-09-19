<?php


class GetPageCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/testcontroller/works');
        $I->wantTo('test if service works'); 
    }

    public function _after(AcceptanceTester $I)
    {

    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->see('Your name is works', 'body'); 
    }
}
