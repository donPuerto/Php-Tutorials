<?php

/*

Object Inheritance 

Inheritance is a well-established programming principle, 
and PHP makes use of this principle in its object model. 
This principle will affect the way many classes and objects relate to one another.

For example, when you extend a class, 
the subclass inherits all of the "public" and "protected" methods from the parent class. 
Unless a class overrides those methods, they will retain their original functionality.


This is useful for defining and abstracting functionality, 
and permits the implementation of additional functionality in similar objects 
without the need to reimplement all of the shared functionality.


note:

Inheritance using keyword "extends"
MainClass will be overriden if there are similar properties or methods to be called on Subclass


 */

class MainClass{

	public $firstname, $lastname;
    
    

}

class subclass extends MainClass{

	public function Greet($fn = "John", $ln = "Doe")
    {

    	$this->firstname = $fn;
    	$this->lastname = $ln; 

        return "Hello PHP, I'm  " . $this->firstname . " " . $this->lastname;
    }

}


echo (new subclass)->Greet("Don", "Puerto");