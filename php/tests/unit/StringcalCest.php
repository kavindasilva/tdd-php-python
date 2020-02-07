<?php 
namespace App\Unit;

class StringcalCest
{
    // http://codingdojo.org/kata/StringCalculator/
    protected $cal = null;
    public function _before(\UnitTester $I)
    {
        $this->cal = new \App\Stringcal();
    }

    // tests
    public function checkEmptyString(\UnitTester $I)
    {
        $result = $this->cal->add();
        $I->assertEquals("0", $result, "checkEmptyString() failed");
    }
}
