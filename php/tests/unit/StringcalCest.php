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

    /**
     * @example { "send": "1", "expect": "1" }
     * @example { "send": "2", "expect": "2" }
     * @example { "send": "2.5", "expect": "2.5" }
     * @example { "send": "106", "expect": "106" }
     */
    public function checkSingleParamInput(\UnitTester $I, \Codeception\Example $Example)
    {
        $result = $this->cal->add( $Example["send"] );
        $I->assertEquals( $Example["expect"], $result, "checkEmptyString() failed");
    }

}
