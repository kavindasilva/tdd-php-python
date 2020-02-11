<?php 

namespace App\Unit;
class NumToWordCest
{
    public function _before(\UnitTester $I)
    {
        $this->class = new \App\NumToWord();
    }

    /**
     * @example { "send": "745.00", "expect": "seven hundred and forty five" }
     * example { "send": "745.00", "expect": "2.5" }
     */
    public function tryToTest(\UnitTester $I, \Codeception\Example $Example)
    {
        $result = $this->class->convertNumber($Example["send"]);
        $I->assertEquals( $Example["expect"], strtolower($result), "failed" );
    }
}
