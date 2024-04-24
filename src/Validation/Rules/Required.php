<?php
namespace App\Validation\Rules;
use App\Validation\Validators\ValidatorInterface;
use Attribute;
#[Attribute]
class Required implements ValidationRuleInterface{
    public function getValidator(){
        var_dump("SHZXC");
    }
}