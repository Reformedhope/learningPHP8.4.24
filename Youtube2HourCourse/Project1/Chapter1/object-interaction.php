<?php
//1.create a song class
//2. create songID and Title piblic properties
//3.instantiate an "octopus garden" song using the new keyword
//4. var_dump and check the browser

class Song{
    public $songId;
    public $title;
    public $artist;
}

$octopusSong = new Song;

$octopusSong->songId= '1';
$octopusSong->title ='Octopus Garden';
$octopusSong->artist='Beatles';

$someWhereSong = new Song;
$someWhereSong->songId = '2';
$someWhereSong->title = "Where in vagas";
$someWhereSong->artist="bambam";

//var_dump($octopusGarden);




class Playlist {
    public $name; 
    public $songs = []; // this is setting a default value on the property.


    public function addSong($songs){
        $this->songs[] = $songs;
    }
}

$playlist = new Playlist;
$playlist->name='RockNRoll';
$playlist->addSong($octopusSong);
$playlist->addSong($someWhereSong);

var_dump($playlist->songs);

?>