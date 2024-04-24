<?php

# GLOBAL EXCEPTION HANDLER
function exceptions_error_handler($severity, $message, $filename, $lineno) {
    throw new ErrorException($message, 0, $severity, $filename, $lineno);
}

set_error_handler('exceptions_error_handler');

function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "<br />";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "<br />";
} finally {
    echo "First finally.<br />";
}

try {
    echo inverse(0) . "<br />";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "<br />";
} finally {
    echo "Second finally.<br />";
}

// Continue execution
echo "Hello World\n";

function test() {
    try {
        throw new Exception('foo');
    } catch (Exception $e) {
        return 'catch';
    } finally {
        return "finally";
    }
}

echo test();

echo '<br/>';
class MyException extends Exception { }

class MyOtherException extends Exception { }
class Test {
    public function testing() {
        try {
            try {
                throw new MyException('foo!');
            } catch (MyException $e) {
                // rethrow it
                throw $e;
            }
        } catch (Exception |  MyOtherException $e) {
            var_dump($e->getMessage());
            var_dump(get_class($e));
        }
    }
}

$foo = new Test;
$foo->testing();

class SpecificException extends Exception {}

function do_something_risky(){
    return null;
}
function testv1() {
    do_something_risky() or throw new Exception('It did not work'); 
    // throw new SpecificException('Oopsie');
}

try {
   testv1();
// } catch (SpecificException) {
} catch (Throwable $e) {
    echo '<br/>';
    print $e->getMessage();
    // print "A SpecificException was thrown, but we don't care about the details.";
}

try{
    try {
        throw new \Exception("Hello");
    } catch(\Exception $e) {
        echo $e->getMessage()." catch in\n";
        throw $e;
    } finally {
        echo $e->getMessage()." finally \n";
        throw new \Exception("Bye");
    }
} catch (\Exception $e) {
    echo $e->getMessage()." catch out\n";
}
