<?php


class TestPostCest
{
    public function _before(ApiTester $I)
    {
        $I->wantTo('test if API POST works'); 
    }

    public function _after(ApiTester $I)
    {
        
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendPOST('/testpostapi', ['username' => 'davert']);
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
        $I->seeResponseIsJson();
        $I->seeResponseContains('{"status":200,"message":"Your name is davert"}');
    }
}
