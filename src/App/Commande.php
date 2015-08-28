<?php


namespace App;



/**
 * Class Commande
 * @package App
 */
class Commande extends AbstractProductList
{
    /**
     * @var
     */
    protected $id;
    protected $reference;
    protected $etat;
    protected $dateLivraison;

    public function __construct()
    {

    }

    /* #################### SETTERS & GETTERS #################### */

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }

    /**
     * @param mixed $dateLivraison
     */
    public function setDateLivraison(\Datetime $dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;
    }


    /* #################### METHODES #################### */

    /**
     * Modification de l'état selon la date de livraison
     */
    public function etatLivraison()
    {
        $livraison = $this->getDateLivraison()->format('Y-m-d');
        $today = \date('Y-m-d');
        dump($livraison);
        dump($today);
        if ($livraison == $today) {
            $this->setEtat(1);
        } elseif ($livraison > $today) {
            $this->setEtat(0);
        } else {
            $this->setEtat(2);
        }
    }

}