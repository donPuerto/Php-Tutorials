<?php

/*

 Function Notes:
 All functions and classes in PHP have the global scope - they can be called outside a function even if they were defined inside and vice versa.


*/


/*

Example 1: Basic Function
Calling function simply by typing function name eg HelloWorld();

*/

function HelloWorld(){

	echo "hello world";

}

HelloWorld();  //Hello World


echo "\n\n";
/*
Example 2:

Note: Function foo wasnt executed even it was next line for compilation because it was not called eg foo()...
*/

$makefoo = true;

if($makefoo) // By Default TRUE
{

	function foo(){
		echo "Im foo function";	

	}

	echo "foo not executed";

}

echo "\n\n";
/*

Example 3

Note:
Calling foo... 
Even foo() funtion was already left or within the condional statement, still can be executed...

*/

foo();

echo "\n\n";
/*

Example 4

Note: Funtion within funtion, sounds cools right?

*/

function outsideFoo(){

	function insideFoo(){

		echo "im inside foo function";
	}

	echo "im outside foo function";

}

outsideFoo();

echo "\n\n";

insideFoo();


echo "\n\n";
/*
Example 5

note:
Recursive function, its like looping function
this is user define function

*/

function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}

recursion(0);

