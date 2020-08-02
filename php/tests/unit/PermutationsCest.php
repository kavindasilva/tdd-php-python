<?php 

namespace App\Unit;
use App\Permutations;

class PermutationsCest
{
    public function _before(\UnitTester $I)
    {
        $this->class = new Permutations();
    }

    /**
     * @example { "arr": [], "expect": false }
     * example { "arr": 0.5, "expect": false }
     */
    public function checkPermutations(\UnitTester $I, \Codeception\Example $Example)
    {
        $result = $this->class->getPermutations($Example["arr"]);
        $I->assertEquals( $Example["expect"], $result, "failed" );
    } 

}
