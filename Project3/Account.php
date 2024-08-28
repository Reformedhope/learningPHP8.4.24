<?php
class Account{
    public $accountNumber; 
    public $accountHolder;
    public $balance; 

    public function deposit($depositAmount){
        $this->balance += $depositAmount;
        
        return $this->balance;
        
        
           
    }
    public function withdraw(){ 
    }
    public function getBalance(){
    
    }
}


?>