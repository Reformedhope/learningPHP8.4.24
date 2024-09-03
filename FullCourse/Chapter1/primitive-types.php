<?php
//The primitive types in php are: 

//boolean
//float
//
//string
//object
//resource
//array
//null

declare(strict_types=1);

require_once'Song.php';

$song = new Song('blackbird', 1); 

print $song->name;
var_dump($song->name);
print $song->numberOfplays;



?>