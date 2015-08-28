<?php

namespace App\Export\Darty;

use App\Export\Product as BaseProduct;

class Product extends BaseProduct
{

    /**
     * @param int $title
     * @param string $prixHT
     * @param $reference
     */
    public function __construct($title, $prixHT, $reference){
        $this->title = $title;
        $this->prixHT = $prixHT;
        $this->reference = $reference;
    }
    /**
     * Affiche le produit chez Darty
     * @return string
     */
    public function vente(){
        return "Le produit chez Darty est ".$this->getTitle();
    }
}