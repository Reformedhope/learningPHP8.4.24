<?php

require_once 'ThreeDimensionalShape.php';

class Sphere extends ThreeDimensionalShape {
    
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


