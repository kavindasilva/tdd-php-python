<?php 

namespace App\Unit;
use App\Codecracker;

class CodecrackerCest
{
    private $crackerClass = null;
    private $decryptAlphabet = [
        'a' => '!',
        'b' => ')',
        'c' => '"',
        'd' => '(',
        'e' => '$',
        'f' => '*',
        'g' => '%',
        'h' => '&',
        'i' => '>',
        'j' => '<',
        'k' => '@',
        'l' => 'a',
        'm' => 'b',
        'n' => 'c',
        'o' => 'd',
        'p' => 'e',
        'q' => 'f',
        'r' => 'g',
        's' => 'h',
        't' => 'i',
        'u' => 'j',
        'v' => 'k',
        'w' => 'l',
        'x' => 'm',
        'y' => 'n',
        'z' => 'o',
    ];

    public function _before(\UnitTester $I)
    {
        $this->crackerClass = new Codecracker($this->decryptAlphabet);
    }

    protected $stringPairs = [
        "apple" => '!eea$'
    ];

    public function decryptList(\UnitTester $I){
        foreach($this->stringPairs as $word => $enc_word){
            $I->assertEquals( $word, $this->crackerClass->decrypt($enc_word) );
        }
    }

    // protected function decryptWord($decryptedWord){

    // }
}
