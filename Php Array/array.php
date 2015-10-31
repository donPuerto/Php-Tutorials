<?php
/*
Notes:

In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays

Breaking Line
"\n" => use double quote not single quote
echo "<br/>" => can be use only in HTML

Declaration Type:
a) $array = (); //backward compatible to any version
b) $array = []; //support 5.4 +

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

/*
Result
Peter=>35
Ben=>37
Joe=>43

*/

echo "\n\n=====================================================\n";
echo "PHP 5 Multidimensional Arrays\n";
echo "=====================================================\n\n";

$cars = array
  (
	  array("Volvo     ",22,18),
	  array("BMW       ",15,13),
	  array("Saab      ",'05','02'),
	  array("Land Rover",17,15)
  );

  echo "*** Accessing Array ****" . "\n\n";

  /*key 0*/
  echo $cars[0][0] . "\n";
  echo $cars[0][1] . "\n";
  echo $cars[0][2] . "\n\n";
  /*
  Result:
  Volvo
  22
  18
  */


  /*key 1*/
  echo $cars[1][0] . "\n";
  echo $cars[1][1] . "\n";
  echo $cars[1][2] . "\n\n";
  /*
  Result:
  BMW
  15
  13
  */

  /*key 2*/
  echo $cars[2][0] . "\n";
  echo $cars[2][1] . "\n";
  echo $cars[2][2] . "\n\n";
  /*
  Result:
  Saab
  5
  2
  */

  /*key 3*/
  echo $cars[3][0] . "\n";
  echo $cars[3][1] . "\n";
  echo $cars[3][2] . "\n\n";
  /*
  Land Rover
  17
  15
  */
 
 echo "\nAccessing Array in for loop and display as table style\n";

 for ($row = 0; $row < count($cars); $row++) {
 	  echo "\n";
	  for ($col = 0; $col < 3; $col++) {
	    echo $cars[$row][$col]. "  |  ";
	  }
  
}


echo "\n\n=====================================================\n";
echo "Using print_r() and var_dump()\n";
echo "=====================================================\n\n";

echo "print_r()";
echo "\n";
print_r($cars);
/*
Result:
Array
(
    [0] => volvo
    [1] => BMW
    [2] => Toyota
)
*/

echo "\n\nprint_r()\n";
var_dump($cars);


echo "\n\n=====================================================\n";
echo "
note:
The cleaner way to print on screen is to enclose on 'pre tag' 
<pre>
  var_dump(expression);	
</pre>
referrence:
http://laraveldaily.com/echoing-dd-vs-var_dump-vs-print_r/

\n";

echo "=====================================================\n\n";