<?php 

namespace App\Unit;
use App\Permutations;

class PermutationsCest
{
    private $crackerClass = null;
    private $decryptAlphabet = [
    ];

    public function _before(\UnitTester $I)
    {
        $this->crackerClass = new Codecracker($this->decryptAlphabet);
    }

}
