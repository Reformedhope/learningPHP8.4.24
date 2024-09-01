<?php


 # Challange
class Product
{
    public $name = 'soap';
    # 1. Create a price property and give it a default integar value.
    public $price = 10;

    public function priceAsCurrency($divisor = 1, $currencysymbol = '$$' )
    {
        $priceAsCurrency = $this->price/$divisor;

        return $currencysymbol . $priceAsCurrency ;

    }
}

$product = new Product();
print $product->priceAsCurrency(currencysymbol:'£') . PHP_EOL;


#Challange: give $divisor a default value. 
#test it out by passing and not passing.