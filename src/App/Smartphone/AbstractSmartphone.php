<?php
/**
 * Created by PhpStorm.
 * User: wal08
 * Date: 28/08/15
 * Time: 09:49
 */

namespace App\Smartphone;


abstract class AbstractSmartphone implements SmartphoneInterface
{
    protected $coque;
    protected $color;
    protected $capacity;
    protected $weight;

    function __construct($coque, $color, $capacity, $weight)
    {
        $this->coque = $coque;
        $this->color = $color;
        $this->capacity = $capacity;
        $this->weight = $weight;
    }

    abstract public function setCoque($coque);

    abstract public function setColor($color);

    abstract public function setCapacity($capacity);

    abstract public function setWeight($weight);

}