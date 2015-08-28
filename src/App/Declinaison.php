<?php

namespace App;

/**
 * Class Declinaison
 * @package App
 */
class Declinaison extends Product
{
    /**
     * @var
     */
    protected $poids;
    protected $hauteur;
    protected $profondeur;
    protected $nbImage;

    /**
     * Constructeur
     */
    public function __construct() {
        $nbImage = 0; // initialisation du compteur d'images
    }


/* #################### SETTERS & GETTERS #################### */


    /**
     * @return mixed
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * @param mixed $poids
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;
    }

    /**
     * @return mixed
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * @param mixed $hauteur
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;
    }

    /**
     * @return mixed
     */
    public function getProfondeur()
    {
        return $this->profondeur;
    }

    /**
     * @param mixed $profondeur
     */
    public function setProfondeur($profondeur)
    {
        $this->profondeur = $profondeur;
    }

    /**
     * @return mixed
     */
    public function getNbImage()
    {
        return $this->nbImage;
    }

    /**
     * @param mixed $nbImage
     */
    public function setNbImage($nbImage)
    {
        $this->nbImage = $nbImage;
    }

    /* #################### METHODES #################### */

    /**
     * Retourne une chaîne de caractères avec les dimensions
     * @return string
     */
    public function dimensions()
    {
        return "Poids : ".$this->getPoids()." Haut. : ".$this->getHauteur()." Prof. : ".$this->getProfondeur();
    }

    /**
     * Ajout d'images. Surcharge la méthode image de la class Product pour y ajouter un compteur
     * @param Image $item
     */
    public function addImage(Image $item) {
        $this->images[$item->getUrl()] = $item;
        $compteur = $this->getNbImage();
        $compteur++;
        $this->setNbImage($compteur);
    }

    /**
     * Suppression d'images.  Surcharge la méthode image de la class Product pour y ajouter un compteur
     * @param $item
     */
    public function deleteImage(Image $item)
    {
        unset($this->images[$item->getUrl()]);
        $compteur = $this->getNbImage();
        $compteur--;
        $this->setNbImage($compteur);
    }











}