<?php
/**
 * Created by PhpStorm.
 * User: coreight
 * Date: 30/08/15
 * Time: 19:11
 */

namespace App\Composite;


/**
 * Class Dossier
 * @package App\Composite
 */
class Dossier extends DossierComposite
{

    /**
     * @var
     */
    protected $fichiers;

    /* ########################### METHODES ################################ */


    /**
     * @return array
     */
    public function afficherInfos()
    {
        return $infos = array($this->title, $this->description, $this->taille);
    }


    /**
     * @param Fichier $fichier
     */
    public function ajouterFichier(Fichier $fichier)
    {
        $this->fichiers[$fichier->getTitle()] = $fichier;
    }

    /**
     * @param Fichier $fichier
     */
    public function supprimerFichier(Fichier $fichier)
    {
        unset($this->fichiers[$fichier->getTitle()]);
    }


    /* ########################### GETTERS & SETTERS ################################ */


    /**
     * @return mixed
     */
    public function getFichiers()
    {
        return $this->fichiers;
    }

    /**
     * @param mixed $fichiers
     */
    public function setFichiers($fichiers)
    {
        $this->fichiers = $fichiers;
    }


}