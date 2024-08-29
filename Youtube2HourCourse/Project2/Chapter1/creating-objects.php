<?php

class User{
    public $name;
    public $userName;
    Public $followerCount;
    public $status;

}

$stephObject = new User();

$stephObject->name = "Steph";
$stephObject->user = "Reformedhope";
$stephObject->followCount="10";
$stephObject->status="What a wonderful day!";

var_dump($stephObject);
print_r($stephObject);




?>