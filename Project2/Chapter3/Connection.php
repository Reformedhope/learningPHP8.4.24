<?php

class Connection{
    private static int $count = 0; 

/**
 * @var string Connection Identifer. 
 *
 * @var string
 */
    private string $connectionId;

    private int $conferenceId = 1234;

    public function __construct(){

        self::$count++; 

         
    }
    /**
     * destructor method will be called as soon as there 
     * is no other references
     * to a particular object
     * or in any order during the shutdown sequence. 
     */
    public function __destruct(){
        return self::$count--; 
    }
    /**
     * used for reading data from
     *  inaccessible(protected or private) preoperties
     */
    public function __get($name){
        return $this->$name;

    }



//create a solution for accessing the $count property. 
    public function getCount(){

        return self::$count;
    }

    
}


public function  setConnectionId($ipAddress){

    if(filter_var($ipAddress, FILTER_VALIDATE_IP)){

        $this->connectionId = $ipAddress . '-' . self:$count;

        return; 

    }
    die('Not a valid ip Address');

}

public function getconnectionId(){
    return $this->connectionId;
}


?>