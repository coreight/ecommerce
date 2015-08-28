<?php

namespace App\Export\Fnac;

use App\Export\Categorie as BaseCategorie;

class Categorie extends BaseCategorie
{
    /**
     * @param $title
     * @param $description
     */
    public function __construct($title, $description){
        $this->title = $title;
        $this->description = $description;
    }

    /**
     *  Affiche la catégorie chez Boulanger
     * @return string
     */
    public function vente()
    {
        return "La catégorie chez Fnac est".$this->getTitle();
    }
}