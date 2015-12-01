<?php

/*

Curious Keyword" that i found when i digging up PHP

*/


// 1. PHP_EOL

echo "Hello" . PHP_EOL . "World";






/*

2. Curley Brackets {}

note: 
Curly brackets are used to mark class, function (methods in OOP terminology), loop and control structure bodies.
They can also be used within strings to separate variables from surrounding text.

*/

$variable = 'add';

//eg 1 normal variable
echo "I assigned a value to this $variable property";

//eg 2 Putting curly braces to  denote that this a property
echo "I assigned a value to this {$variable} property";

//eg 3 an array
echo "I could also assigned an array {$variable[1]}"; 

//eg 4 method
echo "Past tense of this verb is {$variable->getMethod()}";




