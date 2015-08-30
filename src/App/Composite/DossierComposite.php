<?php
/**
 * Created by PhpStorm.
 * User: coreight
 * Date: 30/08/15
 * Time: 19:07
 */
// à partir de l'exemple : https://fr.wikibooks.org/wiki/Patrons_de_conception/Objet_composite

namespace App\Composite;

/**
 * Class DossierComposite
 * @package App\Composite
 */
abstract class DossierComposite
{
    /**
     * @var
     */
    protected $title;
    protected $description;
    protected $taille;

    /* ########################### METHODES ################################ */

    abstract public function afficherInfos();


    /* ########################### GETTERS & SETTERS ################################ */

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }


}