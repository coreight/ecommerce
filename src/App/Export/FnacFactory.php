<?php

namespace App\Export;

/**
 * Class FnacFactory
 * @package App\Export
 */
class FnacFactory extends AbstractFactory
{

    /**
     * @param $title
     * @param $prixHT
     * @param $reference
     * @return mixed
     */
    public function createProduct($title, $prixHT, $reference)
    {
        return new Fnac\Product($title, $prixHT, $reference);
    }

    /**
     * @param $title
     * @param $description
     * @return mixed
     */
    public function createCategorie($title, $description)
    {
        return new Fnac\Categorie($title, $description);
    }

}