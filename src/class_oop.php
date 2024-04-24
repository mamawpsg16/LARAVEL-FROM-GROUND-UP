<?php

class Foov3
{
    public function __construct() {}
    public function foo() {}
}

var_dump(
    is_callable(array('Foov3', '__construct')),
    is_callable(array('Foov3', 'foo'))
);
$abc;
function maxNUmber($numbers)
{
    return max($numbers);
}
$s = is_callable('maxNUmber');
echo '<br/>';
var_dump($s);
echo '<br/>';
if (function_exists('maxNUmber')) {
    echo "maxNUmber functions are available.<br />\n";
} else {
    echo "maxNUmber functions are not available.<br />\n";
}
$greet = function($name) {
    printf("Hello %s\r\n", $name);
};

$greet('World');
echo '<br/>';
$greet('PHP');
$result = 0;

$two = function() use ($result)
{ var_dump($result); };

$three = function() use (&$result)
{ var_dump($result); };

$result++;

$two();    // outputs int(0): $result was copied
$three();    // outputs int(1)

$y = 1;

$fn1 = fn($x) => $x + $y;
// equivalent to using $y by value:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};
echo '<br/>';
echo $fn1(3);
echo '<br/>';
echo $fn2(5);
echo '<br/>';

$z = 1;
$fn = fn($x) => fn($y) => $x * $y + $z;
// Outputs 51
var_export($fn(5)(10));
echo '<br/>';
class ClassA extends \stdClass {}
class ClassB extends \stdClass {}
class ClassC extends ClassB {}
class ClassD extends ClassA {}

function getSomeClass(): string
{
    return 'ClassA';
}

var_dump(new (getSomeClass()));
var_dump(new ('Class' . 'B'));
var_dump(new ('Class' . 'C'));
var_dump(new (ClassD::class));
echo '<br/>';
echo (new DateTime())->format('Y');
echo '<br/>';
var_dump(new DateTime()) ;

class Foov4
{
    public $bar;
    // public $bar = 'property';
    public function __construct() {
        $this->bar = function() {
            return 42;
        };
    }
    // public function bar() {
    //     return 'method';
    // }
}
echo '<br/>';
$obj = new Foov4();
// echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;
echo ($obj->bar)(), PHP_EOL;
class SimpleClass
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}
class ExtendClass extends SimpleClass
{
    // Redefine the parent method
    function displayVar()
    {
        echo "Extending class\n";
        parent::displayVar();
    }
}

$extended = new ExtendClass();
$extended->displayVar();
echo '<br/>';
echo $extended->var;
echo '<br/>';
class Base
{
    public function foo(int $a) {
        echo "Valid\n";
    }
}

class Extend1 extends Base
{
    function foo(int $a = 5)
    {
        parent::foo($a);
    }
}

class Extend2 extends Base
{
    function foo(int $a, $b = 5)
    {
        parent::foo($a);
    }
}

$extended1 = new Extend1();
$extended1->foo();
$extended2 = new Extend2();
$extended2->foo(1);

#NULL SAFE OPERATOR
// As of PHP 8.0.0, this line:
class User {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

class UserRepository {
    public function getUser($id) {
        // In a real-world scenario, you might fetch the user from a database or another source.
        // For simplicity, we'll return a User object with a name for the given $id.
        return $id === 5 ? new User("John Doe") : null;
    }
}

// Using null-safe operator
$repository = new UserRepository();
$result = $repository?->getUser(5)?->name;
echo '<br/>';
print($result);
 
class Items{
    const CONSTANT = 'constant value';
    // private const BAZ = 'baz';
    public function __construct(public int $id){

    }
    public function __toString() {
        return "This is the string representation of the object";
    }
}
echo '<br/>';
$item = new Items(1);
echo $item->id;
echo '<br/>';
echo $item;
echo '<br/>';
echo $item::CONSTANT;
const MY_ARR = "return array(\"A\", \"B\", \"C\", \"D\");";
echo '<br/>';
var_dump(eval(MY_ARR));

echo '<br/>';
// $objv1  = new Example();

class BaseClassv1 {
    private $sheesh = 1;
    function __construct() {
        print "In BaseClass constructor\n";
    }
    // function __destruct() {
    //     print "Destroying " . __CLASS__ . $this->sheesh."<br/>";
    // }

