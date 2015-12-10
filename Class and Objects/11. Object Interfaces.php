<!-- 
Object Interfaces

Object interfaces allow you to create code which specifies which methods a class must implement, 
without having to define how these methods are handled.

Interfaces are defined using the interface keyword, in the same way as a standard class, 
but without any of the methods having their contents defined.

All methods declared in an interface must be public; this is the nature of an interface. 

Constants ¶

It's possible for interfaces to have constants. Interface constants works exactly like class constants 
except they cannot be overridden by a class/interface that inherits them.


Note:
The class implementing the interface must use the exact same method signatures as are defined in the interface. 
Not doing so will result in a fatal error.



-->
<?php

// Declare the interface 'iTemplate'
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}


// Implement the interface
// This will work
class GoodTemplate implements iTemplate
{
    private $vars = array();
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
  
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
 
        return $template;
    }
}





// This will not work
// Fatal error: Class BadTemplate contains 1 abstract methods
// and must therefore be declared abstract (iTemplate::getHtml)
class BadTemplate implements iTemplate
{
    private $vars = array();
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
}
?>
