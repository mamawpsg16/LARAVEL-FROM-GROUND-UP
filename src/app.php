<?php

require dirname(__FILE__).DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'constants.php';
require_once ROOT . '\vendor\autoload.php';
// if (!isset($_SERVER['PHP_AUTH_USER'])) {
//     header('WWW-Authenticate: Basic realm="My Realm"');
//     header('HTTP/1.0 401 Unauthorized');
//     echo 'Text to send if user hits Cancel button';
//     exit;
// } else {
//     echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
//     echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
// }

# SET COOKIE
setcookie("usertoken", "noice", time()+20*24*60*60);
// 20 days = 20*24*60*60 seconds

#UNSET COOKIE
setcookie("usertoken", "", time()-3600);
// $data = file_get_contents("https://www.allday.com.ph/gatorade-blue-bolt-900ml.html");
// var_dump($http_response_header);
echo $_SERVER['PHP_SELF'];
echo '<pre>';
// var_dump($http_response_header);
// var_dump($_SERVER) ;
var_dump($_COOKIE) ;
echo putenv('DATABASE') ;
echo getenv('DATABASE') ;
echo '<pre/>';
echo '<br/>';
print(DIRECTORY_SEPARATOR);
// echo '<br/>';
setcookie("MyCookie[foo]", 'Testing 1', time()+3600);
setcookie("MyCookie[bar]", 'Testing 2', time()+3600);
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);
?>
<html>
    PHP ON GROUND UP
    <!-- SHEESH
    <?='if you want to serve PHP code in XHTML or XML documents,
                use these tags'; ?>
    <p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php echo 'While this is going to be parsed.'; ?>
<p>This will also be ignored by PHP and displayed by the browser.</p>
<?php $expression = false; ?>
<p<?php if ($expression): ?> class="highlight"<?php endif;?>>This is a paragraph.</p>
     <?php if ($expression == true): ?>
    This will show if the expression is true.
    <?php else: ?>
    Otherwise this will show.
    <?php endif; ?>            -->
    <?php
        $file_contents  = '<' . '?php die(); ?' . '>' . "\n";
    ?>
    <?php echo "Some text"; ?>
    No newline
    <?php
        echo "a"; echo "b"; echo "c";
        #The output will be "abc" with no errors
    ?>
    <h1>This is an <?php # echo 'simple';?> example</h1>
