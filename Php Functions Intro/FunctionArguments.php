<?php

/*

PHP Function Arguments

Information can be passed to functions through arguments. An argument is just like a variable.
Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just seperate them with a comma.

Function the same name to called twice not allowed...

*/

/*

Example 1
Note:

Passing argument and the same time calling a function...


*/

function foofamily($fname) {
    echo "$fname foof\n";
}

foofamily("Jani");
foofamily("Hege");
foofamily("Stale");
foofamily("Kai Jim");
foofamily("Borge");

/*

Example 2
Note:

Multiple arguments


*/

echo "\n\n";

function barfamily($fname, $year) {
    echo "$fname Barz. Born in $year \n";
}

barfamily("Hege", "1975");
barfamily("Stale", "1978");
barfamily("Kai Jim", "1983");


echo "\n\n";
/*

PHP Default Argument Value
Note:

The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument..

You can pass argument of any of the datatypes
integer
string
boolean
arrays
...
etc



*/

function setHeight($minheight = "im a default value") {
    echo "The height is : $minheight \n";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);


