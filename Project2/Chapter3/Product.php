<?php

require_once'DataModel.php';

class Product extends DataModel{
    private string $name; 
    private float $price;
    protected string $tableName = 'products';



    /**
     * Undocumented function
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name; 

    }
 /**
  * Undocumented function
  *
  * @param string $name
  * @return string
  */
    public function getName( ): string
    {
        return $this->name;

    }



 /**
  * Undocumented function
  *
  * @param float $price
  * @return void
  */
    public function setPrice(float $price): void 
    {
        $this->price = $price; 
    }


    /**
     * Undocumented function
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;

    }

}


?>