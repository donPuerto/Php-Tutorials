<?php
/*

Class Abstraction

PHP 5 introduces abstract classes and methods. Classes defined as abstract may not be instantiated, 
and any class that contains at least one abstract method must also be abstract. Methods defined as 
abstract simply declare the method's signature - they cannot define the implementation.

When inheriting from an abstract class, all methods marked abstract in the parent's class declaration 
must be defined by the child; additionally, these methods must be defined with the same (or a less restricted) visibility. 
For example, if the abstract method is defined as protected, the function implementation must be defined 
as either protected or public, but not private. Furthermore the signatures of the methods must match, 
i.e. the type hints and the number of required arguments must be the same. For example, if the child 
class defines an optional argument, where the abstract method's signature does not, there is no conflict 
in the signature. This also applies to constructors as of PHP 5.4. Before 5.4 constructor signatures could differ.

Notes:
Abstract 
    -Parent Class can have method
    -Parent Class can have propeties or can inherit propeties to child class 
    -cant be initiated the parent class
    -Abstract method should be defined on a child class
    -to be provide fucntionalities to other classes
    -can Interface extends Interface or multiple interface
    -can have constant
    -can have use the scope operator




*/


abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut() {

        print $this->getValue() . "\n";

    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix} ConcreteClass1";
    }
}



class ConcreteClass2 extends AbstractClass
{
    public function getValue() {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix) {
        return "{$prefix} ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut(); // result: ConcreteClass1
echo $class1->prefixValue('FOO_') ."\n"; //result: FOO_ ConcreteClass1

$class2 = new ConcreteClass2;
$class2->printOut(); //result: ConcreteClass2
echo $class2->prefixValue('FOO_') ."\n"; //FOO_ ConcreteClass2
?>


