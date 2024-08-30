<?php


 # Challange
class Product
{
    public $name = 'soap';
    # 1. Create a price property and give it a default integar value.
    public $price = 100;

    public function priceAsCurrency($currencysymbol = '$')
    {
        $priceAsCurrency = $this->price/100;

        return $currencysymbol . $priceAsCurrency;

    }
}

$product = new Product();
print $product->priceAsCurrency('&') . PHP_EOL;


