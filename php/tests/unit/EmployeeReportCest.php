<?php 

namespace App\Unit;
/**
 * http://codingdojo.org/kata/Employee-Report/
 */
class EmployeeReportCest
{
    public function _before(\UnitTester $I)
    {
        $this->class = new \App\EmployeeReport();
    }

    /**
     * @example { "send": "745.00", "expect": "seven hundred and forty five" }
     * @example { "send": "1.00", "expect": "one" }
     * @example { "send": "6.00", "expect": "six" }
     * @example { "send": "10.00", "expect": "ten" }
     * @example { "send": "11.00", "expect": "eleven" }
     * @example { "send": "17.00", "expect": "seventeen" }
     * @example { "send": "20.00", "expect": "twenty" }
     * @example { "send": "140.00", "expect": "hundred and forty" }
     * example { "send": "745.00", "expect": "2.5" }
     */
    public function tryToTest(\UnitTester $I, \Codeception\Example $Example)
    {
        $result = $this->class->convertNumber($Example["send"]);
        $I->assertEquals( $Example["expect"], strtolower($result), "failed" );
    }
}
