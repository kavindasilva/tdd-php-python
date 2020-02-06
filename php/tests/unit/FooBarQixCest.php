<?php 

namespace App\Unit;
use App\dictionaryReplacer;

class FooBarQixCest
{
    protected $expectedResults = [
        "1"     => "1",
        "2"     => "2",
        "3"     => "FooFoo",
        "4"     => "4",
        "5"     => "BarBar",
        "6"     => "Foo",
        "7"     => "QixQix",
        "8"     => "8",
        "9"     => "Foo",
        "10"    => "Bar",
        "13"    => "Foo",
        "15"    => "FooBarBar",
        "21"    => "FooQix",
        "33"    => "FooFooFoo",
        "51"    => "FooBar",
        "53"    => "BarFoo",
        "55"    => "",
    ];

    public function _before(\UnitTester $I)
    {
    }


    public function checkForDivideByThree(\UnitTester $I){
        $result = $this->class->getNumberFormatted();
        $I->assertEquals();
    }

}
