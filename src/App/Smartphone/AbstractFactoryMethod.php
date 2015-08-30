<?php

namespace App\Smartphone;

/**
 * Class AbstractFactoryMethod
 * @package App\Smartphone
 */
abstract class AbstractFactoryMethod
{

    const METAL = 1;
    const PLASTIQUE = 2;


    /**
     * @param $coque
     * @param $color
     * @param $capacity
     * @param $weight
     * @return mixed
     */
    abstract public function createSmartphone($coque,$color, $capacity, $weight);




}