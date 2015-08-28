<?php

namespace App\Export;


/**
 * Class AbstractFactory
 * @package App\Export
 */
abstract class AbstractFactory {

    /**
     * @param $title
     * @param $prixHT
     * @param $reference
     * @return mixed
     */
    abstract public function createProduct($title, $prixHT, $reference);

    /**
     * @param $title
     * @param $description
     * @return mixed
     */
    abstract public function createCategorie($title, $description);




}
