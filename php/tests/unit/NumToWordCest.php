<?php 

namespace App\Unit;
class NumToWord
{
    public function _before(\UnitTester $I)
    {
    }

    /**
     * @example { "send": "745.00", "expect": "Seven Hundred and forty five" }
     * @example0 { "send": "745.00", "expect": "2.5" }
     */
    public function tryToTest(\UnitTester $I, \Codeception\Example $Example)
    {
    }
}
