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
		return self::$MainPublicProperty .PHP_EOL. PHP_EOL; 
	}


}


class SubStaticClass{

	public static function SubStaticMethod(){

		return parent::$MainPublicProperty;

	}

}



echo MainStaticClass::$MainPublicProperty;
echo (new MainStaticClass)->MainStaticMethod();


echo SubStaticClass::$MainPublicProperty;
//SubStaticClass::SubMethod();




