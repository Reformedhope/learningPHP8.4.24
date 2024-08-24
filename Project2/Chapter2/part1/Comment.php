<?php
class Comment{
    public $text;
    public $userId; 
    public $likes; 


    public function __construct($text, $userId, $likes){
        $this->text=$text;
        $this->userId=$userId;
        $this->likes=$likes;

        
    }

}




?>