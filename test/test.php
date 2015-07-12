<?php

include __DIR__ . '/../debug.class.php';

$debug = new debug();


$testArr = array("test" => "test1", "test1" => "Test2", "testarrarr" => array("key" => "value"));


$debug->debug_to_console($testArr);



//transform array to object

$object = json_decode(json_encode($testArr), FALSE);

$debug->debug_to_console($object);

$debug->print_info();
echo "<pre>";
print_r($GLOBALS);

echo "<h1>Test</h1>";

?>