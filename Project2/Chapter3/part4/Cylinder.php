<?php


require_once'NoncuboidShape.php';
class Cylinder extends NonCuboidShape
{
    /**
     * Calculate the volume V = pieRadius2h
     *
     * @return float
     */
    public function volume(): float
    {
        return pi() * pow($this->dimensions['radius'], 2) * $this->dimensions['height'];

    }


}


?>