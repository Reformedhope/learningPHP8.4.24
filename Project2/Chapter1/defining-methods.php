<?php
class Basket{
    public $itemsTotal;
    public $tax;
    public $shippingCost;
    public $theGov;
   public $discount;

    public function calculateSubtotal(){
        $subTotal = $this->itemsTotal + $this->shippingCost;
        
        
        return $subTotal;
    }

    public function actualTotal(){
        $subTotal = $this->calculateSubtotal();
        $trueTotal = $subTotal + $this->tax;

        return $trueTotal;
    }

    public function unexpectedCost(){
        $trueTotal = $this->actualTotal();
        $ohNo = $trueTotal + $this->theGov;

        return $ohNo;

    }
    public function discountedValue(){
        $ohNo = $this->unexpectedCost();
        $yayDiscount= $ohNo - $this->discount;

        return $yayDiscount;
    
    }

    

 
    


}

    $basketObject = new Basket();

    $basketObject->itemsTotal=500.00;
    $basketObject->tax =2;
    $basketObject->shippingCost=4.99;
    $basketObject->theGov = 1000.23;
    $basketObject->discount= 500.01;
    

    $total = $basketObject->discountedValue();


    var_dump($total);
?>