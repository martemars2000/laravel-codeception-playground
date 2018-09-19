<?php


class TestpageCest
{
    public function _before(ApiTester $I)
    {
        $I->wantTo('test if service works'); 
    }

    public function _after(ApiTester $I)
    {

    }

    // tests
    public function tryToTest(\ApiTester $I)
    {
        $I->sendGET('/test');
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
        $I->seeResponseIsJson();
        $I->seeResponseContains('{"status":200,"message":"OK"}');
    }
}
