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

    /**
     * @example { "para1": "1", "para2": "4", "expect": "5" }
     * @example { "para1": "1.5", "para2": "60.4", "expect": "61.9" }
     * @example { "para1": "1.131", "para2": "4.099", "expect": "5.230" }
     * @example { "para1": "100", "para2": "0.5", "expect": "100.5" }
     */
    public function checkTwoParamInput(\UnitTester $I, \Codeception\Example $Example)
    {
        $result = $this->cal->add( $Example["para1"], $Example["para2"] );
        $I->assertEquals( $Example["expect"], $result, "checkEmptyString() failed");
    }

}
