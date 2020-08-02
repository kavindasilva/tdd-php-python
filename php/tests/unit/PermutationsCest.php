<?php 

namespace App\Unit;
use App\Permutations;

/**
 * array equality variations taken from: https://stackoverflow.com/questions/5678959/php-check-if-two-arrays-are-equal
 */


class PermutationsCest
{
    public function _before(\UnitTester $I)
    {
        $this->class = new Permutations();
    }

    /**
     * @example { "arr": [], "expect": false }
     * @example { "arr": ["A"], "expect": ["A"] }
     * @example { "arr": ["A", "B"], "expect": ["AB", "BA"] }
     * @example { "arr": ["A", "B", "C"], "expect": [ "ABC", "ACB", "BAC", "BCA", "CAB", "CBA"] }
     * example { "arr": 0.5, "expect": false }
     */
    public function checkPermutations(\UnitTester $I, \Codeception\Example $Example)
    {
        $result = $this->class->getPermutations($Example["arr"]);
        $I->assertEquals( $Example["expect"], $result, "failed" );
    } 

    /**
     * @example { "arr": ["A", "B"], "expect": ["AB", "BA"] }
     * @example { "arr": ["A", "B"], "expect": ["BA", "AB"] }
     * @example { "arr": ["A", "B", "C", "D"], "expect": [ "ABCD", "ACBD", "BACD", "BCAD", "CABD", "CBAD",  "ABDC", "ACDB", "BADC", "BCDA", "CADB", "CBDA",  "ADBC", "ADCB", "BDAC", "BDCA", "CDAB", "CDBA",  "DABC", "DACB", "DBAC", "DBCA", "DCAB", "DCBA"] }
     */
    public function checkPermutationsWithoutOrder(\UnitTester $I, \Codeception\Example $Example)
    {
        $result = $this->class->getPermutations($Example["arr"]);
        $res1 = array_diff($Example["expect"], $result);
        $res2 = array_diff($result, $Example["expect"]);
        $I->assertEquals( $res1, $res2, "failed" );
    } 

}
