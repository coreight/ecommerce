<?php

namespace App;

/**
 * Class Categorie
 * @package App
 */
class Categorie
{
    /**
     * @var
     */
    protected $title;
    protected $description;
    protected $visible;
    protected $products;

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
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * @param mixed $visible
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param mixed $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }

    /* #################### METHODES #################### */

    /**
     * Méthode pour ajouter des produits dans la catégorie
     * @param Product $product
     * @return $this
     */
    public function addProduct (Product $product)
    {
        array_push($this->products, $product);
        return $this;
    }

    /**
     * Méthode pour supprimer des produits dans la catégorie
     * @param $product
     * @return $this
     */
    public function deleteProduct ($product)
    {
        unset($this->products[$product]);
        return $this; // Facultatif, on pourrait utiliser le getter pour ça
        // On pourrait mieux faire en recherchant par le nom de l'objet
    }

    /**
     * Méthode pour tester si la catégorie comporte un ou plusieurs produit(s)
     * @return bool
     */
    public function testProduct ()
    {
        !empty($this->products) ? $test = true : $test = false;
        return $test;
    }

    /**
     * Méthode pour compter le nb de produits de la catégorie
     * @return string
     */
    public function countProduct () {
        if (count($this->products) <= 0) {
            throw new OutOfStockException("Il n'y a pas de produit dans cette catégorie");
        }


        return "Il y a ".count($this->products)." produit(s) dans la cat&eacute;gorie ".$this->title;
    }

    public function getParent(Visible $category)
    {
        var_dump($category);
        return "La catégorie parente est : ".$category->getTitle();
    }


}