<?php
/*
Notes:

In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays

Breaking Line
"\n" => use double quote not single quote
echo "<br/>"
*/


echo "=====================================================\n";
echo "PHP Indexed Arrays\n";
echo "=====================================================\n\n";

/*Declaration*/
$car = array('volvo','BMW','Toyota');

echo "*** Accessing Array ****" . "\n";

echo $car[0] ."\n";
echo $car[1] ."\n";
echo $car[2] ."\n\n\n";
/*
Result:
volvoBMWToyota
*/


echo "*** Count Array Function ***" . "\n";
echo count($car) ."\n\n\n";
/*
Result:
3
*/


echo "*** Loop Through an Indexed Array using for loop ***" . "\n";
for ($x = 0; $x<count($car); $x++){

	echo $car[$x]. "\n";
	
}

echo "\n---or---" . "\n\n";

echo "*** Loop Through an Indexed Array using foreach loop ***" . "\n";

foreach ($car as $key => $cars) {
	echo  $key ."=>". $cars ."\n";
}


echo "\n\n=====================================================\n";
echo "PHP Associative Arrays\n";
echo "=====================================================\n\n";

$age = array(
		"Peter" => "35",
		"Ben" => "37",
		"Joe" => "43",
	);

/*---or---*/
/*
Defining key litterally

$age = array();
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
*/


echo "*** Accessing Array ****" . "\n\n";

echo $age['Peter'] . "\n";
echo $age['Ben'] . "\n";
echo $age['Joe'] . "\n";

echo "\n\nAccessing Array in for each loop\n";

foreach ($age as $key => $ages) {
	echo $key  ."=>" . $ages . "\n";
}

echo "\n\n=====================================================\n";
echo "PHP 5 Multidimensional Arrays\n";
echo "=====================================================\n\n";