<p>The header above will say 'This is an  example'.</p>
<?php
    echo 'Arnold once said: "I\'ll be back"';
    // Array destructuring 
    $source_array = ['foo', 'bar', 'baz'];

    [$foo, $bar, $baz] = $source_array;
    [, , $asdfas] = $source_array;
    
    echo $baz;    // prints "baz"
    echo $foo;    // prints "foo"
    echo $bar;    // prints "bar"
    echo $asdfas;    // prints "baz"
    $source_array = ['foo', 'bar', 'baz'];

    // Assign the element at index 2 to the variable $baz
 
    $source_arrayv1 = [
        [1, 'John'],
        [2, 'Jane'],
    ];
    
    foreach ($source_arrayv1 as [$id, $name]) {
        echo $id.'-'. $name.PHP_EOL;
    }

    $source_arrayv2 = ['foo' => 1, 'bar' => 2, 'baz' => 3];

    // Assign the element at index 'baz' to the variable $three
    ['baz' => $three] = $source_arrayv2;
    print_r($source_arrayv2). '\\n';
    // echo $three;

    // SWAPPING VALUES 
    $a = 1;
    $b = 2;

    [$b, $a] = [$a, $b];
    echo '<br/>';
    echo $a;    // prints 2
    echo $b;    // prints 1
    echo '<br/>';
    $a = array(1 => 'one', 2 => 'two', 3 => 'three');
    unset($a[2]);
    /* will produce an array that would have been defined as
    $a = array(1 => 'one', 3 => 'three');
    and NOT
    $a = array(1 => 'one', 2 =>'three');
    */

    $b = array_values($a);
    print_r($b);
    $foo = array();
    $foo['bar'] = 'enemy';
    echo $foo['bar'];
    echo '<br/>';
    $array = array(1, 2);
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        echo "\nChecking $i: \n";
        // echo "Bad: " . $array['$i'] . "\n";
        echo "Good: " . $array[$i] . "\n";
        // echo "Bad: {$array['$i']}\n";
        echo "Good: {$array[$i]}\n";
    }
    echo '<br/>';
    
    $arr = array('fruit' => 'apple', 'veggie' => 'carrot');

    // Correct
    print $arr['fruit'];  // apple
    print $arr['veggie']; // carrot
    print "Hello {$arr['fruit']}";

    echo '<br/>';
    // Using short array syntax.
    // Also, works with array() syntax.
    $arr1 = [1, 2, 3];
    $arr2 = [...$arr1]; //[1, 2, 3]
    $arr3 = [0, ...$arr1]; //[0, 1, 2, 3]
    $arr4 = [...$arr1, ...$arr2, 111]; //[1, 2, 3, 1, 2, 3, 111]
    $arr5 = [...$arr1, ...$arr1]; //[1, 2, 3, 1, 2, 3]
    var_dump($arr5);
    function getArr() {
    return ['a', 'b'];
    }
    $arr6 = [...getArr(), 'c' => 'd']; //['a', 'b', 'c' => 'd']

    $arr11 = ["a" => 1];
    $arr12 = ["a" => 2];
    $arr13 = ["a" => 0, ...$arr11, ...$arr12];
    var_dump($arr13); // ["a" => 2]
    echo '<br/>';
    // This:
    $a = array( 'color' => 'red',
    'taste' => 'sweet',
    'shape' => 'round',
    'name'  => 'apple',
    4        // key will be 0
    );
    var_dump($a);

    
