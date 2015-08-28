<?php

namespace App;

use \App\Product;

/**
 * Class Stock
 * @package App
 */
class Stock {


    public function gestionStock(Product $produit, $qteCommande)
    {

        $qteStock = $produit->getQuantite();

        try {
            if ($qteCommande <= $qteStock) {

                $nouveauStock = $qteStock - $qteCommande;
                $produit->setQuantite($nouveauStock);
                return "nouveau stock : ".$produit->getQuantite();

            } else {
                throw new \Exception('Stocks insuffisants.');
            }
        } catch(\Exception $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
    }

} 