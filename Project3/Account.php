<?php
class Account{
    public $accountNumber; 
    public $accountHolder;
    public $balance; 
    public $transactions = [];

    public function deposit($depositAmount){
        $this->balance += $depositAmount;
        if(!empty($depositAmount)){
            $this->transactions[] = $depositAmount;

        }else{
            $this->transactions[] = 0;
        }
        
        return $this->balance;
            
    }
    public function withdraw($depositAmount){ 
    $this ->balance -= $depositAmount;
    return $this->balance;
    }

    public function getBalance(){
        return $this ->balance;

    
    }

    public function logTransactions($title, $amount, $newBalance)
    {
        $this->transactions[] = ["title"=> $title,
        "amount"=> $amount,"newBalance" => $newBalance];
        return $this->transactions;



    }
}



?>