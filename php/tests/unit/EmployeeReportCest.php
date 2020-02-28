<?php 

namespace App\Unit;
/**
 * http://codingdojo.org/kata/Employee-Report/
 */
class EmployeeReportCest
{
    /**
     * TODO :create stubs & mocks
     */
    const EMPLOYEES = [
        [ "name" => 'Max', "age" => 17 ],
        [ "name" => 'Sepp', "age" => 18 ],
        [ "name" => 'Nina', "age" => 15 ],
        [ "name" => 'Mike', "age" => 51 ],
    ];

    public function _before(\UnitTester $I)
    {
        $this->class = new \App\EmployeeReport();
    }


    public function tryToTest(\UnitTester $I, \Codeception\Example $Example)
    {
        $result = $this->class->convertNumber($Example["send"]);
        $I->assertEquals( $Example["expect"], strtolower($result), "failed" );
    }
}
