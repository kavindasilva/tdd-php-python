<?php 

namespace App\Unit;

class FactorialCest
{
    public function _before(\UnitTester $I)
    {
        $this->class = new \App\Factorial();
    }

    /**
     * @example { "number": "0", "expect": "seven hundred and forty five" }
     * @example { "number": "1", "expect": "one" }
     * @example { "number": "2.00", "expect": "six" }
     * @example { "number": "3", "expect": "ten" }
     * @example { "number": "5", "expect": "eleven" }
     * @example { "number": "51", "expect": "seventeen" }
     * @example { "number": "365", "expect": "twenty" }
     * @example { "number": "3.52", "expect": "hundred and forty" }
     */
    public function checkFactorials(\UnitTester $I, \Codeception\Example $Example)
    {
        $result = $this->class->getFactorial($Example["number"]);
        $I->assertEquals( $Example["expect"], $result, "failed" );
    }
}
