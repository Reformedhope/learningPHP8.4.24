<?php

// 1. create a basket class.



//5. use var_dump() and check your work in the browser.
class Basket{
    //2. add itemTotal and ShippingCost public properties.
    public $itemsTotal;
    public $shippingCost;
 //6. add a public discount property
    public $discount;

    //rerite the method so that the discount is deducted.
    public function calculateSubtotal() {
        $basketAdd = $this->itemsTotal + $this->shippingCost;
        $discountAdd = $basketAdd - $this->discount;  

        return $discountAdd;


    }



}
//3. Instantiate a Basket using the new keyword.
$basketObject = new Basket();
//4. set values for both properties
$basketObject->itemsTotal = '50';
$basketObject->shippingCost='10';
//7 set a value for the discount property.
$basketObject->discount='30';
//5+8. use var_dump() and check your work in the browser(works like print_r).

//here we are assigning a variable to  the basketObject
// that is accessing
//the instance of the calculateSubtotal Method. 
$total = $basketObject->calculateSubtotal();

var_dump($total);





?>