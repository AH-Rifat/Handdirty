<?php 
//Magic Methods

/*
Magic methods must be defined with "public" attribute.
The __get() and __set() methods are generally used together and are designed for working with properties that are not defined in a class (or its parents). 
__get($property) - automatically invoked when an undefined property is accessed 
__set($property, $value) - automatically invoked when a value is assigned to an undefined property
The __get() method must be defned with one parameter 
The __set() must be declared with two arguments. 
The __call() method is invoked when an undefined method is called

__get($property)
__set($property, $value)
__call($method, $arg_array)

*/

class Student{

  //public $name;

  public function describe(){

    echo "I am a student.<br/>";
  }

  public function __get($pm){

    echo "$pm does not exist<br/>";
  }

  public function __set($pm, $value){
    echo "We set $pm->$value<br/>";
  }

  public function __call($pm, $value){

   echo 'There is no <b>'.$pm. '</b> method and Arguments: '.implode(', ', $value);

  }


}

$st = new Student();
$st->describe();
$st->Hasan;
$st->age = 15;

$st->notExistMethod('2', '8', '5');

 ?>
