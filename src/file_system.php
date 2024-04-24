<?php

$dir = scandir(__DIR__);
var_dump(is_file($dir[1]));
echo '<br/>';
var_dump(is_dir($dir[1]));
echo '<br/>';
// mkdir('CRAZY', 0777, true);
// mkdir('CRAZY/BRODIE',  recursive: true);
// rmdir('CRAZY/BRODIE');
// rmdir('CRAZY');
if(file_exists('foo.php')){
    echo filesize('foo.php');
    echo '<br/>';   
    file_put_contents('foo.php','CRAZY FOO');
    clearstatcache();
    echo filesize('foo.php');
}else{
    echo 'WTF BRO';
}

$file = @fopen('foo.php', 'r');
// var_dump($file);
echo '<br/>'; 
// while(($line = fgetscsv($file))!== false) {
while(($line = fgets($file))!== false) {
    echo $line .'<br\>';
}
fclose($file);
echo '<br/>'; 
$content = file_get_contents('foo.php',offset: 3, length:5);
$NEWFILE = file_put_contents('foov1.php','YO YO YO', FILE_APPEND);
echo $content;
echo $NEWFILE;
// unlink('foov1.php');
copy('foo.php','foo_copy.php');
rename('foo_copy.php','foo.php');
echo '<br/>'; 
var_dump(pathinfo('foo.php'));