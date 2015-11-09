<?php

/*

An array in PHP is actually an ordered map. A map is a type that associates values to keys. 
This type is optimized for several different uses; it can be treated as an array, list (vector), 
hash table (an implementation of a map), dictionary, collection, stack, queue, and probably more. 
As array values can be other arrays, trees and multidimensional arrays are also possible.


An array can be created using the array() language construct. 
It takes any number of comma-separated key => value pairs as arguments.

Note:
5.4 < php version

array(

    key  => value,
    key2 => value2,
    key3 => value3,
    ...
)

Note:
5.4 + php version

array(

    key  => value,
    key2 => value2,
    key3 => value3,
    ...
)



*/


echo "===================================\n";
echo "Arrays and Datatypes\n";
echo "string, integer, Boolean, null\n";
echo "===================================\n";




$datatypes = [ 
				"string" => ["Hello world" , "1000"], 
				"number" => [23, 1.146, 13.2,14,1234567890123456789],
				"boolean" => [true, false],
				"null" => [null],
				

			];


/*echo var_dump($datatypes);*/

echo $datatypes["string"][0] ."\n"; //Hello world
echo $datatypes["string"][1] ."\n"; //1000  as string
echo $datatypes["number"][0] ."\n"; //23  as int
echo $datatypes["number"][1] ."\n"; //1.146 as double
echo $datatypes["number"][2] ."\n"; //13.2 as double
echo $datatypes["number"][3] ."\n"; //1234567890123456789 as double
echo $datatypes["null"][0] ."\n"; //NULL as null no datypes




echo "===================================\n";
echo "Arrays inside Arrays\n"; 
echo "===================================\n";

$familytree = array(
				"family" => [
								"parent"=> [	
												["John Doe", "Jane Doe"],	
												"siblings" 	=> 	[
																	"Ben",
																	"Joe",
																	"Peter",
																	"Josephine"
											               		], 
									
											]
							]
					);


echo $familytree["family"]["parent"][0];


echo "\n\n";




