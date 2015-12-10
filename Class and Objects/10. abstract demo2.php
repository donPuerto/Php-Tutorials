<!-- 
Note: 
    Take note on the example below:
    abstract can have argument that does not have signature on the parent class        

-->


<?php
abstract class AbstractClass
{
    // Our abstract method only needs to define the required arguments
    abstract protected function prefixName($name);

}

class ConcreteClass extends AbstractClass
{

    // Our child class may define optional arguments not in the parent's signature
    public function prefixName($name, $separator = ".") {
        if ($name == "Pacman") {
            $prefix = "Mr";
        } elseif ($name == "Pacwoman") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }
        return "{$prefix}{$separator} {$name}";
    }
}

$class = new ConcreteClass;
echo $class->prefixName("Pacman"), "\n"; //result: Mr. Pacman
echo $class->prefixName("Pacwoman"), "\n"; //result: Mr. Pacwoman
?>