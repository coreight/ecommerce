<?php
/**
 * Created by PhpStorm.
 * User: coreight
 * Date: 30/08/15
 * Time: 19:11
 */

namespace App\Composite;


/**
 * Class Fichier
 * @package App\Composite
 */
class Fichier extends DossierComposite
{
    /**
     * @return array
     */
    public function afficherInfos()
    {
        return $infos = array($this->title, $this->description, $this->taille);
    }

}