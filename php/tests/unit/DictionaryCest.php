<?php 

namespace App\Unit;
use App\dictionaryReplacer;
// require_once "../../src/dictionaryReplacer.php";
// require_once __DIR__."/../../src/dictionaryReplacer.php";

class DictionaryCest
{
    public $dict_class = null;

    protected $input1 = "";
    protected $output1 = "";

    protected $input2 = "\$temp\$";
    protected $output2 = "temporary";

    protected $input3 = "\$temp\$ here comes the name \$name\$";
    protected $output3 = "temporary here comes the name John Doe";

    public function _before(\UnitTester $I)
    {
        $this->dict_class = new dictionaryReplacer();
    }


    public function checkReplace1(\UnitTester $I){
        $dictionary = []; // empty
        $res = $this->dict_class->replaceWords($this->input1, $dictionary);
        $I->assertEquals($this->output1, $res, "checkReplace() failed");
    }

    public function checkReplace2(\UnitTester $I){
        $dictionary = [ "temp" => "temporary" ];
        $res = $this->dict_class->replaceWords($this->input2, $dictionary);
        $I->assertEquals($this->output2, $res, "checkReplace() failed");
    }

    public function checkReplace3(\UnitTester $I){
        $dictionary = [ 
            "temp" => "temporary",
            "name" => "John Doe"
        ];
        $res = $this->dict_class->replaceWords($this->input3, $dictionary);
        $I->assertEquals($this->output3, $res, "checkReplace() failed");
    }

}
