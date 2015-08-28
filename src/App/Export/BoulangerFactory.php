<?php

namespace App\Export;

/**
 * Class BoulangerFactory
 * @package App\Export
 */
class BoulangerFactory extends AbstractFactory
{

    /**
     * @param $title
     * @param $prixHT
     * @param $reference
     * @return mixed
     */
    public function createProduct($title, $prixHT, $reference)
    {
        return new Boulanger\Product($title, $prixHT, $reference);
    }

    /**
     * @param $title
     * @param $description
     * @return mixed
     */
    public function createCategorie($title, $description)
    {
        return new Boulanger\Categorie($title, $description);
    }

}