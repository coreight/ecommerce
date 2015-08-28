<?php

namespace App\Export;


class DartyFactory extends AbstractFactory
{

    /**
     * @param $title
     * @param $prixHT
     * @param $reference
     * @return mixed
     */
    public function createProduct($title, $prixHT, $reference)
    {
        return new Darty\Product($title, $prixHT, $reference);
    }

    /**
     * @param $title
     * @param $description
     * @return mixed
     */
    public function createCategorie($title, $description)
    {
        return new Darty\Categorie($title, $description);
    }

}