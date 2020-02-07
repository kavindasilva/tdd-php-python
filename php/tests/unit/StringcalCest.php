<?php 

class StringcalCest
{
    protected $cal = null;
    public function _before(UnitTester $I)
    {
    }

    // tests
    public function checkEmptyString(UnitTester $I)
    {
        $result = $this->cal->add();
        $I->assertEquals("", $result, "checkEmptyString() failed");
    }
}
