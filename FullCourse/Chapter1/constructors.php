<?php



class Product
{
    public $name;
    # 1. Create a price property and give it a default integar value.
    public $price;

    public function __construct($name = 'MOP', $price = '20'){
        $this->name = $name;
        $this->price = $price;

        
    }

    public function priceAsCurrency($divisor = 1, $currencysymbol = '$$' )
    {
        $priceAsCurrency = $this->price/$divisor;

        return $currencysymbol . $priceAsCurrency ;

    }
}
#challange
#1. give the constructor arguements default values.- his is up in the contruct method. 
#2 used the name arguements to only pass a price

//What is in the ()is the named arguement only passing the price. 
// which is overriding what the price value is holding in the construct method. 
$product = new Product(price:40);
print $product->name . PHP_EOL;
print $product->price;   