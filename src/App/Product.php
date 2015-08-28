<?php

namespace App;


class Product extends Catalogue
{
    /**
     * @var
     */
    protected $title;
    protected $description;
    protected $marque;
    protected $couleur;
    protected $os;
    protected $reference;
    protected $prix;
    protected $prixHT;
    protected $date;
    protected $disponible;
    protected $images;
    protected $quantite;
    protected $categorie;

    /**
     * Constantes
     */
    const TRANSPORTEURS = "UPS";
    const LANG = "FR";
    // Constantes indiquant l'état de disponibilité d'un produit
    const INDISPONIBLE = 0;
    const COMMANDE = 1;
    const REAPPRO = 2;
    const DISPONIBLE = 3;


    public function __construct()
    {

    }

/* #################### SETTERS & GETTERS #################### */

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
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * @param mixed $os
     */
    public function setOs($os)
    {
        $this->os = $os;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getPrixHT()
    {
        return $this->prixHT;
    }

    /**
     * @param mixed $prixHT
     */
    public function setPrixHT($prixHT)
    {
        $this->prixHT = $prixHT;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * @param mixed $disponible
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param mixed $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie(Categorie $categorie)
    {
        $this->categorie = $categorie;
    }


    /* #################### METHODES #################### */

    /**
     * Méthode magique qui va renvoyer le titre et le prix lorsque l'on fera un echo sur un objet
     * @return mixed|string
     */
    public function __toString() {
        return $this->title . " : " . $this->prix;
    }

    /**
     * Ajout d'images
     * @param Image $item
     */
    public function addImage(Image $item) {
        $this->images[$item->getUrl()] = $item;
    }

    /**
     * Suppression d'images
     * @param $item
     */
    public function deleteImage(Image $item)
    {
        unset($this->images[$item->getUrl()]);
    }


}




