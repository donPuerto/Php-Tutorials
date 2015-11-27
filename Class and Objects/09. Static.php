<?php
/*

Static methods

Because static methods are callable without an instance of the object created, 
the pseudo-variable $this is not available inside the method declared as static.


Note:

*/


//Example: #1 Static Method
class StaticClass{

	public static function StaticMethod(){
		echo "Static Method"  .PHP_EOL.PHP_EOL;
	}

}

StaticClass::StaticMethod();




//Example: #2 Static Properties
class MainStaticClass{

	public static $MainPublicProperty = "Main Public Property";


	public function MainStaticMethod(){
		return self::$MainPublicProperty; 
	}


}


class SubStaticClass extends MainStaticClass{

	public static function SubStaticMethod(){

		return parent::$MainPublicProperty;

	}

}



echo MainStaticClass::$MainPublicProperty." using Scope Operator".PHP_EOL;
echo (new MainStaticClass)->MainStaticMethod()." using instantiated class".PHP_EOL;


echo SubStaticClass::$MainPublicProperty." call the property on the SubClass".PHP_EOL;
echo SubStaticClass::SubStaticMethod()." call the method on the SubClass";




