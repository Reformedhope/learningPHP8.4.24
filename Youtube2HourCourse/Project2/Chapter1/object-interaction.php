<?php
class Song{
    public $title;
    public $id; 


}

$SomewhereInVagas = new Song(); 
$partyInTheUSA = new Song();

$SomewhereInVagas-> title="Somewhere In Vagas";
$SomewhereInVagas->id= 1;
//---
$partyInTheUSA->title="Party In the USA";
$partyInTheUSA->id="2";







class Playlist{
    public $name;
    public $songs = [];

//that adds a Song object to the songs array.
    public function addSongs($songs){
        $this->songs[] = $songs; 

    }

}

$playlist = new Playlist();
$playlist->name="Rock";
// calls the addSong method on the $playlist object.
//The $SomewhereInVagas object (which is an instance of Song) 
//is passed as an argument to this method.
$playlist->addSongs($SomewhereInVagas);
$playlist->addSongs($partyInTheUSA);


var_dump($playlist);

?>