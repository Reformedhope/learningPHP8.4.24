<?php
class Calendar{

    //Regular properties
    //Value should vary between objects. 
    public $name; 

    //Static properties
    //Value can change but remains same(static) for class and instances.




    //Class constants
    //fixed values associated with this class. 
    public const MONTHS_IN_YEAR = 12;

    Public function getMonthsInYear(){

        return self::MONTHS_IN_YEAR;
    }



}

$calendar = new Calendar();

$calendar->name = ' Year Planner';

print $calendar->name . PHP_EOL;
print Calendar:: MONTHS_IN_YEAR . PHP_EOL;

?>