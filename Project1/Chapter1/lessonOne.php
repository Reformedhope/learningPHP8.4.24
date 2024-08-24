<?php
class User{
    //create properties 
    public $name;
    public $userName;
    public $location;
    public $email;
    public $followCount;

}
//To create an instance of a class, the new keyword must be used.
// An object will always be created unless the object has a constructor defined that throws an exception on error.
// Classes should be defined before instantiation (and in some cases this is a requirement).
$stephObject = new User();
//creating a variable and then making an assignment.
//'-> this is called the object opporator'


$stephObject->name = 'Stephanie Salzburg';
$stephObject->userName = "Reformedhope";
$stephObject->location='Battle Creek';
$stephObject->email= 'steph.salzburg@djfdkf.com';
$stephObject->followCount='50';
print_r($stephObject);
echo("This is the page")


?>