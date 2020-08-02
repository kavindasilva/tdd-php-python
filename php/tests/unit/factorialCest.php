<?php 

namespace App\Unit;

class FactorialCest
{
    public function _before(\UnitTester $I)
    {
        $this->class = new \App\Factorial();
    }

    /**
     * @example { "number": 0, "expect": 1 }
     * @example { "number": 1, "expect": 1 }
     * @example { "number": 2.00, "expect": 2 }
     * @example { "number": 3, "expect": 6 }
     * @example { "number": 5, "expect": 120 }
     * @example { "number": 12, "expect": 479001600 }
     * @example { "number": 3.52, "expect": false }
     * @example { "number": "3", "expect": 6 }
     * @example { "number": "1.0", "expect": 1 }
     * @example { "number": "1.01", "expect": false }
     * @example { "number": "3.52", "expect": false }
     * @example { "number": 0.5, "expect": false }
     */
    public function checkFactorials(\UnitTester $I, \Codeception\Example $Example)
    {
        $result = $this->class->getFactorial($Example["number"]);
        $I->assertEquals( $Example["expect"], $result, "failed" );
    }
}
