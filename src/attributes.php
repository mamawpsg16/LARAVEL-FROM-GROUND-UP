<?php

require dirname(__FILE__).DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'constants.php';
require_once ROOT . '\vendor\autoload.php';
use App\Validation\Rules\Required;
use App\Validation\Validator;
class UserRegistration{
    public function __construct(#[Required]public readonly string $user, #[Required]public readonly string $email){
        
    }
}

$user1 = new UserRegistration("Kevin","kevinmensah114@gmail.com");
echo $user1->user;
echo '<br/>';
echo $user1->email;
echo '<br/>';
echo __NAMESPACE__;

$validator = new Validator();

$validator->validate($user1);

// $errrs = $validator->getErrors();