    public function methodv1() {
        echo 'A' . PHP_EOL;
    }
}
echo '<br/>';
class SubClass extends BaseClassv1 {
    function __construct() {
        // parent::__construct();
        print "In SubClass constructor\n";
    }
    public function methodv1() {
        echo 'B' . PHP_EOL;
    }
}
class OtherSubClass extends BaseClassv1 {
    // inherits BaseClass's constructor
    public ?int $id;
    public ?string $name;

    public function __construct(?int $id = null, ?string $name = null) {
        $this->id = $id;
        $this->name = $name;
        parent::__construct();
    }
    public static function fromBasicData(int $id, string $name): static {
        $new = new static($id, $name);
        return $new;
    }
    public function methodv1() {
        echo 'C' . PHP_EOL;
    }
}
// In BaseClass constructor
$obj1 = new BaseClassv1();
echo '<br/>';
// In BaseClass constructor
// In SubClass constructor
$obj2 = new SubClass();
echo '<br/>';
$obj3 = new OtherSubClass(5,'KEVIN');
// $basic= OtherSubClass::fromBasicData(5,'Kevin');
echo '<br/>';

// var_dump($basic->id);
$obj1->methodv1();
echo '<br/>';
$obj2->methodv1();
echo '<br/>';
$obj3->methodv1();
echo '<br/>';
trait  custom
{
    public function hello()
    {
        echo "hello";
    }
}

trait custom2
{
    public function hellov2()
    {
            echo "hello2";
    }
}

class NewClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

class NewClassv1 extends NewClass
{
    use custom,custom2;
    public $public = 'Public2';
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        // echo $this->private;
    }

    function getMyProtected(){
        echo $this->protected;
    }
}
echo '<br/>';
echo 'BREAK NEW CLASS';
$obj2 = new NewClassv1();
echo $obj2->public; // Works
echo $obj2->getMyProtected(); // Works
echo '<br/>';
$obj2->hello();
echo '<br/>';
$obj2->hellov2();
echo '<br/>';
$obj2->printHello();
interface Vehicle {
    public function start();
    public function stop();
}

abstract class Cheese
{
    //can ONLY be inherited by another class
    public function awfawf(){}
}

// class Cheddar extends Cheese implements Vehicle
class Cheddar extends Cheese
{
    public function __construct(){
        echo 'CHEDDAR';
    }
}

$cheddar = new Cheddar;

class foov2 {
    function print($text='') {
         print($text);
    }
}

class bar extends foov2 {
        function print($text1='',$text2='') {
            print($text1.' '.$text2);
        }
}
echo '<br/>';
$foov2 = new foov2;
$bar = new bar;
$foov2->print('HALLELUJAH');
echo '<br/>';
$bar->print('COMEONE','ASDAS');

interface ProductInterface{
    public function getItems();
    public function storeItem($item);
}
// abstract class ProductAbstract implements ProductInterface
// {
//     private $items = ['wallet','bitcoin','buko','aquaflask'];
//     // Force Extending class to define this method
//     abstract protected function deleteItem($index);

//     public function getItems(){
//         return $this->items;
//     }
//     public function storeItem($item){
//         array_push($this->items, $item);
//     }
// }

class ConcreteClass1 implements ProductInterface
{
    private $items = ['wallet','bitcoin','buko','aquaflask'];
    // Force Extending class to define this method
    public function getItems(){
        return $this->items;
    }
    public function storeItem($item){
        array_push($this->items, $item);
    }
    protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix, $data ='') {
        return "{$prefix} ConcreteClass1 {$data}";
    }

    public function deleteItem($index){
        unset($this->items[$index]);
    }
}
echo '<br/>';
// $concrete = (new ConcreteClass1())->prefixValue('ABSTRACT', 'BAM');
// echo $concrete;
$concrete = new ConcreteClass1();
$concrete->storeItem('fudgeebar');
$concrete->deleteItem(0);
var_dump($concrete->getItems());
echo '<br/>';

class FooV5 {}
class BarV2 extends FooV5 {}

interface A {
    public function myfunc(FooV5 $arg): BarV2;
}

interface B {
    public function myfunc(FooV5 $arg): BarV2;
}
trait helloWorld{
    public function helloWorld(){
        echo  ' Hello BITCH ';
    } 
}

class MyClassv5 implements A, B
{   
    use helloWorld;
    public function myfunc(FooV5 $arg): BarV2
    {
        return new BarV2();
    }

    public function helloWorld(){
        echo  ' Hello BITCH  CLASS';
    } 
}
echo '<br/>';
$foov5 = new Foov5();
$myclass5 = new MyClassv5();
$sheesh = $myclass5->myfunc($foov5);
$myclass5->helloWorld();
var_dump($sheesh);

