<?php

namespace App\Export\Darty;

use App\Export\Categorie as BaseCategorie;

class Categorie extends BaseCategorie
{


    /**
     * @param int $title
     * @param string $description
     * @param $reference
     */
    public function __construct($title, $description){
        $this->title = $title;
        $this->description = $description;
    }
    /**
     * Affiche la catégorie chez Darty
     * @return string
     */
    public function vente(){
        return "La catégorie chez Darty est ".$this->getTitle();
    }
}