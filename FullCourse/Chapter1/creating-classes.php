<?php


 # Challange
// class Product
// {
//     public $name = 'soap';
//     # 1. Create a price property and give it a default integar value.
//     public $price = 100.00;

// }
// //creating an instance of the class
// $soapObject = new Product();
// print $soapObject->name ."</br>";
// //this is taking the name property and reassigning it to toothpaste. 
// $soapObject->name = 'Toothpaste'.'</br>';
// print $soapObject->name . "\n";


//  # 2. Access the price on a product object and print it
//     $priceObject = new Product();
//     print $priceObject->price . '</br>';
//      # 3.change the price
//     $priceObject->name = 400.00;
//      # 4.Access the (new) price on a product oject and print it.
//     print $priceObject->name . '</br>';

 
 //////
 class Product
{
    public $name = 'soap';
    # 1. Create a price property and give it a default integar value.
    public $price; #cents

    public function priceAsCurrency()
    {
        $priceAsCurrency = $this->price/100;

        return $priceAsCurrency;

    }
}

$soapObject = new Product();
$soapObject->price = 550;

$soapObject2 = new Product();
$soapObject2-> price = 5250;



$priceAsCurrency = $soapObject2->priceAsCurrency();
var_dump($priceAsCurrency);


