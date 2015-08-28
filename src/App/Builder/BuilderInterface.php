<?php

namespace App\Builder;

/**
 * Interface BuilderInterface
 * @package App\Builder
 */
interface BuilderInterface
{
    /**
     * @return mixed
     */
    public function enable();

    /**
     * @return mixed
     */
    public function addImages();

    /**
     * @return mixed
     */
    public function addCategorie();

    /**
     * @return mixed
     */
    public function quantity();

    /**
     * @return mixed
     */
    public function getProduct();

    /**
     * @return mixed
     */
    public function createProduct();

}