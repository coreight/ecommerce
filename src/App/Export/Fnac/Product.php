<?php

namespace App\Export\Fnac;

use App\Export\Product as BaseProduct;

class Product extends BaseProduct
{

    /**
     * @param $title
     * @param $prixHT
     * @param $reference
     */
    public function __construct($title, $prixHT, $reference){
        $this->title = $title;
        $this->prixHT = $prixHT;
        $this->reference = $reference;
    }
    /**
     * Affiche le produit chez Boulanger
     * @return string
     */
    public function vente(){
        return "Le produit chez Fnac est ".$this->getTitle();
    }
}