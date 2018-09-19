<?php
class LoginCest 
{    
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->wantTo('check if POST form works'); 
        $I->amGoingTo('set a name');
        $I->fillField('username', 'Miles');
        $I->amGoingTo('submit form');
        $I->click('Click Me!');
    }

    public function loginSuccessfully(AcceptanceTester $I)
    {
        $I->canSeeInCurrentUrl('/testpost');
        $I->see('Your name is Miles', 'body'); 
    }
    
    public function loginWithInvalidPassword(AcceptanceTester $I)
    {
        // write a negative login test
        $I->see('Your name is', 'body'); 
    }       
}