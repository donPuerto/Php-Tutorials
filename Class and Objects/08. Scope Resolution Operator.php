<?php

/*

Scope Resolution Operator (::)

The Scope Resolution Operator (also called Paamayim Nekudotayim) 
or in simpler terms, the double colon, is a token that allows access to static, constant, 
and overridden properties or methods of a class.

note:
Direct Call on Constant, no need to instantiate

*/

//Example#1
Class MainClass{

	const Const_val = "I love PHP";

}

Class SubClass extends MainClass{

	public static $SubClassPubProperty = "SubClass Public Property";


	//Three special keywords self, parent and static are used to access properties or methods from inside the class definition.
	public function SubClassMethod(){
		echo PHP_EOL.parent::Const_val . " Under SubClass" . PHP_EOL;
		echo self::$SubClassPubProperty . PHP_EOL;
	}
	

}


echo MainClass::Const_val . PHP_EOL;

(new SubClass)->SubClassMethod();

echo PHP_EOL . PHP_EOL;







//Example#2
Class MainClassOverride{

	public static function OverrideMethod(){

		echo "Main Method";

	}

}

Class SubClassOverride extends MainClassOverride{

	public static function OverrideMethod(){
		//parent::OverrideMethod();
		echo "The method was  override...";
		
	}
	
}


(new SubClassOverride)->OverrideMethod();




