<?php 
namespace App\Unit;

class StringcalCest
{
    protected $cal = null;
    public function _before(\UnitTester $I)
    {
        $this->cal = new \App\Stringcal();
    }

    // tests
    public function checkEmptyString(\UnitTester $I)
    {
        $result = $this->cal->add();
        $I->assertEquals("", $result, "checkEmptyString() failed");
    }
}