// . . .is completely equivalent with this:
    $a = array();
    $a['color'] = 'red';
    $a['taste'] = 'sweet';
    $a['shape'] = 'round';
    $a['name']  = 'apple';
    $a[]        = 4;        // key will be 0

    
    $switching = array(         10, // key = 0
    5    =>  6,
    3    =>  7, 
    'a'  =>  4,
            11, // key = 6 (maximum of integer-indices was 5)
    '8'  =>  2, // key = 8 (integer!)
    '02' => 77, // key = '02'
    0    => 12  // the value 10 will be overwritten by 12
    );
    echo '<br/>' ;
    // Example #14 One-based index

    $firstquarter  = array(1 => 'January', 'February', 'March');
    print_r($firstquarter);

    // Example #15 Filling an array

    // fill an array with all items from a directory
    $handle = opendir('.');
    while (false !== ($file = readdir($handle))) {
        $files[] = $file;
    }
    closedir($handle); 
    echo '<br/>' ;
    // REFERENCE
    $arr1 = array(2, 3);
    $arr2 = $arr1;
    $arr2[] = 4; // $arr2 is changed,
                // $arr1 is still array(2, 3)
    var_dump($arr1, $arr2);    
    echo '<br/>' ;   
    $arr3 = &$arr1;
    $arr3[] = 4; // now $arr1 and $arr3 are the same
    var_dump($arr1, $arr3);      
    echo '<br/>' ;
    function sheesh($arr =[]){
        $new_array = [];
        if($arr){
            foreach($arr as $value){
                $new_array = $value;
            }
        }
        return $new_array;
    }
    // "If you convert a NULL value to an array, you get an empty array."
    $values = sheesh(...);
    var_dump($values);
    echo '<br/>' ;   
    class foo
    {
        function do_foo()
        {
            echo "Doing foo."; 
        }
    }

    $bar = new foo;
    $bar->do_foo();
    echo '<br/>' ;   
    $obj = (object) array('1' => 'foo');
    var_dump(isset($obj->{'1'})); // outputs 'bool(true)' as of PHP 7.2.0; 'bool(false)' previously
    echo '<br/>' ;
    var_dump(key($obj)); 
    
    $newObj = new \stdClass();
    $newObj->id = 1;
    $newObj->email = 'kevinmensah114@gmail.com';
    echo '<br/>' ;   
    $sheesh = (array)$newObj;
    var_dump($newObj);
    echo '<br/>' ;
    var_dump($sheesh);

    # ENUM
    enum Suit
    {
        case Hearts;
        case Diamonds;
        case Clubs;
        case Spades;
    }
    
    // Using the Suit enum
    $cardSuit = Suit::Diamonds;
    
    // Switch statement with the Suit enum
    switch ($cardSuit) {
        case Suit::Hearts:
            echo "Heart suit selected.";
            break;
        case Suit::Diamonds:
            echo "Diamond suit selected.";
            break;
        case Suit::Clubs:
            echo "Club suit selected.";
            break;
        case Suit::Spades:
            echo "Spade suit selected.";
            break;
        default:
            echo "Invalid suit.";
    }
    echo '<br/>' ;
    # CALLBACK FUNCTION

    // An example callback function
    function my_callback_function() {
        echo 'Hello World v1!'."<br/>";
    }

    // An example callback method
    class MyClass {
        static function myCallbackMethod() {
            echo 'Hello World!'."<br/>";

        }
    }

    // Type 1: Simple callback
    call_user_func('my_callback_function');
    // Type 2: Static class method call
    call_user_func(array('MyClass', 'myCallbackMethod'));
    // Type 3: Object method call
    $obj = new MyClass();
    call_user_func(array($obj, 'myCallbackMethod'));

    // Type 4: Static class method call
    call_user_func('MyClass::myCallbackMethod');

    // Example #2 Callback example using a Closure

    // Our closure
    $double = function($a) {
        return $a * 2;
    };

    // This is our range of numbers
    $numbers = range(1, 5);

    // Use the closure as a callback here to
    // double the size of each element in our
    // range
    $new_numbers = array_map($double, $numbers);

    print implode(' ', $new_numbers);

    echo "<br/>";
    // function sayHello(string $name): never
    // {
    //     echo "Hello, $name";
    //     exit(); // if we comment this line, php throws fatal error
    // }

    // sayHello("John"); // result: "Hello, John"

    # GLOBAL keyword
    echo 'SHEESH';
    $a = 1; /* global scope */ 

    $a = 1;
    $b = 2;

    function Sum()
    {
        global $a, $b;

        $b = $a + $b;
    } 

    Sum();
    echo $b;
     # STATIC KEYWORD
    function test()
    {
        static $a = 0;
        echo $a;
        $a++;
    }
    test();
    test();
    #VARIABLE VARIABLE
    // A variable variable takes the value of a variable and treats that as the name of a variable. In the above example, hello, can be used as the name of a variable by using two dollar signs. i.e.
    $a = 'hello';
    $$a = 'world';
    echo "$a {$$a}";
    echo "$a $hello";
    echo "<br/>";
    class foov1 {
        var $bar = 'I am bar.';
        var $arr = array('I am A.', 'I am B.', 'I am C.');
        var $r   = 'I am r.';
    }
    
    $foo = new foov1();
    $bar = 'bar';
    $baz = array('foo', 'bar', 'baz', 'quux');
    echo "<br/>";
    var_dump($foo);
    echo "<br/>";
    echo $foo->$bar . "\n";
    echo $foo->{$baz[1]} . "\n";
    echo "<br/>";
    $start = 'b';
    $end   = 'ar';
    echo $foo->{$start . $end} . "\n";
    echo "<br/>";
    $arr = 'arr';
    echo $foo->{$arr[1]} . "\n";
    if ($_POST) {
        echo '<pre>';
        echo htmlspecialchars(print_r($_POST, true));
        echo '</pre>';
    }
    // var_dump($_COOKIE['MyCookie']);
    echo "<br/>";   
    # CONSTANTS
    define("CONSTANT", "Hello world.");
    echo CONSTANT;
    
    Class Myclassv1{
        const NAME = "Nicolas";
    }
    $myclass_v1 = new Myclassv1;
    // echo $myclass_v1::NAME;
    // echo Myclassv1::NAME
    var_dump(__LINE__);
    echo '<br/>';
    var_dump(__FILE__);
    echo '<br/>';
    var_dump(__DIR__);
    echo '<br/>';
    var_dump(__FUNCTION__);
    echo '<br/>';
    var_dump(__CLASS__);
    echo '<br/>';
    var_dump(__TRAIT__);
    echo '<br/>';
    var_dump(__METHOD__);
    echo '<br/>';
    var_dump(__NAMESPACE__);
    echo '<br/>';
    # ASSIGN SAME VALUE IN MULTIPLE VARIABLES
    $var1 = $var2 = $var3 = 'a';
    var_dump($var1,$var2, $var3);
    echo '<br/>';
    list($var1, $var2, $var3) = array('apple', 'banana', 'cherry'); 
  
    echo "$var1, $var2, $var3\n"; 
    
    $data = [10, 20, 30]; 
    list($a, $b, $c) = $data; 
    
    echo "$a, $b, $c";
    $val1 = 1;
    echo ++$val1.'SHEESH';
    echo $val1++.'SHEESH';
    
    function double($i)
    {
        return $i*2;
    }
    $b = $a = 5;        /* assign the value five into the variable $a and $b */
    $c = $a++;          /* post-increment, assign original value of $a 
                        (5) to $c */
    $e = $d = ++$b;     /* pre-increment, assign the incremented value of 
                        $b (6) to $d and $e */
    var_dump($e,$d);
    /* at this point, both $d and $e are equal to 6 */

    $f = double($d++);  /* assign twice the value of $d before
                        the increment, 2*6 = 12 to $f */
    var_dump($f);
    $g = double(++$e);  /* assign twice the value of $e after
    the increment, 2*7 = 14 to $g */
    var_dump($e);
    $h = $g += 10; 
    echo $h;

    ($h) ? print('true') : print('false');

    // named function
    function doublev1($x) {
        return 2 * $x;
      }
      
      // An anonymous function. It has no name, in the same way that the string
      // "hello" has no name. Since it is an expression, we can give it a temporary
      // name by assigning it to the variable $triple.
    //   anonymouse function
      $triple = function($x) {
        return 3 * $x;
      };
      echo '<br/>';
      echo doublev1(5);
      echo '<br/>';
      echo $triple(5);

    //   $my_functions = array('double', $triple);
        $my_numbers = array(call_user_func('double', 5), call_user_func($triple, 5));
      echo '<br/>';
    //   var_dump($my_functions);
      var_dump($my_numbers);
    echo '<br/>';

    $code = 'echo "Hello, World!";';
    eval($code);
    echo '<br/>';
    // require 'helloworld.php';

    // If your included file returns a value, you can get it as a result from require(), i.e.
    // echo '<br/>';
    // $bar = require("foo.php");
    echo $bar; // equals to "foo"
    echo '<br/>';
    // print(__FILE__);
    echo '<br/>';
    try {
        // require __DIR__ . '/helloworld.php';
        // include 'helloworld.php';
        // include __DIR__ . '/helloworld.php';
        // require(__DIR__ . '/ABCD.php');
        echo '<br/>';   
    } catch (\Throwable $e) {
        echo "This was caught: " . $e->getMessage();
    }
    echo " End of script.";

    // include 'http://www.example.com/file.php?foo=1&bar=2';
    // won't work, evaluated as include(('vars.php') == TRUE), i.e. include('1')
    // if (include('vars.php') == TRUE) {
    //     echo 'OK';
    // }

    // // works
    // if ((include 'vars.php') == TRUE) {
    //     echo 'OK';
    // }
    echo " End of script v2.";
    // $string = get_include_contents('foo.php');
    // function get_include_contents($filename) {
    //     if (is_file($filename)) {
    //         echo 'YES';
    //         echo $filename;
    //         ob_start();
    //         include $filename;
    //         return ob_get_clean();
    //     }
    //     return false;
    // }
    // echo '<pre>';
    // var_dump($_SERVER);
    // echo '<pre/>';

    echo '<br/>';
    // print(getcwd());

    // echo ( __FILE__ != $_SERVER['SCRIPT_FILENAME'] ) or exit ( 'No' );
    // print($_SERVER['SCRIPT_FILENAME']);
    echo DIRECTORY_SEPARATOR;
    echo PHP_EOL;
    echo 'SHEESH';

    $cfg_path = 'includes'. DIRECTORY_SEPARATOR. 'config.php';
    echo '<br/>';
    require_once($cfg_path);

    define('MAINDIR',dirname(__FILE__) . '/');
    define('DL_DIR',MAINDIR . 'downloads/');
    define('LIB_DIR',MAINDIR . 'lib/');
    echo '<br/>';
    print(dirname(dirname(__FILE__)));
    echo '<br/>';
    print(dirname(__FILE__));
    echo '<br/>';
    print(__DIR__);
    echo '<br/>';
    print(__FILE__);
    echo '<br/>';
    $documentRoot = $_SERVER['DOCUMENT_ROOT'];
    var_dump($documentRoot,'asfa');
    echo '<br/>';
    echo strstr($documentRoot,"/");
    $documentRootv1 = str_replace('/', DIRECTORY_SEPARATOR, $documentRoot);
    echo '<br/>';
    var_dump(DIRECTORY_SEPARATOR,'X');
    echo '<br/>';
    var_dump($documentRootv1,'CRAZY');
    echo '<br/>';
    // require_once(LIB_DIR . 'excel_functions.php');
    $zxc = file_get_contents('foo.php');
   
    var_dump(ROOT,"zXC");
    echo '<br/>';
    print(MAIN);
    echo '<br/>';

    // function foo()
    // {
    //     echo '<br/>';
    //     var_dump(func_get_args());
    //     echo '<br/>';
    //     echo func_get_arg(0);
    //     echo '<br/>';
    //     echo "Number of arguments: ", func_num_args(), PHP_EOL;
    // }

    // foo(1, 2, 3); 

    function takes_array($input)
    {
        echo "$input[0] + $input[1] = ", $input[0]+$input[1];
    }
    takes_array([5,6,7]);
    echo '<br/>';
    function add_some_extra(&$string)
    {
        $string .= 'and something extra.';
    }
    $str = 'This is a string, ';
    add_some_extra($str);
    echo $str;

    function sumv2(...$numbers) {
        $acc = 0;
        foreach ($numbers as $n) {
            $acc += $n;
        }
        return $acc;
    }
    echo '<br/>';
    echo sumv2(1, 2, 3, 4);
    function add($a, $b) {
        return $a + $b;
    }
    
    echo '<br/>';
    echo add(...[1, 2])."\n";
    
    $a = [1, 2];
    echo add(...$a);
    echo '<br/>';
    $array1 = [[1],[2],[3]];
    $array2 = [4];
    $array3 = [[5],[6],[7]];
    var_dump(...$array1);
    echo '<br/>';
    $result1 = array_merge(...$array1); // Legal, of course: $result == [1,2,3];
    var_dump($result1);
    echo '<br/>';
    $result2 = array_merge($array2, ...$array1); // $result == [4,1,2,3]
    var_dump($result2);
    echo '<br/>';
    // $result = array_merge(...$array1, $array2); // Fatal error: Cannot use positional argument after argument unpacking.
    $result3 = array_merge(...$array1, ...$array3); // Legal! $result == [1,2,3,5,6,7]
    var_dump($result3);
    echo '<br/>';
    
    function small_numbers()
    {
        return [0, 1, 2];
    }
    $d = list($zero, $one, $two) = small_numbers();
    var_dump($d);
    echo '<br/>';


    ?>
    <!-- <form action="" method="post">
        Name:  <input type="text" name="personal[name]" /><br />
        Email: <input type="text" name="personal[email]" /><br />
        Beer: <br />
        <select multiple name="beer[]">
            <option value="warthog">Warthog</option>
            <option value="guinness">Guinness</option>
            <option value="stuttgarter">Stuttgarter Schwabenbräu</option>
        </select><br />
        <input type="submit" value="submit me!" />
    </form> -->

</html>