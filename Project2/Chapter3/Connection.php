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
    /**
     * The string representation of an object.
     * 
     * the __toString method allows a class to decide how
     *  it will react when it is treated like a string 
     * 
     * For example what echo/print $obj; will print. 
     *
     * @return string
     */
    public function __toString(){
        return "Confrence ID: {$this->conferenceId} </br> Connection ID: {$this->connectionId} </br></br>"; 
        
    }



//create a solution for accessing the $count property. 
    public function getCount(){

        return self::$count;
    }


    public function setConnectionId($ipAddress) {
        if (filter_var($ipAddress, FILTER_VALIDATE_IP)) {
            // Corrected the typo here
            $this->connectionId = $ipAddress . '-' . self::$count;
    
            return;
        }
    
        die('Not a valid IP address');
    }

    public function getconnectionId(){
        return $this->connectionId;
    }




    
}


