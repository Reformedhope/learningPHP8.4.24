<?php

//require_once 'ThreeDimensionalShape.php';
require_once'NonCuboidShape.php';

// I am changing the class from extending the ThreeDimensionalShape
// to extend the NoncuboidShape
class Sphere extends NonCuboidShape {
    
    // public function __construct($dimensions) {
    //     $this->dimensions = $dimensions;
    // }

    /**
     * Calculates the volume of a cylinder.
     * @return float
     */
    public function volume(): float
    {
        return (4/3) * pi() * pow($this->dimensions['radius'], 3);

    }


}


