<?php

namespace App;

use App\Product;

/**
 * Class AbstractProductList
 * @package App
 */
abstract class AbstractProductList
{

    /**
     * @var
     */
    protected $prixHT;
    protected $prixTTC;
    protected $products;
    protected $user;


    /* #################### SETTERS & GETTERS #################### */

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
    public function getPrixTTC()
    {
        return $this->prixTTC;
    }

    /**
     * @param mixed $prixTTC
     */
    public function setPrixTTC($prixTTC)
    {
        $this->prixTTC = $prixTTC;
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

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /* #################### METHODES #################### */

    /**
     * Méthode pour ajouter un produit
     * @param $product
     */
    public function addProduct(Product $product, $quantite = 1)
    {

        $this->products[$product->getTitle()]["product"] = $product;
        $this->products[$product->getTitle()]["quantite"] = $quantite;
    }

    /**
     * Méthode pour retirer un produit de la commande
     * @param $search
     */
    public function removeProduct(Product $search)
    {
        $key = array_search($search, $this->products);
        unset($this->products[$key]);
    }

    /**
     * Méthode de calcul du prix total HT
     */
    public function prixCommandeHT()
    {
        $table_prix = array();
        foreach ($this->products as $product) {
            $sumProduct =  $product['quantite'] * $product['product']->getPrixHT();
            array_push($table_prix , $sumProduct);

        }
        $this->prixHT = array_sum($table_prix);
    }

    /**
     * Méthode de calcul du prix total TTC
     */
    public function prixCommandeTTC($tva = 20)
    {
        $this->prixTTC = $this->prixHT + $this->prixHT * ($tva/100);
    }



    /**
     * Méthode pour vérifier dans le stock qu'un produit est toujours disponible.
     * @return mixed
     */
    public function isAvailable()
    {
        // Pour chaque produit de la commande :
        foreach ($this->products as $product) {

            // On vérifie les stocks
            $stock = new \App\Stock();
            $stock = $stock->gestionStock($product["product"], $product["quantite"]);

            // On enregistre le résultat dans un tableau
            $commandeResume[$product["product"]->getTitle()]  = $stock;
        }
        return $commandeResume;
    }



}