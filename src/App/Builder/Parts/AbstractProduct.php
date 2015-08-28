<?php

namespace App\Builder\Parts;


/**
 * Class AbstractProduct
 * @package App\Builder\Parts
 */
abstract class AbstractProduct
{
    /**
     * @var
     */
    protected $data;

    /**
     * @param $key
     * @param $value
     */
    public function setParts($key, $value)
    {
        $this->data[$key] = $value;
    }

}